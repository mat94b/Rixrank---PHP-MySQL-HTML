<?php

if(isset($_POST['sex']))
{

$fn = '../bin/stats/test.txt';

file_put_contents($fn, '['.date('d-m-Y H:i:s').']<'.$_SERVER['REMOTE_ADDR'].'>['.$_POST['sex'].']');
     $fn = "../bin/stats/test".date('d_m_y').".txt";
	if(!file_exists($fn)) fopen($fn,'w');
	$counter = (file_exists($fn) ? (int)file_get_contents($fn) : 0) + 1;
	file_put_contents($fn, $counter);
	
$fp = fopen("../bin/stats/test_log.txt", "a");
fputs($fp, '['.date('d-m-Y H:i:s').']<'.$_SERVER['REMOTE_ADDR'].'>['.$_POST['sex'].']{'.$_SERVER['HTTP_REFFERER'].'}*');
fclose($fp);

setcookie('sex', $_POST['sex'], time()+3600*24); //
}
$Array = array();

echo json_encode($Array);

?>