<?php 
session_start();
//create connection//
$db= mysqli_connect('localhost','root','');
mysqli_select_db($db, "db1");
  //check connection

if(isset($_POST['submit']))
{
    
    
  $first_name=$_POST['first_name']; 
  $last_name=$_POST['last_name'];
  $email_id=$_POST['email_id'];
  $phone_no=$_POST['phone_no'];
  $description=$_POST['description'];
  $opt=$_POST['opt'];

  
  $query=mysql_query("INSERT INTO contact(first_name,last_name,email_id,phone_no,description,opt) values('$first_name','$last_name','$email_id','$phone_no','$description','$opt') "); 
  
  if(myqli_query($db,$query)){     
      
  echo "records saved successfully";  }  
}
mysqli_close($db)
?> 
