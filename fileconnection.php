<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Madhuram Shkla\n";
fwrite($myfile, $txt);
$txt = "Madhuram Shkla\n";
fwrite($myfile, $txt);
fclose($myfile);
?>