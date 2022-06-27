<html>
<form action="downApp.php" method="get">
    <button type="submit" name="download">Download</button>

</form>

</html>

<?php
require  __DIR__ . '/../vendor/autoload.php';

use Apfelbox\FileDownload\FileDownload;


//Download Text file
//$content = "BERKAY UNLU";
//$fileDownload = FileDownload::createFromString($content);
//$fileDownload->sendDownload("download.txt");

//Create a download for a file on your file system
//$fileDownload = FileDownload::createFromFilePath("Huseyin Berkay Unlu CV.pdf");
//$fileDownload->sendDownload("download.pdf");





//Create a download for a file via file pointer
//$myfile = fopen("Huseyin Berkay Unlu CV.pdf", 'r+')
//    or die("File does not exist!");
//
//
//$fileDownload = new FileDownload($myfile);
//$fileDownload->sendDownload("download.pdf");


$url =
    'https://filesamples.com/samples/document/txt/sample3.txt';

// Use basename() function to return the base name of file

$file_name = basename($url);

// Use file_get_contents() function to get the file
// from url and use file_put_contents() function to
// save the file by using base name
if (file_put_contents(__DIR__ . "/download/" . $file_name, file_get_contents($url))) {
    $_GET["download"];
} else {
    echo "File downloading failed.";
}

//$URL = ...; // Like "http:// ...."
//$FileToSave = ...; // Like "/home/.." or "C:/..."
//$Content = file_get_contents($URL);
//file_put_contents($FileToSave, $Content);
?>