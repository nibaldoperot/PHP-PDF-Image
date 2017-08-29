<?php
    $original ="../../uploads/img/original/".$_POST['path'];
    $comprimido ="../../uploads/img/resized/*".$_POST['path'];

    if (!unlink($original)){
        $errors = "Error deleting $original";
    }else{
        if (!unlink($comprimido)){
            $errors .= " Error deleting $comprimido";
        }
        
    }

    if(strlen($errors) == 0){
        return "exito";
    }else{
        return $errors;
    }
?> 