
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="myfile">

    <input type="submit" name="submit">
    
</form>



<?php
if(isset($_POST['submit'])){
$file = $_FILES['myfile'];

$file_name=$file['name'];   // ^get file name 
// * echo $file_name;
$file_type= explode('.',$file_name);   //^string to array
$file_extention = end($file_type);   //^get file extention
// *echo $file_extention;
$new_file_name = time() . '.' . $file_extention;  //^create new file name
//*echo $new_file_name;
$file_temp = $file['tmp_name'];
// *echo $file_temp;
$file_uplode= "image/" . $new_file_name;  //^ where file uplode

if (move_uploaded_file($file_temp, $file_uplode)) {  //^file moveing
   echo "File uploded succcessfull" . $file_name;
}else{
    echo"Could not uplode file";
}


}
echo"<pre>";
print_r($_FILES);
echo"</pre>";

?>