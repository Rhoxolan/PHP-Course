<?
$car = array(
    "manufacturer" => $_POST["Manufacturer"],
    "model" => $_POST["Model"],
    "price" => $_POST["Price"],
    "year" => $_POST["Year"]
);

save_to_file($car);

function save_to_file($car)
{
    $folderPath = "Data Base";
    $dbFilePath = "/carsDb.txtdb";

    if (!file_exists($folderPath)) {
        mkdir($folderPath);
    }

    $carData = $car["manufacturer"].'·'.$car["model"].'·'.$car["price"].'·'.$car["year"];

    $fd = fopen($folderPath.$dbFilePath, "a+");

    while(!feof($fd)) {
        $str = fgets($fd);
        if (strpos($str, $carData) !== false) {
            echo "<script>alert('This data is exist!');</script>";
            return;
        }
    }

    fwrite($fd, $carData);

    fclose($fd);
}
