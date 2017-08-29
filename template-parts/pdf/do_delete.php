<?php
    $original ="../../uploads/pdf/original/".$_POST['path'];
    $compressed ="../../uploads/pdf/compressed/".$_POST['path'];

    if (!unlink($original)){
        $errors = "Error deleting $original";
    }else{
        if (!unlink($compressed)){
            $errors .= " Error deleting $compressed";
        }
        
    }
    if(strlen($errors) == 0){
        return true;
    }else{
        return $errors;
    }
?> 