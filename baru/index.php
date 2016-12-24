<?php
include ('login-wali.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Raport SMK BOPKRI 2</title>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/bootswatch.min.css">
    <script type="text/javascript" async="" src="js/ga.js"></script>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootswatch.js"></script>
</head>
<body>
<div class="container">
  <div class = "row">
    <center>
      <div class= "col-lg-12">
        <div>
          <img src="picture/lOGO_SMK.png" widht="150px" height="150px" alt="Logo SMK">
        </div> 
      </div>
        <div class= "col-lg-12"></br>
          <div class="well">
            <form class="form-horizontal" action="" method="post">
              <fieldset>
                <legend><b>Login</b></legend>
            <div class="form-group">
              <label for="inputEmail" class="col-lg-2 control-label">Username</label>
              <div class="col-lg-10">
                <input type="text" class="form-control" placeholder="Username" name="nip" value="" onblur="if(this.value=='') this.value='Username';" onfocus="if(this.value=='Username') this.value='';"  />
              </div>
            </div>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                  <div class="col-lg-10">
                    <input name="password" class="form-control" placeholder="password" type="password" id="password" value="Password" onblur="if(this.value=='') this.value='Password';" onfocus="if(this.value=='Password') this.value='';"  />
                  </div>
              </div>
                <div class="form-group col-md-12">
                  <div class="col-lg-10 col-lg-offset-2">
                    <input type="submit" name="submit" id="submit" value="Login" class="btn btn-primary">
                  </div>
                </div>
              </div>
              </fieldset>
            </form>
          </div>
    </center>
  </div>    
    
    
</div>
</body>
</html>