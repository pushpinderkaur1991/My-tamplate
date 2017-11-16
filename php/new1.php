<?php

$myf= fopen("myfile.txt","w");

$txt="this is my first file";

fwrite($myf,$txt);

$txt="Adding animation To set the animation of your imagine background you have 3 alternatives:";
fwrite($myf,$txt);

fclose($myf);


?>