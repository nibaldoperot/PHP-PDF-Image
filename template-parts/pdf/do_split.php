<?php

if (!file_exists('../../uploads/pdf/splited/'.$_POST['path'])) {
    mkdir('../../uploads/pdf/splited/'.$_POST['path'], 0755, true);
    $split_images = shell_exec('convert -density 300 ../../uploads/pdf/compressed/'.$_POST['path'].'  ../../uploads/pdf/splited/'.$_POST['path'].'/%d.jpg');
    $compress_pdf = shell_exec('tar -zcvf ../../uploads/pdf/splited/'.$_POST['path'].'.tar.gz ../../uploads/pdf/splited/'.$_POST['path']);
    $delete = shell_exec('rm -rf ../../uploads/pdf/splited/'.$_POST['path']);
}
