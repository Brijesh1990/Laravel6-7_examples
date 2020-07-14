<?php
class AdminModel
{
    public $connection="";
    public function __construct()

    {

        session_start();
       
        try
        {

            $this->connection=new mysqli("localhost","root","","cruid_mvc");

        }
        catch(Exception $e)
        {


            die(mysqli_error($this->connection,$e));

        }

    }




    
  //create a member function for insertalldata 

  public function insalldata($table,$data)

  {

    $k=array_keys($data);
    $kk=implode(",",$k);
    
    $v=array_values($data);
    $vv=implode("','",$v);

    $insert="insert into $table($kk) values('$vv')";
    $query=mysqli_query($this->connection,$insert);
    return $query;
    
  }




    
  //create a member function for admin  login 

  public function adminlogin($table,$em,$pass)

  {

      $sel="select * from $table where email='$em' and password='$pass'";
      $query=mysqli_query($this->connection,$sel);
      $result=mysqli_fetch_array($query);
      $no=mysqli_num_rows($query);
      if($no==1)
      {    


        $_SESSION["aid"]=$result["aid"];
        
        $_SESSION["em"]=$result["email"];
         
        return $query;

      }

      else
      {
        return false;
      }



  }


  //create a member function in admin for total count for all

  public function totalnumbers($table,$columnname)
  
  {
    
    $sel="select count($columnname) as total from $table";
    $query=mysqli_query($this->connection,$sel);
    while($result=mysqli_fetch_array($query))
    {
        $arr[]=$result;
    }
    return $arr;


  }



  
  //create a member function for selectalldata
  public function selalldata($table)

  {
    $select="select * from $table";
    $query=mysqli_query($this->connection,$select);
    while($result=mysqli_fetch_array($query))
    {

      $arr[]=$result;

    }

    return $arr;

  }



  //Create a member function for show all cutomer

  public function selljoin($table,$table1,$table2,$condition,$condition1)
  {

   $sel="select * from $table join $table1 on $condition join $table2 on $condition1";
    $query=mysqli_query($this->connection,$sel);
    while($result=mysqli_fetch_array($query))

    {

      $arr[]=$result;
    }

    return $arr;



  }



  
   //create a member function for delete data

   public function deldata($table,$id)

   {
     $k=array_keys($id);
     $field=implode(",",$k);
     $v=array_values($id);
     $value=implode("','",$v);
     $del="delete from $table where $field='$value'";
     $query=mysqli_query($this->connection,$del);
     return $query;

   }



  
  //create a member function for logout user

  public function logoutadmin()
  {
     unset($_SESSION["aid"]);
     unset($_SESSION["em"]);
     

     session_destroy();

     return true;

  }


}
?>