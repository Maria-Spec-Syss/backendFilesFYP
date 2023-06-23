<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>
<header class="header"style="padding-top:20px;padding-bottom:20px;">

   <section class="flex">
   <a href="home.php" class="logo">Affiliatechamp.co</a>
   
<form action="search.php" method="POST" class="search-form">
         <input type="text" name="search_box" class="box" maxlength="50" placeholder="search for blogs" required>
         <button type="submit" class="fas fa-search" name="search_btn"></button>
      </form>



</section>

</header>

<header class="header" style="background-color:#203A6A">

   <section class="flex">
  
   

<div class="topnav">
  <a href="home.php"> Home</a>
  <a href="posts.php"> Posts</a>
         <a href="all_category.php"> Category</a>
         <a href="authors.php"> Authors</a>
</div>
<div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>

      </div>
	  
	  <nav class="navbar" style="z-index:1000">
         <a href="login.php"> <i class="fas fa-angle-right"></i> Login</a>
         <a href="register.php"> <i class="fas fa-angle-right"></i> Register</a>
      </nav>


<div class="profile" style="z-index:1000">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p class="name"><?= $fetch_profile['name']; ?></p>
         <a href="update.php" class="btn">update profile</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div> 
         <a href="components/user_logout.php" onclick="return confirm('logout from this website?');" class="delete-btn">logout</a>
         <?php
            }else{
         ?>
            <p class="name">please login first!</p>
            <a href="login.php" class="option-btn">login</a>
         <?php
            }
         ?>
      </div>



</section>

</header>
