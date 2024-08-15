<?
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?
    include("documentGo.php");

    $links = [
        'Name' => 'form1name.php',
        'Surname' => 'form2surname.php',
        'Age' => 'form3age.php',
        'Display' => 'form4display.php'
    ];

    $component = "";
    $first_page = array_key_first($links);

    $component .= "<div style='margin: 5px; display:inline-block; '>";
    $component .= "<a href='/?page=$first_page'>Start</a>";
    $component .= "</div>";

    echo $component;
    ?>

    <div style='margin: 5px;'>
        <?
        if (!isset($_GET["page"])) {
            include($links[$first_page]);
        } else {
            document_go("page", $links);
        }
        ?>
    </div>

</body>

</html>