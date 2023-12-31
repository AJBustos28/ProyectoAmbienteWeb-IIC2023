<?php
// Database connection settings
$host = "localhost";
$username = "root";
$password = "";
$database = "PASTELERIA";

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle delete request
if (isset($_GET['delete_id'])) {
    $deleteId = $_GET['delete_id'];
    $deleteQuery = $conn->prepare("DELETE FROM Pedido WHERE id = ?");
    $deleteQuery->bind_param("i", $deleteId);
    if($deleteQuery->execute()) {
        header("Location: admin.php");
        } else {
            echo "Error al borrar el pedido: " . $conn->error;
        }
}

// Handle update request
if (isset($_POST['update_id'])) {
    $updateId = $_POST['update_id'];
    $newTipoPastel = $_POST['new_tipo_pastel'];
    $newPersonaOrden = $_POST['new_persona_orden'];
    $newCantidad = $_POST['new_cantidad'];
    $newComentario = $_POST['new_comentario'];
    $updateQuery = "UPDATE Pedido SET tipo_pastel = '$newTipoPastel', persona_orden = '$newPersonaOrden', cantidad = '$newCantidad', comentario = '$newComentario' WHERE id = $updateId";
    if ($conn->query($updateQuery) === TRUE) {
        header("Location: admin.php");
    } else {
        echo "Error actualizando el pedido: " . $conn->error;
    }
}

if (isset($_POST['new_tipo_pastel'])) {
    $newTipoPastel = $_POST['new_tipo_pastel'];
    $newPersonaOrden = $_POST['new_persona_orden'];
    $newCantidad = $_POST['new_cantidad'];
    $newComentario = $_POST['new_comentario'];
    $insertQuery = "INSERT INTO Pedido (tipo_pastel, persona_orden, cantidad, comentario) VALUES ('$newTipoPastel', '$newPersonaOrden', '$newCantidad', '$newComentario')";

    if ($conn->query($insertQuery) === TRUE) {
        header("Location: admin.php"); 
    } else {
        echo "Error creando el pedido: " . $conn->error;
    }
}

// Fetch data from the Pedido table
$sql = "SELECT * FROM Pedido";
$result = $conn->query($sql);

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Orders</title>
    <link rel="stylesheet" href="CSS/admin.css">
</head>
<body>
<nav>
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="postres.php">Postres</a></li>
    </ul>
  </nav>
    <div class=content-box>
    <h1>Ordenes</h1>
    <a href="crear_orden.php" class="boton-1">Crear orden de postre</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Tipo de postre</th>
            <th>Ordenado por</th>
            <th>Cantidad</th>
            <th>Comentarios</th>
            <th>Fecha de la orden</th>
            <th>Accciones</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["tipo_pastel"] . "</td>";
                echo "<td>" . $row["persona_orden"] . "</td>";
                echo "<td>" . $row["cantidad"] . "</td>";
                echo "<td>" . $row["comentario"] . "</td>";
                echo "<td>" . $row["fecha_creacion"] . "</td>";
                echo "<td>
        <a href='javascript:void(0)' onclick='confirmDelete(" . $row["id"] . ")'>Delete</a>
        <a href='#' onclick='showEditForm(" . $row["id"] . ")'>Edit</a>
    </td>";
                echo "</tr>";
                echo "<tr class='edit-form' id='edit_form_" . $row["id"] . "'>
                        <td colspan='7'>
                            <form method='post'>
                                <input type='hidden' name='update_id' value='" . $row["id"] . "'>
                                <input type='text' name='new_tipo_pastel' value='" . $row["tipo_pastel"] . "'>
                                <input type='text' name='new_persona_orden' value='" . $row["persona_orden"] . "'>
                                <input type='number' name='new_cantidad' value='" . $row["cantidad"] . "'>
                                <input type='text' name='new_comentario' value='" . $row["comentario"] . "'>
                                <button type='submit'>Guardar</button>
                                <button type='button' onclick='hideEditForm(" . $row["id"] . ")'>Cancelar</button>
                            </form>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No orders found.</td></tr>";
        }
        ?>
    </table>
    </div>
    <script>
function confirmDelete(id) {
        if (confirm("Seguro que quieres eliminar este pedido?")) {
            window.location.href = 'admin.php?delete_id=' + id;
        }
    }
        
        function showEditForm(id) {
            var editForm = document.getElementById("edit_form_" + id);
            editForm.style.display = "table-row";
        }

        function hideEditForm(id) {
            var editForm = document.getElementById("edit_form_" + id);
            editForm.style.display = "none";
        }
    </script>
</body>
</html>
