<?php
  $echo1="Username";
  $echo2="Password";
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

      $sql = "SELECT * FROM `users` WHERE `username`='$username'";
        $query = mysql_query($sql)or die(db_error());
        $check = mysql_num_rows($query);
       if($check >= 1){       
          $echo1 = "Accepted Username"; 
          $attrib = mysql_fetch_array($query);
            if($attrib['password'] == $password){
              $_SESSION['signin'] = $attrib['user_id'];
              header("Location:index.php?home");
                }
            else{
              $echo2 = "Incorrect Password";
                }    
            }
        else{
           $echo1 = "Incorrect Username";
            }
    }
?>

<link href="css/signin.css" rel="stylesheet">
  <form action="http://localhost/dumz.com/" method="POST" class="form-signin">
    <h2 class="form-signin-heading">Please sign in</h2>
      <input type="text" class="form-control" placeholder="<?php echo $echo1; ?>" name="username" required autofocus>
      <input type="password" class="form-control" placeholder="<?php echo $echo2; ?>" name="password" required>
    <label class="checkbox">
      <input type="checkbox" value="remember-me"> Remember me
    </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
  </form>