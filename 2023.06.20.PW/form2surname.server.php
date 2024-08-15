<?

session_start();
$_SESSION["Surname"] = $_POST["Surname"];
header("Location: /?page=Age");