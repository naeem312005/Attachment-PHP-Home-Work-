
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<div class="">
    <label for="">Name </label>
    <input type="text" name="name">
</div>
<div class="">
    <label for="">Email </label>
    <input type="email" name="email">
</div>
<div class="">
    
    <input type="submit" name="submit">
</div>
</form>




<?php
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

if(isset($_POST['submit'])){



   $name= test_input($_POST['name']) ;
   $email= test_input($_POST['email']) ;



   echo  $name;
   echo  $email;
  
}
?>




