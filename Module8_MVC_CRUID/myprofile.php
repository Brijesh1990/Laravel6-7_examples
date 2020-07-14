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
               <li><a href="<?php echo $mainurl;?>?del_id=<?php echo $prof[0]["uid"];?>" onclick="return confirm('Are you sure to delete Your Account!')"><span class="fa fa-trash"></span> Delete Account!</a></li>
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

                            <h2>Update Your Profile!</h2>



                       <form method="post" enctype="multipart/form-data">


                          <div class="list-group">
                              <div class="list-group-item active">Update Here</div>


                               <div class="list-group-item">
                               <div class="form-group">

<label><img src="<?php echo $prof[0]["photo"];?>" style="border-radius:2%; width:100%; height:150px"></label>


<input type="file" name="img"  required class="form-control">
</div>
                                 <div class="form-group">

                                 <label>Email *</label>
                                 <input type="text" name="em" value="<?php echo $prof[0]["email"];?>" placeholder="Enter Email*" required class="form-control">
                                 </div>


                                 

<div class="form-group">
<label>Username *</label>
<input type="text" name="uname" value="<?php echo $prof[0]["username"];?>" placeholder="Username *" required class="form-control">
</div>




<div class="form-group">
<label>Mobile *</label>
<input type="number" name="mob" value="<?php echo $prof[0]["mobile"];?>" placeholder="Mobile *" required class="form-control">
</div>



<div class="form-group">
<label>Gender *</label>
Male:<input type="radio" name="gender" value="male" <?php if($prof[0]["gender"]=='male')
{

    echo "checked='checked'";
} ?> >

Female:<input type="radio" name="gender" value="female" <?php if($prof[0]["gender"]=='female')
{

    echo "checked='checked'";
} ?> >
</div>





<div class="form-group">
<label>Hobby *</label>
Reading:<input type="checkbox" name="chk[]" value="reading" 
<?php
$chk=$prof[0]["hobby"];
$h=explode(",",$chk);
if($h[0]=='reading')

{

    echo "checked='checked'";
}

?>>

Writing:<input type="checkbox" name="chk[]" value="writing" <?php
$chk=$prof[0]["hobby"];
$h=explode(",",$chk);
if($h[0]=='writing' || $h[1]=='writing')

{

    echo "checked='checked'";
}

?> >
</div>




<div class="form-group">
<label>Address *</label>

<textarea name="address" placeholder="Enter Address*" class="form-control">
<?php echo $prof[0]["address"];?>
</textarea>
</div>






<div class="form-group">
<label>Select City *</label>
<select name="city" class="form-control">
<option value="">-selct city-</option>
<?php
foreach($shwct as $shwct1)
{
    if($shwct1["ctid"]==$prof[0]["ctid"])
       {
    
    ?>

<option value="<?php echo $prof[0]["ctid"];?>" selected="selected"><?php echo $prof[0]["ctname"];?></option>



<?php
}

else
{

?>

<option value="<?php echo $shwct1["ctid"];?>"><?php echo $shwct1["ctname"];?></option>


<?php
}

}

?>
</select>
</div>






<div class="form-group">
<label>Select State *</label>
<select name="state" class="form-control">
<option value="">-select state-</option>
<?php
foreach($shwst as $shwst1)
{
      if($shwst1["sid"]==$prof[0]["sid"])
      {
?>

<option value="<?php echo $prof[0]["sid"];?>" selected='selected'><?php echo $prof[0]["sname"];?></option>


<?php
}
else
{

?>

<option value="<?php echo $shwst1["sid"];?>"><?php echo $shwst1["sname"];?></option>


<?php
}
}
?>
</select>
</div>

                               
                                    <div class="form-group">

                                        <input type="submit" name="upd" value="Update Profile >>" class="btn btn-lg btn-success">
                                        </div>     


                                   
                               </div>


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