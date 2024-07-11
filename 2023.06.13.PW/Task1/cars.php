<?
$cars = array(
    "BMW" => array(
        "model" => "BMW 1600-2",
        "price" => "10000",
        "year" => "1971"
    ),
    "Toyota" => array(
        "model" => "Toyota Corolla E31",
        "price" => "7000",
        "year" => "1977"
    ),
    "Skoda" => array(
        "model" => "Skoda 1000 MB",
        "price" => "10000",
        "year" => "1965"
    )
);

$component = '<h1>Cars (with foreach)</h1>';
$index = 1;
foreach ($cars as $car) {
    $component .= '<div style="margin: 5px;">';
    $component .= "<h3>Car #$index</h3>";
    $component .= '<div>';
    $component .= 'model - '.$car['model'].', ';
    $component .= 'price - '.$car['price'].', ';
    $component .= 'year - '.$car['year'];
    $component .= '</div>';
    $component .= '</div>';
    $index++;
}
echo $component;

$component2 = '<h1>Cars (with print_r)</h1>';
$component2 .= '<div>';
$component2 .= print_r($cars, true);
$component2 .= '</div>';
echo $component2;

$component3 = '<h1>Cars (with json_encode)</h1>';
$serializedObject = json_encode($cars);
$component3 .= '<div>'.$serializedObject.'</div>';
echo $component3;