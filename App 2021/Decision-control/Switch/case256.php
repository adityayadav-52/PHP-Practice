<?php
$code = "<?php \n\n";
$code .= "// wap in php to show only valid 256 cases in switch \n";
$code .= '$n = readline("Enter a number b/w 1 to 256 : ");'."\n";
$code .= 'switch($n){ '."\n";

for($i=1;$i<257;$i++)
{
	$code .= 'case '.$i.':'."\n";
	$code .= 'echo'.'"case '.$i.' is executing \n";'."\n";
}
$code .= "default : \n";
$code .= 'echo'.'"default case is executing \n";'."\n";

$code .= "} \n ";

$fp = fopen("p7.php","w+");
fwrite($fp,$code);
fclose($fp);
?>