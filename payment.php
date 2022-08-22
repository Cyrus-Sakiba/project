<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Payment</title>

  
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   
   <link rel="stylesheet" href="css/style.css">

</head>
<body style="background-color:#e2136e;">
   


<section class="header">

   <a href="home.php" class="logo">Tour Plan On a Budget.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href="Edit_Info.php">Edit_Info</a>
  
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>



<div class="heading" style="background:url(images/bkash.png) no-repeat">
  
</div>



<section class="booking">

<h1 style="color:#231f20;" class="heading-title">Make your payment! </h1>

   <form action="pay.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Full-name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter number" name="phone">
         </div>
         <div class="inputBox">
            <span>amount :</span>
            <input type="number" placeholder="enter amount" name="amount">
         </div>
<div class="inputBox">
            <span>hotelcode :</span>
            <input type="number" placeholder="enter your hotel-code" name="code">
         </div>
<div class="inputBox">
            <span>pin :</span>
            <input type="number" placeholder="enter your bkash pin" name="pin">
         </div>
        
         
        
      </div>

      <input style="background-color:#231f20;" type="submit" value="send" class="btn" name="send">

   </form>

</section>





<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>


<script src="js/script.js"></script>

</body>
</html>
