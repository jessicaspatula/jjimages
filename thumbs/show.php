<?php

//$filenames = system("ls | sed 's/tag_/<br \/><img src=\"tag_/' | sed 's/jpg/jpg\" \/>/'");
//echo $filenames;

//ID, year, filename, primary, pixelHeight, pixelWidth 

$filenames = system("ls *jpg* | sed 's// /' ",$what);
//echo $filenames;

$files = explode("tag_",$filenames);

print_r($files);
echo $what;
