<?
$folderPath = "Data Base";
$dbFilePath = "/carsDb.txtdb";

$lineCount = 0;

if (file_exists($folderPath.$dbFilePath)) {
    $fd = fopen($folderPath.$dbFilePath, "r");

    while(!feof($fd)) {
        $str = fgets($fd);
        if (!empty(trim($str))) {
            $lineCount++;
        }
    }

    fclose($fd);
}

if ($lineCount > 0) {
    echo "<h3>The Cars count is $lineCount</h3>";
}
else {
    echo "<h3>No cars have been added!</h3>";
}
