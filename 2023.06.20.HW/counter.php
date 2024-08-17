<?
$count = "";
$name = "";
$date = "";

if (!isset($_COOKIE["visit_count"], $_COOKIE["name"], $_COOKIE["time"])) {
    $count = 1;
    setcookie("visit_count", $count, time() + 3600);
    $name = $_SERVER["REMOTE_ADDR"];
    setcookie("name", $name, time() + 3600);
    setcookie("time", $_SERVER["REQUEST_TIME"], time() + 3600);
}
else {
    $count = $_COOKIE["visit_count"];
    setcookie("visit_count", ++$count, time() + 3600);
    $name = $_COOKIE["name"];
    $date = date("d m Y H:i:s", $_COOKIE["time"]);
    setcookie("time", $_SERVER["REQUEST_TIME"], time() + 3600);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter</title>
</head>
<body>
    <p>
        Visits count: <? echo $count; ?>
        <br>
        Name: <? echo $name; ?>
        <br>
        Date of last visit: <? echo $date; ?>
    </p>
</body>
</html>