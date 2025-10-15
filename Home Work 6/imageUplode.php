<?php

function uplodeFile($fileInput, $uolodeFolder, $tableName, $conn)
{
    $file = $_FILES[$fileInput];
    $file_name = $file['name'];
    $file_temp = $file['tmp_name'];
    $file_size = $file['size'];

    $file_type = explode('.', $file_name);
    $file_extention = end($file_type);
    $new_file_name = uniqid() . '.' . $file_extention;
    $allow_extention = ['png', 'jpg', 'jpeg'];
    if (!file_exists($uolodeFolder)) {
        mkdir($uolodeFolder, 0777, true);
    }
    if ($file_size < 5000000) {
        if (in_array($file_extention, $allow_extention)) {
            $file_uplode = $uolodeFolder . $new_file_name;
            if (move_uploaded_file($file_temp, $file_uplode)) {
                echo "image uplode successfull";
                return $file_uplode;
            } else {
                echo "file uplode file";
            }
        } else {
            echo "only png,jpeg,jpg file allow";
        }
    } else {
        echo "Only 5mb file allow";
    }
}
