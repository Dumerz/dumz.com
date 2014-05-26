<body>
	<?php
		include_once('components/nav.php');
	?>
    <div class="container">
    <?php
    	if(isset($_SESSION['signin'])) {
          if(isset($_GET['signout']))  {
            unset($_SESSION['signin']);
            header("location:index.php");
          		}
    		}
        if(isset($_GET['signup'])) {
            include_once('components/signup.php');
            }
    	else{
    		include_once('components/signin.php');
    		}
    ?>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>