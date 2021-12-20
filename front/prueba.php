<!DOCTYPE html>
<html>
<body>

<?php
$servername = "labs.inspedralbes.cat";
$username = "a18polpuipui_pol";
$password = "Movie1234";
$dbname = "a18polpuipui_movie";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username="toni";
$sql = "SELECT id, username, password FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);
        echo "password " . $row["password"]. "<br>";
    


mysqli_close($conn);
?>

</body>
</html>