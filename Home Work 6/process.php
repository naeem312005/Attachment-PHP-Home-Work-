<?php
include 'db.php';
include 'imageUplode.php';
$stuName = $stuEmail = $stuRoll = $stuImg = "";
$teacName = $teacEmail = $teacNum = $teacImg = "";
function input_test($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (isset($_POST['stu_submit'])) {
    $stuName = input_test($_POST['stu_name']);
    $stuEmail = input_test($_POST['stu_email']);
    $stuRoll = input_test($_POST['stu_roll']);
    
    $filePath = uplodeFile('stu_img', 'image/student/', 'student', $conn);
    if($filePath){
    $sql_insert_stu = "INSERT INTO `student`( `name`, `email`, `roll`, `image` ) VALUES ('$stuName','$stuEmail','$stuRoll','$filePath')";
    if ($conn->query($sql_insert_stu) === true) {
        echo "Data Insert Successfull";
    }
}
}
if (isset($_POST['teac_submit'])) {
    $teacName = input_test($_POST['teac_name']);
    $teacEmail = input_test($_POST['teac_email']);
    $teacNum = input_test($_POST['teac_number']);
    
    $filePath = uplodeFile('teac_img', 'image/teacher/', 'teacher', $conn);

    if($filePath){
    $sql_insert_tech = "INSERT INTO `teacher`( `name`, `email`, `phone`, `image` ) VALUES ('$teacName','$teacEmail','$teacNum','$filePath')";
    if ($conn->query($sql_insert_tech) === true) {
        echo "Data Insert Successfull";
    }

}
}
