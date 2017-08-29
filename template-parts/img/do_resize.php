<?php
    $width = $_POST['width'];
    $height = $_POST['height'];
    $path = $_POST['path'];
    $output = shell_exec( 'convert -resize '. $_POST['width'] . 'x' . $_POST['height'] .'! -quality 100 ../../uploads/img/original/' .$_POST['path']. ' ../../uploads/img/resized/'. $_POST['width'] . 'x' . $_POST['height'] . $_POST['path'] );