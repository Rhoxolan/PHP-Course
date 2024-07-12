<?
$cols = rand(1, 10);
$rows = rand(1, 10);

$component = '<table border="1" cellpadding="10" cellspacing="0">';

for ($i = 1; $i <= $rows; $i++) {
    $component .= '<tr>';
    for ($j = 1; $j <= $cols; $j++) {
        if ($i > 1 && $j > 1) {
            $component .= '<td style="background-color: lightgray; text-align: center;">'.($i * $j).'</td>';
        }
        else {
            $component .= '<th style="background-color: darkgray; text-align: center; font-weight: bold;">'.($i == 1 ? $j : $i).'</th>';
        }
    }
    $component .= '</tr>';
}

$component .= '</table>';

echo $component;