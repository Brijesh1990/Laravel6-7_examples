<?php
// if(!isset($_SESSION["aid"]))
// {

//     echo "<script>
//     window.location='./';
//     </script>";
// }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MVC Admin Panel</title>
        <link href="<?php echo $baseurl;?>css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Manage All Customer</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Manage All Customer</li>
                        </ol>


                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>All Cutomers</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Photo</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Mobile</th>
                                                <th>Gender</th>
                                                <th>Hobby</th>
                                                <th>Address</th>
                                                <th>City</th>
                                                <th>State</th>
                                                <th>RegisteredDate</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>


                                        <?php
                                     foreach($shwprof as $shwprof1)
                                     {
                                           
   
                                         ?>
                                          
                                        <tbody>
                                            <tr>
                                                <td><img src="../<?php echo $shwprof1["photo"];?>" style="width:120px; height:100px"></td>
                                                <td><?php echo $shwprof1["email"];?></td>
                                                <td><?php echo $shwprof1["username"];?></td>
                                                <td><?php echo $shwprof1["mobile"];?></td>
                                                <td><?php echo $shwprof1["gender"];?></td>
                                                <td><?php echo $shwprof1["hobby"];?></td>
                                                <td><?php echo $shwprof1["address"];?></td>
                                                <td><?php echo $shwprof1["ctname"];?></td>
                                                <td><?php echo $shwprof1["sname"];?></td>
                                                <td><?php echo $shwprof1["rdate"];?></td>
                                                <td><a href=""><button type="button" class="btn btn-sm btn-danger">Delete</button></a></td>
                                            </tr>
                                           


                                        </tbody>

                                        <?php
                                     }

                                     ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
    
           
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo $baseurl;?>js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo $baseurl;?>assets/demo/chart-area-demo.js"></script>
        <script src="<?php echo $baseurl;?>assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo $baseurl;?>assets/demo/datatables-demo.js"></script>
    </body>
</html>
