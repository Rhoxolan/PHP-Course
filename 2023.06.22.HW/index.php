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
        'Home' => 'home.php',
        'Upload' => 'upload.php'
    ];
    $first_page = array_key_first($links);

    $component = "";
    foreach ($links as $key => $value) {
        $component .= "<div style='margin: 5px; display:inline-block; '>";
        $component .= "<a href='/?page=$key'>$key</a>";
        $component .= "</div>";
    }
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