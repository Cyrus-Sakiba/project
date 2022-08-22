<?php

$connection = mysqli_connect('localhost','root','','book_db');

if(isset($_POST['send'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $amount = $_POST['amount'];
   $code = $_POST['code'];
   $pin = $_POST['pin'];
   
   $request = " insert into pay(name, email, phone, amount, code, pin) values('$name','$email','$phone','$amount','$code','$pin') ";
   mysqli_query($connection, $request);

   echo 'Payment Done!!!'; 

}else{
   echo 'something went wrong please try again!';
}

?>
 
