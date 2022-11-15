
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Agent Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="../css/style.css" rel="stylesheet">
    
</head>

<body class="h-100>
    
    
    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <a class="text-center" href="index.html"> <h4>Travel Insurance Portal Agent Login</h4></a>
        
                               <form action="agent_login_process.php" method='POST' enctype="multipart/form-data" class="mt-5 mb-5 login-input">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                    <button class="btn login-form__btn submit w-100">Sign In</button>
                                </form>
                            
                                   
      <?php
	session_start();
if(isset($_GET['usr']))
	{

    echo '
    <div class="alert alert-danger" role="alert">
          Wrong Username 
    </div> ' ;
			echo '<br><br>';
	}
	if(isset($_GET['pd']))
	{    echo '
          <div class="alert alert-danger" role="alert">
                Wrong Password
          </div> ' ;
        
        
	}
 
?>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="../plugins/common/common.min.js"></script>
    <script src="../js/custom.min.js"></script>
    <script src="../js/settings.js"></script>
    <script src="../js/gleek.js"></script>
    <script src="../js/styleSwitcher.js"></script>
</body>
</html>




