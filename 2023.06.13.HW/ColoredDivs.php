<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colored Divs</title>
</head>

<body>
    <?
    $colors = ['red', 'yellow', 'brown', 'green', 'purple'];
    shuffle($colors);
    $slisedColorsArray = array_slice($colors, 0, 4);
    $compomemt = "<div style='margin:15px; display:inline-block '>";
    foreach ($slisedColorsArray as $color) {
        $compomemt .= "<div style='margin:5px; height:50px; width:100px; background-color:$color '></div>";
    }
    $compomemt .= '</div>';
    echo $compomemt;
    ?>
</body>

</html>