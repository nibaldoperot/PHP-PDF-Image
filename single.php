<?php 

    include 'header.php';
        if($_GET['type'] == 'pdf'){
            if($_GET['status']== 'uploaded'){
                include 'template-parts/pdf/compression.php';
            }else{
                include 'template-parts/pdf/index.php';
            }
        }

        if($_GET['type'] == 'img'){
            if($_GET['status']== 'uploaded'){
                include 'template-parts/img/resize.php';
            }else{
                include 'template-parts/img/index.php';
            }
        }
    include 'footer.php';

?>