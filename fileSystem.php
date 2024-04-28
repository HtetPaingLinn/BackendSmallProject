<?php

//touch("myname.txt");
//mkdir("mytest", 0777, true);

//var_dump(is_file("myname.txt"));
//var_dump(is_file("mytest"));
//var_dump(is_dir("mytest"));
//var_dump(file_exists("myname.txt"));
//var_dump(file_exists("mytest"));
//
//print_r(scandir("."));

//unlink("myname.txt");
//
//rmdir("mytest");

$fileName = "my.txt";
//if(file_exists($fileName)){
//    touch($fileName);
//}

//$fileStream = fopen($fileName, "a");
//fwrite($fileStream, "Hello World!\n");
//fwrite($fileStream, "Min Ga Lar Par!\n");
//fwrite($fileStream, "Taw Tharr Myar!\n");
//fwrite($fileStream, "Htet Paing Linn!\n");
//fclose($fileStream);

$fileStream = fopen($fileName, "r");
//echo fread($fileStream, filesize($fileName));
//echo "\n";

//echo fgetc($fileStream);
//echo fgetc($fileStream);

//echo fgets($fileStream);
//echo fgets($fileStream);
//echo fgets($fileStream);
//echo fgets($fileStream);
//echo fgets($fileStream);
//var_dump(feof($fileStream));

while (!feof($fileStream)) {
    echo fgets($fileStream);
}
fclose($fileStream);

