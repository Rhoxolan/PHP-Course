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
    <?
    $component = "";
    $component .= "<span>";
    foreach ($history as $page) {
        $component .= "$page ";
    }
    $component .= "</span>";
    echo $component;
    ?>
</p>