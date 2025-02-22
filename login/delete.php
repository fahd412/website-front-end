<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "caravan_db"; 

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, name FROM users"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Name</th><th>Description</th><th>Action</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["description"]."</td><td><form method='post'><input type='hidden' name='name' value='".$row["name"]."'><input type='submit' name='delete' value='Delete'></form></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

if(isset($_POST['delete'])) {
    $name_to_delete = $_POST['name'];
    $delete_sql = "DELETE FROM users WHERE name='$name_to_delete'";
    if ($conn->query($delete_sql) === TRUE) {
        echo "Record deleted successfully";
      
        header("Location: caravan.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} 


$conn->close();
?>
