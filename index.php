<?php
$date = array();
mt_srand(time());
for ($i=1; $i<=5; $i++) {
	$date[] = mt_rand();
}
$day = array();
for ($i=0; $i<5; $i++) {
        $day[] = date('j', $date[$i]);
}
echo 'Наименьший день: '.min($day);
echo '<br>';
$month = array();
for ($i=0; $i<5; $i++) {
	$month[] = date('n', $date[$i]);
}
echo 'Наибольший месяц: '.max($month);
echo '<br>';
sort($date);
$selected = array_pop($date);
echo 'Часовой пояс сейчас: ' .date('d:m:y H:i:s', $selected);
echo '<br>';
date_default_timezone_set('America/New_York');
echo 'Часовой пояс Нью-Йорка: ' .date('d:m:y H:i:s', $selected);
?>