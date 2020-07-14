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

                            <h2>Feedback!</h2>

                       <form method="post" enctype="multipart/form-data">

                          <div class="list-group">
                              <div class="list-group-item active">Provide Your Valuable Feedback</div>

                           <div class="form-group">

                                 <label>Email *</label>
                                 <input type="text" name="em" placeholder="Enter Email*" required class="form-control">
                                 </div>


                                 
<div class="form-group">
<label>Name *</label>
<input type="text" name="name" placeholder="Username *" required class="form-control">
</div>




<div class="form-group">
<label>Mobile *</label>
<input type="number" name="mob" placeholder="Mobile *" required class="form-control">
</div>





<div class="form-group">
<label>Message *</label>

<textarea name="msg" placeholder="Enter Message*" class="form-control"></textarea>
</div>


 

<div class="form-group">
<label>Provide Us a Star <span class="fa fa-star"></span> *</label>

1 Star:<input  type="radio" name="star" value="1star">
2 Star:<input  type="radio" name="star" value="2star">
3 Star:<input  type="radio" name="star" value="3star">
4 Star:<input  type="radio" name="star" value="4star">
5 Star:<input  type="radio" name="star" value="5star">
</div>






                                    <div class="form-group">

                                        <input type="submit" name="feed" value="Submit >>" class="btn btn-lg btn-success">
                                        </div>     


                               </div>


                              </div>
                          </div>

                       </form>


<h2 align="center">Google Map</h2>
<hr style="border:solid 2px blue">

<center>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.631659686615!2d70.77839451435145!3d22.291938585327905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca248c77c099%3A0xdf5ac10af64ac8ee!2sTOPS%20Technologies%20Python%20Java%20PHP%20Web%20Designing%20Graphic%20Design%20Courses!5e0!3m2!1sen!2sin!4v1588660841584!5m2!1sen!2sin" width="90%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        </center>
                    </div>
                </div>

       
            


          </div>
        </div>
    </div>
 </div>   






 
  
  
</body>
</html>