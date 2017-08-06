<html>
<head>
 
 <?php
   $home_dir = "http://localhost/Pro_ject";
   ?>
   <?php include('boot.php'); ?>
   </head>
   </body>
   <!--Header container-->
<div  style=background-color:#404040; class="container">
  <div class="col-md-3">
	<center><img src="<?php echo $home_dir ?>/images/seh4.jpg" class="img-circle" height="100px" width="150"></img></center>
  </div>
  <div class="col-md-6">
	<center><h1 style="color:white;font-size:70px;font-family: 'Tangerine', serif;">Sehwag History</h1></center>
  </div>
  <div class="col-md-3">
	<center><img src="<?php echo $home_dir ?>/images/seh4.jpg" class="img-circle"height="100px" width="150"></img></center>
  </div>
</div>  
  
<!--Nav bar-->
<div class="container" style="background-color:brown;>
<nav class="navbar">
  
    <ul class="nav navbar-nav" style="font-size:22px;">
      <li><a href="<?php echo $home_dir?>/home.php"style="color:black;">HOME</a></li>
      <li><a href="<?php echo $home_dir?>/history.php"style="color:black;">HISTORY</a></li>
      <li><a href="<?php echo $home_dir?>/sehwag.php"style="color:black;">SEHWAG</a></li>
      <li><a href="<?php echo $home_dir?>/#"style="color:black;">ABOUT</a></li>
	  <li><a href="<?php echo $home_dir?>/contact.php"style="color:black;">CONTACT</a></li>
    </ul>
  
</nav>
</div>  
</body>
</html>