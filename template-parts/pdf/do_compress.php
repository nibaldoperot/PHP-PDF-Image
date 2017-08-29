<?php
    $output = shell_exec( 'gs -dNOPAUSE -dBATCH -sDEVICE=pdfwrite -dCompatibilityLevel=1.4 -dPDFSETTINGS=/ebook -sOutputFile=../../uploads/pdf/compressed/'. $_POST['path'] . ' ../../uploads/pdf/original/' . $_POST['path'] );

