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

    $links = ['About' => 'about.php', 'Contacts' => 'contacts.php', 'News' => 'news.php'];
    $component = "";
    foreach ($links as $key => $value) {
        $component .= "<div style='margin: 5px; display:inline-block; '>";
        $component .= "<a href='/menu.php/?page=".$key."'>".$key."</a>";
        $component .= "</div>";
    }
    echo $component;

    ?>
    <div style='margin: 5px;'>
        <?
        document_go("page", $links);
        ?>
    </div>
</body>

</html>