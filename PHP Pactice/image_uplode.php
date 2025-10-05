
<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name="myfile">
    <input type="submit" name="submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['myfile'];

    $file_name=$file['name'];
    $file_temp=$file['tmp_name'];
    $file_size=$file['size'];
   
    $file_type=explode('.',$file_name);
    $file_extention = end($file_type);

     $new_file_name = uniqid().'.'. $file_extention;
    $allow_extention = ['jpeg','jpg','png'];


    if ($file_size<2000000) {
        if (in_array($file_extention,$allow_extention)) {
            $file_uplode = 'image/'. $new_file_name;
            if ( move_uploaded_file($file_temp,$file_uplode)) {
                echo"File Uplode Successfull";
            }else{
                echo"Uplode Faile";
            }
        }else{
            echo"only Jpeg , jpg or png allow";
        }
    }else{
        echo"2 Mb file only allow";
    }

/*echo"<pre>";
   print_r($file);
    echo"</pre>";*/
}

?>