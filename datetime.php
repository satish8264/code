<?php
echo date_format($date, 'Y-m-d H:i:s'); #output: 2012-03-24 17:45:12

echo date_format($date, 'd/m/Y H:i:s'); #output: 24/03/2012 17:45:12

echo date_format($date, 'd/m/y'); #output: 24/03/12

echo date_format($date, 'g:i A'); #output: 5:45 PM

echo date_format($date, 'G:ia'); #output: 05:45pm

echo date_format($date, 'g:ia \o\n l jS F Y'); #output: 5:45pm on Saturday 24th March 2012

$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
$today = date("m.d.y");                         // 03.10.01
$today = date("j, n, Y");                       // 10, 3, 2001
$today = date("Ymd");                           // 20010310
$today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
$today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
$today = date("H:i:s");                         // 17:16:18
$today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)

?>