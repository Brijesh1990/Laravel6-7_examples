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
                <?php
               if(!isset($_SESSION["uid"]))
               {
                  

              ?>
                <div class="col-md-4 col-xs-12">
                    <div class="jumbotron">
                        <h3>Welcome To MVC CRUID</h3>
                        <center>
                            <img src="<?php echo $baseurl;?>images/user1.png">

                            <p align="justify">MVC stands for "Model view And Controller". The main aim of MVC Architecture is to separate the Business logic & Application data from the USER interface.</p>
                        </center>
                    </div>
                </div>

             <?php
               }
               else
               {
               ?>
             
                <div class="col-md-4 col-xs-12">
                    <div class="jumbotron" id="sidebar">
                        <h3>Welcome To:<b style="color:red"><?php echo ucfirst($_SESSION["uname"]);?></b></h3>
                        
                        <ul>
                        <li><a href="<?php echo $mainurl;?>MyProfile"><span class="fa fa-user"></span> My Profile!</a></li>
           
               <li><a href="<?php echo $mainurl;?>ChangePassword"><span class="fa fa-lock"></span> Change Password!</a></li>
               <li><a href="<?php echo $mainurl;?>Notifications"><span class="fa fa-bell"></span> Notifications! <span class="badge badge-lg" style="background-color:red; color:white; font-size:18px">0</span></a></li>
               <li><a href="<?php echo $mainurl;?>MyOrder"><span class="fa fa-truck"></span> My Order! <span class="badge badge-lg" style="background-color:red; color:white; font-size:18px">0</span></a></li>
               <li><a href="<?php echo $mainurl;?>" onclick="return confirm('Are you sure to delete Your Account!')"><span class="fa fa-trash"></span> Delete Account!</a></li>
               <li><a href="<?php echo $mainurl;?>?lg" onclick="return confirm('Are You sure to logout User?')"><span class="fa fa-power-off"></span> Logout!</a></li>

                        </ul>
                        
                        
                        
                    </div>
                </div>

             

             <?php
             }

             ?>
             

             <?php
               if(!isset($_SESSION["uid"]))
               {
                  

              ?>
                <div class="col-md-8 col-xs-12">
                    <div class="jumbotron">

                            <h2>MVC in PHP</h2>


                            <p align="justify" style="font-size:20px">
                            Featured snippet from the web
PHP MVC is an application design pattern that separates the application data and business logic (model) from the presentation (view). MVC stands for Model, View & Controller. The controller mediates between the models and views. Think of the MVC design pattern as a car and the driver.<img src="<?php echo $baseurl;?>images/mvc.png" style="width:250px; height:250px; float:left; padding:15px">MVC stands for "Model view And Controller". The main aim of MVC Architecture is to separate the Business logic & Application data from the USER interface.MVC stands for "Model view And Controller". The main aim of MVC Architecture is to separate the Business logic & Application data from the USER interface.MVC stands for "Model view And Controller". The main aim of MVC Architecture is to separate the Business logic & Application data from the USER interface.MVC stands for "Model view And Controller". The main aim of MVC Architecture is to separate the Business logic & Application data from the USER interface.MVC stands for "Model view And Controller". The main aim of MVC Architecture is to separate the Business logic & Application data from the USER interface.
                        </p>

                    </div>
                </div>


<?php
               }
               else
               {

                ?>









                <div class="col-md-8 col-xs-12">
                    <div class="jumbotron">

                            <h2>Change Your Password <span class="fa fa-lock" style="font-size:50px; color:red"></span></h2>
                            <hr style="border:solid 2px red">


                            <form method="post">

<div class="list-group">



       
       <div class="form-group">

          <label>Enter Old Password *</label>
          <input type="password" name="opass" placeholder="Enter old Password*" required class="form-control">
          </div>



          <div class="form-group">

<label>Enter New Password *</label>
<input type="password" name="npass" placeholder="Enter New Password*" required class="form-control">
</div>




<div class="form-group">

<label>Enter Confirm Password *</label>
<input type="password" name="cpass" placeholder="Enter Confirm Password*" required class="form-control">
</div>

     
          <div class="form-group">

              <input type="submit" name="chng" value="Submit" class="btn btn-lg btn-success"><b></b>
              </div>     


          
     </div>



</form>










                    </div>
                </div>

       
            


       <?php
               }
               ?>
            


          </div>
        </div>
    </div>
 </div>   






 
  
  
</body>
</html>