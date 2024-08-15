<?

session_start();
$_SESSION["Age"] = $_POST["Age"];
header("Location: /?page=Display");