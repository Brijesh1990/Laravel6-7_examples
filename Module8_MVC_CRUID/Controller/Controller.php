<?php
error_reporting(0);
require_once("Model/Model.php");
class Controller extends Model
{
    public function __construct()
    {

        parent::__construct();

        //register a user

         if(isset($_POST["reg"]))
         {
           
            //upload file
            $tmp_name=$_FILES["img"]["tmp_name"];
            $type=$_FILES["img"]["type"];
            $size=$_FILES["img"]["size"]/1024;
            $path="user_upload/".$_FILES["img"]["name"]; 
            move_uploaded_file($tmp_name,$path);

            $em=$_POST["em"];
            $pass=base64_encode($_POST["pass"]);
            $cpass=base64_encode($_POST["cpass"]);
            $uname=$_POST["uname"];
            $mob=$_POST["mob"];
            $g=$_POST["gender"];
            $h=implode(",",$_POST["chk"]);
            $add=$_POST["address"];
            $ct=$_POST["city"];
            $st=$_POST["state"];
            $rdtate=date("d/m/y");

            if($pass==$cpass)
            {

            $data=array("photo"=>$path,"email"=>$em,"password"=>$pass,"username"=>$uname,"mobile"=>$mob,"gender"=>$g,"hobby"=>$h,"address"=>$add,"ctid"=>$ct,"sid"=>$st,"rdate"=>$rdtate);

            $chk=$this->insalldata('user',$data);   

            if($chk)

            {
                echo "<script>
                
                alert('Thanks for Create Your Account with Us!')
                window.location='Login';
                
                </script>";
            }

        }

            else
            {

                echo "<script>
                
                alert('Password and Confirm Password does not matched try again!')
                window.location='Register';
                
                </script>";


            }

        }


        //fetch city in register view

        $shwct=$this->selalldata('city');


        //fetch state in register view
        
        $shwst=$this->selalldata('state');


        //login user


        if(isset($_POST["log"]))
        {
              
            $em=$_POST["em"];
            
            $pass=base64_encode($_POST["pass"]);

            $chk=$this->userlogin('user',$em,$pass);

            if($chk)

            {

               echo "<script>
               alert('You are Logged In Successfully')
               window.location='./';                 
               </script>";
                  

            }


            else

            {

                
               echo "<script>
               alert('Your Email and Password are Incorect Try again')
               window.location='Login';                 
               </script>";

            }

        }


        //manage profile 

        if(isset($_SESSION['uid']))

        {

           $uid=$_SESSION["uid"];
           $prof=$this->selljoin('user','city','state','city.ctid=user.ctid','state.sid=user.sid','uid',$uid);


        }


        //update profile 

        if(isset($_POST["upd"]))

        {
            $uid=$_SESSION["uid"];
            $tmp_name=$_FILES["img"]["tmp_name"];
            $type=$_FILES["img"]["type"];
            $size=$_FILES["img"]["size"]/1024;
            $path="user_upload/".$_FILES["img"]["name"]; 
            move_uploaded_file($tmp_name,$path);

            $em=$_POST["em"];
            $uname=$_POST["uname"];
            $mob=$_POST["mob"];
            $g=$_POST["gender"];
            $h=implode(",",$_POST["chk"]);
            $add=$_POST["address"];
            $ct=$_POST["city"];
            $st=$_POST["state"];
            

            $data=array("photo"=>$path,"email"=>$em,"username"=>$uname,"mobile"=>$mob,"gender"=>$g,"hobby"=>$h,"address"=>$add,"ctid"=>$ct,"sid"=>$st);

            $chk=$this->update_data('user',$data,$where,$uid);

            if($chk)

            {
                  
               echo "<script>
               alert('Your Profile Updated succefully')
               window.location='MyProfile';                 
               </script>";

            }



        }
           //forget password 

           if(isset($_POST["frg"]))
           {
               
               $em=$_POST["em"];

               $chk=$this->frgpassword('user',$em);
                
               
              if($chk)
              {    


               echo "<script>
               alert('Your Password are :'+'$chk')
               window.location='Login';
               </script>";
   
              }
   
           else
   
           {
   
               echo "<script>
               alert('Your Email does not exist try again')
               window.location='ForgetPassword';
               </script>";
           }
   
        }
        


        //logout a user


        if(isset($_REQUEST["lg"]))

        {

            $lg=$this->logoutuser();

            if($lg)

            {
                echo "<script>
                alert('You are Logout Successfully')
                window.location='Login';
                
                
                </script>";
            }
        }


        //change password 

        if(isset($_POST["chng"]))

        {
         
            $uid=$_SESSION["uid"];
            $opass=base64_encode($_POST["opass"]);
            $npass=base64_encode($_POST["npass"]);
            $cpass=base64_encode($_POST["cpass"]);

            $chk=$this->chngpassword('user',$opass,$npass,$cpass,$uid);

            if($chk)

            {
    

                echo "<h3 align='center' style='color:green; position:absolute; margin-top:8%; margin-left:40%; z-index:2'>Your Password are changed Successfuly</h3>";
                header("refresh:4,'./'");



            }

            else

            {


             
                echo "<h3 align='center' style='color:red; position:absolute; margin-top:8%; margin-left:40%; z-index:2'>Your opass,npass and confirm password does not matched try again!</h3>";
                header("refresh:4,'ChangePassword'");

   
            }

        }



        //delete a user profile

        if(isset($_GET["del_id"]))

        {
          $del_id=$_GET["del_id"];
          $id=array("uid"=>$del_id);
          $chk=$this->deldata('user',$id);
          if($chk)
          {
             unset($_SESSION["uid"]);
             session_destroy();

              echo "<script>
              
              alert('Your Profile Deleted Successfully')
              window.location='./';
              
              </script>";

          }


        }

//feedback us
        

                if(isset($_POST["feed"]))
                {     


                    $em=$_POST["em"];
                    
                    $nm=$_POST["name"];
                    
                    $mob=$_POST["mob"];
                    
                    $msg=$_POST["msg"];
                    
                    $st=$_POST["star"];
                    $data=array("email"=>$em,"name"=>$nm,"mobile"=>$mob,"message"=>$msg,"star"=>$st);

                    $chk=$this->insalldata('feedback',$data);

                    if($chk)

                    {


                        echo "<script>
                        

                        alert('Thanks for Providing Us Your Valueable Feedback Our Admin Will Soon Contact with You !')
                    
                        window.location='FeedbackUs';
                        </script>";
                    }

                }

            
        if($_SERVER["PATH_INFO"])
        {
             switch($_SERVER["PATH_INFO"])
              {
                 case '/':
                     require_once("menu.php");
                     require_once("index.php");
                     require_once("content.php");
                     require_once("footer.php");
                     
                     break;


                 case '/Login':
                    require_once("menu.php");
                    require_once("index.php");
                    require_once("login.php");
                    require_once("footer.php");
                        
                    break;


               
                case '/Register':
                    require_once("menu.php");
                    require_once("index.php");
                    require_once("register.php");
                    require_once("footer.php");
                            
                    break;     



                    
                case '/ForgetPassword':
                    require_once("menu.php");
                    require_once("index.php");
                    require_once("forgetpassword.php");
                    require_once("footer.php");
                            
                    break;     


                    
                    
                case '/ChangePassword':
                    require_once("menu.php");
                    require_once("index.php");
                    require_once("changepassword.php");
                    require_once("footer.php");
                            
                    break;    
                    
                    

                     
                    
                case '/MyProfile':
                    require_once("menu.php");
                    require_once("index.php");
                    require_once("myprofile.php");
                    require_once("footer.php");
                            
                    break;    
                 

                    
                case '/FeedbackUs':
                    require_once("menu.php");
                    require_once("index.php");
                    require_once("feedback.php");
                    require_once("footer.php");
                            
                    break;    
                 
                 
                 default:
                 require_once("menu.php");
                     
                 require_once("404.php");
                 require_once("footer.php");
                     
                     break;
             }

        }        

    }

}


$obj=new Controller();


?>