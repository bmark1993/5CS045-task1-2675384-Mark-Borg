<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phptest";
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #0e0202;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Books</h2>

<table>
  <tr>
    <th>Book name</th>
    <th>Genre</th>
    <th>Price</th>
    <th>Date of release</th>
  </tr>
<?php
$sql = "Select * from books";

$result = $conn->query($sql);

if ($result->num_rows > 0){
    while ($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["Book_name"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["Genre"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["Price"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["Date_of_release"]) . "</td>";
        echo "<tr>";
    }
} 

$conn->close();
?>
  
</table>

</body>
</html>







