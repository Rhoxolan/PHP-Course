<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?
    include("month.php");

    try
    {
        $component = generateMonthCalendar(7);
        echo $component;
    }
    catch (Exception $ex)
    {
        echo $ex->getMessage();
    }
    ?>
</body>

</html>