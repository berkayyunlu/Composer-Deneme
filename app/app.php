<?php

require  __DIR__ . '/../vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

$img = Image::make(__DIR__ . '/../public/foo.jpg');

// resize image instance
$img->resize(320, 240);

// insert a watermark
$img->insert('public/watermark.png');

// save image in desired format
$img->save('public/bar.jpg');
