<?
$name = $_SESSION["Name"];
$surname = $_SESSION["Surname"];
$age = $_SESSION["Age"];

$history = $_SESSION["History"];

?>

<p>
    Name: <? echo $name; ?>
    <br>
    Surname: <? echo $surname; ?>
    <br>
    Age: <? echo $age ?>
    <br>
</p>
<p>
    History:
    <br>
    <?
    $text = "";
    foreach ($history as $page) {
        $text .= "$page<br>";
    }
    echo $text;
    ?>
</p>