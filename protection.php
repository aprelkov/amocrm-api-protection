/* PROTECTION */
do {
    $t = htmlentities(file_get_contents('time.txt'));
    $t = $t + 15;
    $time = time();
    sleep(1);
} while ($time < $t);
$time = time();
$fp = fopen('time.txt', 'w');
fwrite($fp, $time);
fclose($fp);
