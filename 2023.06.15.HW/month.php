<?
function generateMonthCalendar($m) {
    if ($m <1 || $m > 12) {
        throw new Exception('The value $m isn`t valid!');
    }

    $today = date("j"); //Получаем текущий день
    $month = date("m"); //Получаем текущий месяц
    $year = date("Y"); //Получаем год
    $firstDayOfMonthTimestamp  = mktime(0, null, null, $m, 1, $year); //Получаем временную метку Unix для первого дня месяца
    $daysInMonth = date("t", $firstDayOfMonthTimestamp); //Получаем к-во дней в месяце
    $dayOfWeek = date("w", $firstDayOfMonthTimestamp); //Получаем порядковый номер дня недели
    $dayOfWeek = ($dayOfWeek + 6) % 7; // Преобразовываем формат с "От 0 (воскресенье) до 6 (суббота)" на "0 - понедельник, 6 - воскресенье"
    $weekDays = ["Пн", "Вт", "Ср", "Чт", "Пт", "Сб", "Вс"];

    $component = "<table border='1'><tr>";
    foreach ($weekDays as $day) {
        $component .= "<th>$day</th>"; //Добавляем ячейки с днями недели
    }
    $component .= "</tr><tr>";
    if ($dayOfWeek > 0) {
        for ($i = 0; $i < $dayOfWeek; $i++) {
            $component .= "<td></td>"; //Если день > чем Понедельник - добавляем пустые ячейки
        }
    }
    $currentDay = 1;
    while ($currentDay <= $daysInMonth) {
        if ($dayOfWeek == 7) {
            $dayOfWeek = 0;
            $component .= "</tr><tr>"; //Размечаем строку для дней месяца
        }
        if ($currentDay == $today && $m == $month) {
            $component .= "<td><strong>$currentDay</strong></td>"; //Добавляем день месяца
        }
        else {
            $component .= "<td>$currentDay</td>"; //Добавляем день месяца
        }
        $currentDay++;
        $dayOfWeek++;
    }
    if ($dayOfWeek != 7) {
        for ($i = $dayOfWeek; $i < 7; $i++) {
            $component .= "<td></td>"; //Если день не = Воскресенье - добавляем пустые ячейки
        }
    }
    $component .= "</tr></table>";

    return $component;
}