<style>
    table {
        border-collapse: collapse;
    }
    td, th {
        border: 1px solid black;
        padding: 5px 10px;
    }
</style>

<?
$folderPath = "Data Base";
$dbFilePath = "/carsDb.txtdb";

$component = "";

if (file_exists($folderPath.$dbFilePath)) {
    $fd = fopen($folderPath.$dbFilePath, "r");

    while(!feof($fd)) {
        $str = fgets($fd);
        if ($str !== false && trim($str) !== '') {
            $fields = explode("·", $str);
            $component .= "<tr>";
            foreach ($fields as $field) {
                $component .= "<td>".$field."</td>";
            }
            $component .= "</tr>";
        }
    }

    fclose($fd);
}

if (!empty($component)) {
    $tableTag = "<table border='1'>";
    $tableTag .= "<tr><th>Manufacturer</th><th>Model</th><th>Price</th><th>Year</th></tr>";
    $component = $tableTag.$component;
    $component .= "</table>";
    echo $component;
}
else {
    echo "<script>window.location = '/?page=Home';</script>";
}