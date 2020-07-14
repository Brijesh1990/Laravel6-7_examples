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

                       <form method="post" enctype="multipart/form-data">

                          <div class="list-group">
                              <div class="list-group-item active">Register Here</div>


                               <div class="list-group-item">
                               <div class="form-group">

<label>Upload Photo *</label>
<input type="file" name="img"  required class="form-control">
</div>
                                 <div class="form-group">

                                 <label>Email *</label>
                                 <input type="text" name="em" placeholder="Enter Email*" required class="form-control">
                                 </div>


                                 
                                 <div class="form-group">

                                    <label>Password *</label>
                                    <input type="password" name="pass" placeholder="Enter Password*" required class="form-control">
                                    </div>


                                    <div class="form-group">

<label>Re-Enter Password *</label>
<input type="password" name="cpass" placeholder="Re-Enter Password*" required class="form-control">
</div>


<div class="form-group">
<label>Username *</label>
<input type="text" name="uname" placeholder="Username *" required class="form-control">
</div>




<div class="form-group">
<label>Mobile *</label>
<input type="number" name="mob" placeholder="Mobile *" required class="form-control">
</div>



<div class="form-group">
<label>Gender *</label>
Male:<input type="radio" name="gender" value="male" >

Female:<input type="radio" name="gender" value="female" >
</div>





<div class="form-group">
<label>Hobby *</label>
Reading:<input type="checkbox" name="chk[]" value="reading" >

Writing:<input type="checkbox" name="chk[]" value="writing" >
</div>




<div class="form-group">
<label>Address *</label>

<textarea name="address" placeholder="Enter Address*" class="form-control"></textarea>
</div>






<div class="form-group">
<label>Select City *</label>
<select name="city" class="form-control">
<option value="">-selct city-</option>
<?php
foreach($shwct as $shwct1)
{
?>

<option value="<?php echo $shwct1["ctid"];?>"><?php echo $shwct1["ctname"];?></option>

<?php
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
?>
<option value="<?php echo $shwst1["sid"];?>"><?php echo $shwst1["sname"];?></option>


<?php
}

?>
</select>
</div>

                               
                                    <div class="form-group">

                                        <input type="submit" name="reg" value="Register >>" class="btn btn-lg btn-success">
                                        </div>     


                                        <div class="form-group">
                                            <b>Already Have an Account ?<a href="<?php echo $mainurl;?>Login">Login Here</a></b>

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