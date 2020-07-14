<?php
class Model
{
  public $connection="";
  public function __construct()
  {

    session_start();
      try
      {
           $this->connection=new mysqli("localhost","root","","cruid_mvc");
        //    echo "Connection Succefully";
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

  //show profile create a member function with join all

  public function selljoin($table,$table1,$table2,$condition,$condition1,$id,$uid)
  {

   $sel="select * from $table join $table1 on $condition join $table2 on $condition1  where $id='$uid'";
    $query=mysqli_query($this->connection,$sel);
    while($result=mysqli_fetch_array($query))

    {

      $arr[]=$result;
    }

    return $arr;



  }

//update user p,rofile here cerea a member function..

public function update_data($table,$data,$where,$uid)
{

  $kk=array_keys($data);
  $vv=array_values($data);

  $key=array_keys($where);
  $value=array_values($where);
  
  $i=0;
  $k=0;

  $sql="update $table set"; 
  $size=sizeof($data);

  foreach($data as $v)

  {
    if($size==$i+1)    

    {
        
      $sql.=" ".$kk[$i]."= '".$vv[$i]."'";


    }
    else
    {

      $sql.=" ".$kk[$i]."= '".$vv[$i]."',";

    }

    $i++;

  }

      $sql.=" where uid='$uid'";
      
      foreach($where as $val)

      {

        $sql.=" and ".$key[$k]."= '".$value[$k]."' "; 

        $k++;

      }

      $query=mysqli_query($this->connection,$sql);

      return $query;

    }

   //create a member function for delete profile

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

  //create a member function for login user

  public function userlogin($table,$em,$pass)

  {

      $sel="select * from $table where email='$em' and password='$pass'";
      $query=mysqli_query($this->connection,$sel);
      $result=mysqli_fetch_array($query);
      $no=mysqli_num_rows($query);
      if($no==1)
      {    


        $_SESSION["uid"]=$result["uid"];
        
        $_SESSION["em"]=$result["email"];
         
        $_SESSION["uname"]=$result["username"];

        return $query;

      }

      else
      {
        return false;
      }



  }


//create a member function for forgetpassword 

public function frgpassword($table,$em)
 {
    
  $sel="select password from $table where email='$em'"; 
  $query=mysqli_query($this->connection,$sel);
  $no=mysqli_num_rows($query);
  $result=mysqli_fetch_array($query);
  
  $p=base64_decode($result["password"]);
  
  if($no==1)
  {
   
    
    return $p;

  }
  
  else
  {

    return false;
  }

}


//create a meber function for change a password of customer or user

public function chngpassword($table,$opass,$npass,$cpass,$uid)

{
    
     $sel="select password from $table where uid='$uid'";
     $query=mysqli_query($this->connection,$sel);
     $result=mysqli_fetch_array($query);
     $p=$result["password"];
        
     if($opass==$p && $npass==$cpass)

     {
       
      $upd="update $table set password='$npass' where uid='$uid'";
      $query=mysqli_query($this->connection,$upd);
      return $query;
     
    }

     else
     {

      return false;
     }
     
  
}

  //create a member function for logout user

  public function logoutuser()
  {
     unset($_SESSION["uid"]);
     unset($_SESSION["em"]);
     unset($_SESSION["uname"]);

     session_destroy();

     return true;

  }


}   

?>