<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?
include "config.php";
if ($_GET['name'] == "") { echo "No name  <a href=# onClick=history.back()>BACK</a>"; }
if ($_GET['mess'] == "") { echo "No message  <a href=# onClick=history.back()>BACK</a>"; }
if  (($_GET['name'] != "") && ($_GET['mess'] != "")) {
$a=$_GET['name'];
$b=$_GET['mess'];
$bb = ereg_replace("\n","",$b); 
$stringData = "$a|$b\n";
$replaced = ereg_replace("<[^>]*>","",$stringData); 

$tfile = 'index.txt';
if (file_exists($tfile)) {
$file = file($tfile);
$fp = fopen("$tfile", "w+");
fwrite($fp,$replaced);
if (is_array($file)) {
while (list(, $line) = each($file)) {

fwrite($fp, $line);
}
}
}
fclose($fp); 
echo "OK  <a href=chat-book.php?pagina=0>BACK</a>"; 
}
?>