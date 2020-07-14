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
                        <h1 class="mt-4">Add Category Here!</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Add Category</li>
                        </ol>


                        <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Category</div>
                            <div class="card-body">
                            <form method="post">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                       
                                            <tr>
                                                <th>Enter Category Name *</th>
                                                <td><input type="text" name="catname" placeholder="Enter Category name" required class="form-control"></td>

                                               
                                            </tr>

                                            
                                            <tr>
                                                <th>Enter Date  *</th>
                                                <td><input type="date" name="rdate" placeholder="Enter Date" required class="form-control"></td>

                                               
                                            </tr>


                                            
                                            <tr>
                                             
                                                <td align="center" colspan="2"><input type="submit" name="addcategory" class="btn btn-lg btn-success" value="AddCategoryHere"></td>

                                               
                                            </tr>
                                     

                                        </tbody>

                                    </table>
                                </div>
                            </div>

                            </form>
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
