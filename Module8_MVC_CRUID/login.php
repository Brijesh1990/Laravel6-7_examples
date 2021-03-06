<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>MVC Cruid</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/font-awesome.min.css'>
    
    <script src='<?php echo $baseurl;?>js/jquery.js'></script>

    <script src='<?php echo $baseurl;?>js/bootstrap.min.js'></script>
</head>
<body>
 
 <div class="content">
  <div class="container-fluid">
      <div class="row">
          <div class="col-md-12 col-xs-12">

                <div class="col-md-4 col-xs-12">
                    <div class="jumbotron">
                        <h3>Welcome To MVC CRUID</h3>
                        <center>
                            <img src="<?php echo $baseurl;?>images/user1.png">

                            <p align="justify">MVC stands for "Model view And Controller". The main aim of MVC Architecture is to separate the Business logic & Application data from the USER interface.</p>
                        </center>
                    </div>
                </div>

                <div class="col-md-8 col-xs-12">
                    <div class="jumbotron">

                            <h2>Create Account!</h2>

                       <form method="post">

                          <div class="list-group">
                              <div class="list-group-item active">Login Here</div>


                               <div class="list-group-item">

                                 <div class="form-group">

                                 <label>Email *</label>
                                 <input type="text" name="em" placeholder="Enter Email*" required class="form-control">
                                 </div>


                                 
                                 <div class="form-group">

                                    <label>Password *</label>
                                    <input type="password" name="pass" placeholder="Enter Password*" required class="form-control">
                                    </div>



                               
                                    <div class="form-group">

                                        <input type="submit" name="log" value="Login >>" class="btn btn-lg btn-success"><b><a href="<?php echo $mainurl;?>ForgetPassword"> ForgetPassword?</a></b>
                                        </div>     


                                        <div class="form-group">
                                            <b>Don't Have an Account ?<a href="<?php echo $mainurl;?>Register">Create Account Here</a></b>

                                        </div>
                               </div>


                              </div>
                          </div>

                       </form>



                    </div>
                </div>

       
            


          </div>
        </div>
    </div>
 </div>   






 
  
  
</body>
</html>