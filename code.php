<?php 
session_start();

include('dbcon.php');







if(isset($_POST['register_btn']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
   // $registration = $_POST['registration'];
   // $verify_token = md5(rand());

  

   

 
   
        $query = "INSERT INTO contactus(name,email,message) VALUES ('$name','$email','$message')";
        $query_run = mysqli_query($con, $query);



       
        
    
        echo "Thank you for your interest in adopting a dog. We will reach out to you via the provided email.";
    
  
    
   
}
