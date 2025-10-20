<?php
function input_test($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function uplodeImage($inputImage,$uplodeFolder,$tableName,$conn){
    $file=$_FILES[$inputImage];
    $file_Name= $file['name'];
    $file_temp=$file['tmp_name'];
    $file_Size = $file['size'];

    $file_type= explode('.',$file_Name);
    $file_extention=end($file_type);
    $new_file_name=uniqid().'.'.$file_extention;
    $allow_extention=['jpeg','jpg','png'];
    if(!file_exists($uplodeFolder)){
        mkdir($uplodeFolder,0777,true);
    }

    if($file_Size<2000000){
    if(in_array($file_extention,$allow_extention)){
        $file_uplode = $uplodeFolder . $new_file_name;
        if(move_uploaded_file($file_temp,$file_uplode)){
            return $file_uplode;
        }else{
            $errors[]="File uplode Failed";
        }
    }else{
        $errors[]="only png,jpeg,jpg file allow";
    }
}else{
    $errors[]="only 2MB file allow";
}
}
?>