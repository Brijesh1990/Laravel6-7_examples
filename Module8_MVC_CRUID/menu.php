<?php
$mainurl="http://localhost/mvc/cruid/";
$baseurl="http://localhost/mvc/cruid/assets/";
?>
<nav class="navbar navbar-top-fixed">
    <div class="container-fluid">
      
       <div class="row">
        <div class="col-md-12 col-xs-12">
        <div class="col-md-4 col-xs-12"><h2 style="color:white">MVC CRUID</h2></div>
         

        <div class="col-md-8 col-xs-12"><h2 style="color:white">

         <ul class="pull-right">
             <li><a href="<?php echo $mainurl;?>"><span class="fa fa-home"></span> Home</a></li>
             
             <?php
                 if(!isset($_SESSION["uid"]))
                 {
             ?>

             <li class="dropdown"><a href="" class="dropdown" data-toggle="dropdown"><span class="fa fa-user"></span> MyAccount<span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="<?php echo $mainurl;?>Register"><span class="fa fa-user"></span>SignUp!</a></li>
           
               <li><a href="<?php echo $mainurl;?>Login"><span class="fa fa-user"></span>SignIn!</a></li>
             </ul>
           
           </li>

           <?php
                 }

                 else
                 {
                 ?>





           <li class="dropdown"><a href="" class="dropdown" data-toggle="dropdown"><span class="fa fa-user"></span> Welcome :<b style="color:red"><?php echo ucfirst($_SESSION["uname"]);?> <span class="caret"></span></b></a>
             <ul class="dropdown-menu">
               <li><a href="<?php echo $mainurl;?>MyProfile"><span class="fa fa-user"></span> My Profile!</a></li>
           
               <li><a href="<?php echo $mainurl;?>ChangePassword"><span class="fa fa-lock"></span> Change Password!</a></li>

               <li><a href="<?php echo $mainurl;?>?lg" onclick="return confirm('Are You sure to logout User?')"><span class="fa fa-power-off"></span> Logout!</a></li>


             </ul>
           
           </li>

           <?php
                 }
                 ?>


<li><a href="<?php echo $mainurl;?>FeedbackUs"><span class="fa fa-comments-o"></span>FeedbackUs!</a></li>


         </ul>


        </h2></div>
        
        </div>

       </div>
    </div>

</nav>    
