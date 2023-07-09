<!-- header section starts  -->

<header class="header">

<nav class="navbar nav-1">
      <section class="flex">
        <nav class="navbar">
            <a href="home.php" >
                <img src="images/Logo.png" alt="Logo" class="logo">
            <span class="company-name">V-REALTY</span>
            </a>
          </nav>
          
          
          
      </section>
   </nav>



   <nav class="navbar nav-2">
      <section class="flex">
         <div id="menu-btn" class="fas fa-bars"></div>

         <div class="menu">
            <ul>
               <li><a href="home.php">Home</a>
                  
               </li>
               <li><a href="#">All listings <i class="fas fa-angle-down"></i> </a>
                  <ul>
                     <li><a href="search.php">Filter search</a></li>
                     <!-- <li><a href="listings.php">All listings</a></li> -->
                  </ul>
               </li>
               <li><a href="contact.php">Contact us</a>
                

               </li>
               <li><a href="about.php">About us</a>
               
               
               </li>
            </ul>
         </div>

         <ul>
            <li><a href="saved.php">Saved <i class="far fa-heart"></i></a></li>
            <li><a href="#">Account <i class="fas fa-angle-down"></i></a>
               <ul>
                  <ul>
                  <li><a href="login.php">Login now</a></li>
                  <li><a href="register.php">Register new</a></li>
</ul>


                  <?php if($user_id != ''){ ?>
                     
                  <li><a href="update.php">Update profile</a></li>
                  <li><a href="components/user_logout.php" onclick="return confirm('logout from this website?');">Logout</a>
                  <?php } ?></li>
               </ul>
            </li>
         </ul>
      </section>
   </nav>

</header>

<!-- header section ends -->