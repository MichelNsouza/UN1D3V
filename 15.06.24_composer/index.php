<?php

require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

// configure with favored image driver (gd by default)
Image::configure(['driver' => 'gd']);

$path = './imagem/passarinho.jpg';

// and you are ready to go ...
$image = Image::make($path);
$image->resize(400, null, function ($constraint) {
    $constraint->aspectRatio();
});
$image->flip('h');
// $image->blur(15);
$image->greyscale();
$image->save("./imagem/copy_passarinho.jpg");