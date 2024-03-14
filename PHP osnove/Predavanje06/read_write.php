<?php

$file_path = "names.txt";

// open file named "names.txt" for writing
$file = fopen($file_path, "w") or die("Unable to open file!");

//  write a name to the file
fwrite($file, "John\n");
fwrite($file, "Mary\n");

// close the file
fclose($file);

// open file for reading
$file = fopen($file_path, "r") or die("Unable to open file!");

// read and display the content of the file
echo fread($file, filesize($file_path));

// close the file
fclose($file);

// open file for appending
$file = fopen($file_path, "a") or die("Unable to open file!");

// write a name to file
fwrite($file, "Peter\n");

// close the file
fclose($file);

// Open file for reading
$file = fopen($file_path, "r") or die("Unable to open file!");

// read and display a single line from the file
$names = [];
while(!feof($file)){
    $name = fgets($file);
    if($name){
        $names[] = $name;
    }
}
echo fgets($file);

// close the file
fclose($file);

print_r($names);