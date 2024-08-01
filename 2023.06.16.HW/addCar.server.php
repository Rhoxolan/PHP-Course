<?
//session_start();

$car = array(
    "manufacturer" => $_POST["Manufacturer"],
    "model" => $_POST["Model"],
    "price" => $_POST["Price"],
    "year" => $_POST["Year"]
);

save_to_file($car);
echo "<script>window.location = '/?page=Add%20Car';</script>";

//Реализация подхода Post/Redirect/Get
//С помощью данного функционала мы аналогично можем добиться перенаправления на форму с отображением сообщения от сервера
//header("Location: /?page=Add%20Car");

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
            //$_SESSION["message"] = 'This data is exist!'; //См. комм. выше
            return;
        }
    }

    fwrite($fd, $carData.PHP_EOL);

    fclose($fd);
}
