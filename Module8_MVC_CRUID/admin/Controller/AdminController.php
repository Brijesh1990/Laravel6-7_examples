<?php
error_reporting(0);
require_once("Model/AdminModel.php");
class AdminController extends AdminModel
{
  public function __construct()
  {

      parent:: __construct();

      
        //login  for admin set button


        if(isset($_POST["log"]))
        {
              
            $em=$_POST["em"];
            
            $pass=$_POST["pass"];

            $chk=$this->adminlogin('admin',$em,$pass);

            if($chk)

            {

               echo "<script>
               alert('You are Logged as Admin Successfully')
               window.location='Dashboard';                 
               </script>";
                  

            }


            else

            {

                
               echo "<script>
               alert('Your Email and Password are Incorect Try again')
               window.location='./';                 
               </script>";

            }

        }

        //logout with session of admin


        if(isset($_GET["lg"]))

        {
      
          
           $lg=$this->logoutadmin();

           if($lg)
           {

            echo "<script>
            
            alert('You are Logout Succfully')

            window.location='./';
            </script>";
           }

        }


        //total count numbers of customers in admin

        $cnt=$this->totalnumbers('user','uid');

        
        //total count numbers of feedback given by customer  in admin

        $fnt=$this->totalnumbers('feedback','fid');


        //manage or show all feedback in admin

        $fshw=$this->selalldata('feedback');
   

        //show or manage all customer in admin


        $shwprof=$this->selljoin('user','city','state','city.ctid=user.ctid','state.sid=user.sid');


        //add category here 

        if(isset($_POST["addcategory"]))
        {
              
          $catnm=$_POST["catname"];
          $rdate=$_POST["rdate"];
          $data=array("catname"=>$catnm,"rdate"=>$rdate);
          $chk=$this->insalldata('category',$data);

          if($chk)
          {
          echo "<script>
            
          alert('Category Added Successfully')

          window.location='AddCategory';
          </script>";

           
          }

        }

        //manage or show all category here

        $shwcat=$this->selalldata('category');



       //delete a category from admin
       
               //delete a user profile

               if(isset($_GET["delcatid"]))

               {
                 $delcatid=base64_decode($_GET["delcatid"]);
                 $id=array("catid"=>$delcatid);
                 $chk=$this->deldata('category',$id);
                 if($chk)
                 {
       
                     echo "<script>
                     
                     alert('Your Category Deleted Successfully')
                     window.location='ManageCategory';
                     
                     </script>";
       
                 }
       
       
               }
       
      if($_SERVER["PATH_INFO"])
      {
         switch ($_SERVER["PATH_INFO"])
          {
             case '/':
                 require_once("index.php");
                 require_once("login.php");
                 
                 break;

                 case '/Dashboard':

                    require_once("index.php");
                    
                    require_once("header.php");
                    
                    require_once("sidebar.php");
                    
                    require_once("dashboard.php");
                    
                    require_once("footer.php");
                    
                    break;
             



                    case '/ManageFeedback':

                      require_once("index.php");
                      
                      require_once("header.php");
                      
                      require_once("sidebar.php");
                      
                      require_once("managefeedback.php");
                      
                      require_once("footer.php");
                      
                      break;
               


                      
                    case '/ManageCustomer':

                      require_once("index.php");
                      
                      require_once("header.php");
                      
                      require_once("sidebar.php");
                      
                      require_once("manageallcustomer.php");
                      
                      require_once("footer.php");
                      
                      break;


                       
                    case '/AddCategory':

                     require_once("index.php");
                     
                     require_once("header.php");
                     
                     require_once("sidebar.php");
                     
                     require_once("addcategory.php");
                     
                     require_once("footer.php");
                     
                     break;



                     
                    case '/ManageCategory':

                     require_once("index.php");
                     
                     require_once("header.php");
                     
                     require_once("sidebar.php");
                     
                     require_once("managecategory.php");
                     
                     require_once("footer.php");
                     
                     break;
             default:
             require_once("404.php");
             require_once("footer.php");
                 
                 break;
         }

      }

  }


}


$obj=new AdminController();
?>