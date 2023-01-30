<?php
include_once('connect.php');
$conn=mysqli_connect("localhost","root","","play");
$sql = "select dstv_income,dstv_expense,dstv_profit,income.date FROM income INNER JOIN expense ON income.date=expense.date INNER JOIN profit ON income.date=profit.date limit 7";
$get = "select dstv_income,dstv_expense, dstv_profit,income.date FROM income INNER JOIN expense ON income.date=expense.date INNER JOIN profit ON income.date=profit.date  WHERE DATE(income.date) = DATE(NOW()) ";
$bu= "select dstv_income,dstv_expense,dstv_profit,income.date FROM income INNER JOIN expense ON income.date=expense.date INNER JOIN profit ON income.date=profit.date  WHERE DATE(expense.date) = DATE(NOW()) ";
$bi= "select dstv_income,dstv_expense,dstv_profit,income.date FROM income INNER JOIN expense ON income.date=expense.date INNER JOIN profit ON income.date=profit.date  WHERE DATE(profit.date) = DATE(NOW()) ";

$lo=mysqli_query($conn,$bi);
$ba=mysqli_query($conn,$bu);
$res=mysqli_query($conn,$get);
$result = mysqli_query($conn,$sql);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Play gamezone</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />






</head>

<body>
    <div class="wrapper">
        <div class="body-overlay"></div>

        <nav class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <h3 class="text-light"><img src="images/vr.jpg" alt="" class="img-fluid"><span>play gamezone</span></h3>

            </div>

            <ul class="list-unstyled components">
                <li class="">
                    <a href="index.php" class="dashboard text-light"><i class="material-icons text-light">dashboard</i><span >dashboard</span></a>

                </li>

                <div class="small-screen navbar-display">
                    <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="material-icons">notifications</i></a>

                    </li>

                    <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#"><i class="material-icons">apps</i><span>apps</span></a>
                    </li>

                    <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#"><i class="material-icons">person</i><span>user</span></a>
                    </li>

                    <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#"><i class="material-icons">settings</i><span>setting</span></a>
                    </li>
                </div>

                <li class="">
                    <a href="ps.php" class="text-light fw-bold "><i class="material-symbols-outlined ">stadia_controller</i><span>play station</span></a>

                </li>


                <li class="">
                    <a href="pool.php" class="text-light fw-bold "><i class="material-symbols-outlined">sports_basketball</i><span>pool</span></a>
                </li>


                <li class="">
                    <a href="vr.php" class="text-light fw-bold "><i class="material-symbols-outlined">videogame_asset</i><span>VR</span></a>
                </li>


                <li class="active">
                    <a href="dstv.php" class="text-light fw-bold "><i class="material-icons">tv</i><span>DSTV</span></a>
                </li>




                <li class="">
                    <a href="betting.php" class="text-light fw-bold "><i class="material-symbols-outlined">confirmation_number</i><span>betting</span></a>
                </li>



                <li class="">
                    <a href="coffee.php" class="text-light fw-bold "><i class="material-icons">coffee</i><span>coffee & tea</span></a>
                </li>


                <li class="">
                    <a href="other.php" class="text-light fw-bold "><i class="material-symbols-outlined ">other_admission</i><span>others</span></a>
                </li>

                <li class="">
                    <a href="monthrepo.php" class="text-light fw-bold "><i class="material-symbols-outlined">warning</i><span>monthely report</span></a>
                </li>


            </ul>
        </nav>


        <div id="content">
            <div class="top-navbar">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">

                        <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                <span class="material-icons">arrow_back_ios</span>
            </button>

                        <a class="navbar-brand text-light" href="#"> DSTV</a>

                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                 <span class="material-icons">more_vert</span>
                             </button>


                        <div class="lo ml-700">


                            <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none " id="navbarSupportedContent">
                                <ul class="nav navbar-nav ml-700">

                                    <li class=" nav-item  ">
                                        <a href="not.php" class="nav-link" data-toggle="dropdown">
                                            <span class="material-icons">notifications</span>
                                        </a>

                                        <li class="nav-item">
                                            <a class="nav-link text-right" href="login.php">
                                                <span class=" ">logout</span> </a>
                                        </li>

                                        
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

            </div>



            <div class="main-content">

                <div class="row text-center">

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-success">
                                    <span class="material-icons">attach_money</span>



                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category text-info"><strong>Income</strong></p>
                                <?php
                                     while($row=mysqli_fetch_assoc($res))
                                           {
                                        ?>
                                <h3 class="card-title text-success"><?php echo $row['dstv_income']?></h3>
                                 <?php

                                           }

                                        ?>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">date_range</i> today's total revenue from betting
                                </div>
                            </div>
                        </div>
                    </div>






                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-success">
                                    <span class="material-icons">attach_money</span>



                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category text-info"><strong>Expense</strong></p>
                                <?php
                                           while($row=mysqli_fetch_assoc($ba))
                                           {
                                        ?>
                                <h3 class="card-title text-success"><?php echo $row['dstv_expense']?></h3>
                                 <?php

                                           }

                                        ?> 
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">date_range</i> today's total revenue from betting
                                </div>
                            </div>
                        </div>
                    </div>









                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-header">
                                <div class="icon icon-success">
                                    <span class="material-icons">attach_money</span>



                                </div>
                            </div>
                            <div class="card-content">
                                <p class="category text-info"><strong>Profit</strong></p>
                                <?php
                                           while($row=mysqli_fetch_assoc($lo))
                                           {
                                        ?>
                                <h3 class="card-title text-success"><?php echo $row['dstv_profit']?></h3>
                                 <?php

                                           }

                                        ?>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="material-icons">date_range</i> today's total revenue from betting
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <h1 class="h1 text-muted text-center p-5">Weekly Report</h1>


                <div class="row ">
                    <div class="col-lg-12 col-md-20">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title">net income Stats </h4>
                                <p class="category">total revenue and expense of the week from betting</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>Date</th>
                                            <th>total revenue</th>
                                            <th>total expense</th>
                                            <th>total profit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                           while($row=mysqli_fetch_assoc($result))
                                           {
                                        ?>

                                        <tr>
                                            <td><?php echo $row['date']?></td>
                                            <td><?php echo $row['dstv_income']?></td>
                                            <td><?php echo $row['dstv_expense']?></td>
                                            <td><?php echo $row['dstv_profit']?></td>
                                        </tr>


                                     <?php

                                           }

                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="copyright d-flex justify-content-end"> &copy 2022 Design by omishtu interns. play gamezone Admin Dashboard.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>

            </div>


        </div>

















        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>

        <script src="js/jquery-3.3.1.slim.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#sidebar-collapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                    $('#content').toggleClass('active');
                });

                $('.more-button,.body-overlay').on('click', function() {
                    $('#sidebar,.body-overlay').toggleClass('show-nav');
                });

            });
        </script>

</body>

</html>