<html>

<head>
    <title> Delete Data </title>
	  
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   
   <link rel="stylesheet" href="css/style.css">
	
	<style>
	body{
		background-color: lightblue;
	}
	input{
		width: 40%;
		height: 5%;
		border: 1px;
		border-radius: 05px;   
		padding: 8px 15px 8px 15px;
		margin: 10px 0px 15px 0px;
		box-shadow: 1px 1px 2px 1px grey;  
	}
	</style>
</head>
<body background="images/12.jpg">


<section class="header">

   <a href="home.php" class="logo">Tour Plan On A Budget.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
	    
	  <a href="User_Info.php">User_Info</a>
<a href="book_delete.php">book_delete</a>
	   <a href="logout.php">logout</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>
 
<center>
<h1> Delete Data </h1>
<form action="" method="POST">
<input type="text" name="id" placeholder="Enter Id To Delete"/> <br>
<input type="submit" name="delete" value="Delete Data"/> <br>
</form>
</center>
<a href="logout.php">Logout</a>
</body>
</html>


<?php
$con = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,'book_db');

if(isset($_POST['delete']))
{
	$id = $_POST['id'];
	
	$query = "delete from users where id='$id'" ;
	$query_run= mysqli_query($con,$query);
	
	if($query_run)
	{
		echo '<script type="text/javascript"> alert("Data Delete") </script>';
	}
	else
	{
	echo '<script type="text/javascript"> alert("Data Not Delete") </script>';	
	}	
}
?>