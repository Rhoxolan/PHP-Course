<?

session_start();
$_SESSION["Name"] = $_POST["Name"];
header("Location: /?page=Surname");