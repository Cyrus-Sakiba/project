<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Signup</title>

    
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   
   <link rel="stylesheet" href="css/style.css">


</head>
<body background="images/12.jpg">
<section class="header">

   <a href="home.php" class="logo">Tour Plan On A Budget.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
	  
<a href="Edit_Info.php">Edit_Info</a>
	 
		 
	
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>
	
<center>
<form method="POST">

 <table>
 
 <tr>
 <td><b>User Type </b></td>
 <td> <select name="type">
 <option value="-1"> select user type </option>
 <option value="Admin"> Admin </option>
 <option value="User"> User</option>

  
 </select> </td>
 </tr>

 <tr>
 <td><b>Username</b></td>
 <td><input type="text" name="username" placeholder="username"> </td>
 </tr>
 <tr>
 <td><b>Password</b> </td>
 <td><input type="password" name="pwd" placeholder="password"> </td>
 </tr>
 <tr>
 <td> &nbsp; </td>
 <td><input type="submit" name="submit" value="Login"> </td>


 </tr>
 </table>

</form>
</center>

</body>
</html>

<?php

$con=mysqli_connect("localhost","root","");

if(!$con)
{
	echo"Unable to establish connection".mysqli_error();
}

   $db=mysqli_select_db($con,"book_db");
  
if(!$db)
{
	echo"Database not found ".mysqli_error();
}
if(isset($_POST['submit'])){
	
	$type=$_POST['type'];
    $username=$_POST['username'];
	$password=$_POST['pwd'];
	
	$query="select * from login where username='$username' and password='$password' and type='$type'";
	$result= mysqli_query($con,$query);
	
	
	while($row=mysqli_fetch_array($result)){
		
		if($row['username']==$username && $row['password']==$password && $row['type']=='User'){
			header("Location:home.php");
			
			
		}elseif($row['username']==$username && $row['password']==$password && $row['type']=='Admin'){
		header("Location:Info.php");
		
		}
		
		
			
		
	}

}

?>