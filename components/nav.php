  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <?php 
          if(isset($_SESSION['signin'])){
        ?>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <?php
          }
        ?>
        <a class="navbar-brand" href="http://localhost/dumz.com/">Dumz.Com</a>
      </div>
        <?php 
          if(isset($_SESSION['signin'])){
        ?>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Shout</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Me <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Profile Setting</a></li>
                <li><a href="#">Account Setting</a></li>
                <li><a href="#">Security Setting</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Account</li>
                <li><a href="#">My Profile</a></li>
                <li><a href="http://localhost/dumz.com/index.php?signout">Sign Out</a></li>
              </ul>
            </li>          
        </ul>
      </div><!--/.nav-collapse -->
        <?php
          }
        ?>
    </div>
  </div>