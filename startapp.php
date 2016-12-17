<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:project2-chatroom.database.windows.net,1433; Database = ChatRoom", "BradGit", "MemberThe90s");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "BradGit@project2-chatroom", "pwd" => "MemberThe90s", "Database" => "ChatRoom", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:project2-chatroom.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);


while($row = mysqli_fetch_array($result)) {
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>