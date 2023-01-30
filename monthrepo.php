<?php
include_once('connect.php');
$conn=mysqli_connect("localhost","root","","play");
$na="select income.date,(playstation_income+betting_income+coffee_income+dstv_income+other_income+pool_income+vr_income) 
          as totali  , (playstation_expense+betting_expense+coffee_expense+dstv_expense+other_expense+pool_expense+vr_expense) as totale,
          (playstation_profit+betting_profit+coffee_profit+dstv_profit+other_profit+pool_profit+vr_profit) as totalp  from (income join expense on income.date=expense.date join profit on profit.date=expense.date) 
           where income.date BETWEEN '2023-01-01 ' AND '2023-01-30 '";

$fa="select income.date,(playstation_income+betting_income+coffee_income+dstv_income+other_income+pool_income+vr_income) 
           as totali  , (playstation_expense+betting_expense+coffee_expense+dstv_expense+other_expense+pool_expense+vr_expense) as totale,
           (playstation_profit+betting_profit+coffee_profit+dstv_profit+other_profit+pool_profit+vr_profit) as totalp  from (income join expense on income.date=expense.date join profit on profit.date=expense.date) 
            where income.date BETWEEN '2023-02-01 ' AND '2023-02-30 '";


$ma="select income.date,(playstation_income+betting_income+coffee_income+dstv_income+other_income+pool_income+vr_income) 
            as totali  , (playstation_expense+betting_expense+coffee_expense+dstv_expense+other_expense+pool_expense+vr_expense) as totale,
            (playstation_profit+betting_profit+coffee_profit+dstv_profit+other_profit+pool_profit+vr_profit) as totalp  from (income join expense on income.date=expense.date join profit on profit.date=expense.date) 
             where income.date BETWEEN '2023-03-01 ' AND '2023-03-30 '";


$ap="select income.date,(playstation_income+betting_income+coffee_income+dstv_income+other_income+pool_income+vr_income) 
          as totali  , (playstation_expense+betting_expense+coffee_expense+dstv_expense+other_expense+pool_expense+vr_expense) as totale,
          (playstation_profit+betting_profit+coffee_profit+dstv_profit+other_profit+pool_profit+vr_profit) as totalp  from (income join expense on income.date=expense.date join profit on profit.date=expense.date) 
           where income.date BETWEEN '2023-04-01 ' AND '2023-04-30 '";


$my="select income.date,(playstation_income+betting_income+coffee_income+dstv_income+other_income+pool_income+vr_income) 
           as totali  , (playstation_expense+betting_expense+coffee_expense+dstv_expense+other_expense+pool_expense+vr_expense) as totale,
           (playstation_profit+betting_profit+coffee_profit+dstv_profit+other_profit+pool_profit+vr_profit) as totalp  from (income join expense on income.date=expense.date join profit on profit.date=expense.date) 
            where income.date BETWEEN '2023-05-01 ' AND '2023-05-30 '";


$ju="select income.date,(playstation_income+betting_income+coffee_income+dstv_income+other_income+pool_income+vr_income) 
            as totali  , (playstation_expense+betting_expense+coffee_expense+dstv_expense+other_expense+pool_expense+vr_expense) as totale,
            (playstation_profit+betting_profit+coffee_profit+dstv_profit+other_profit+pool_profit+vr_profit) as totalp  from (income join expense on income.date=expense.date join profit on profit.date=expense.date) 
             where income.date BETWEEN '2023-06-01 ' AND '2023-06-30 '";


$jl="select income.date,(playstation_income+betting_income+coffee_income+dstv_income+other_income+pool_income+vr_income) 
             as totali  , (playstation_expense+betting_expense+coffee_expense+dstv_expense+other_expense+pool_expense+vr_expense) as totale,
             (playstation_profit+betting_profit+coffee_profit+dstv_profit+other_profit+pool_profit+vr_profit) as totalp  from (income join expense on income.date=expense.date join profit on profit.date=expense.date) 
              where income.date BETWEEN '2023-07-01 ' AND '2023-07-30 '";


$au="select income.date,(playstation_income+betting_income+coffee_income+dstv_income+other_income+pool_income+vr_income) 
          as totali  , (playstation_expense+betting_expense+coffee_expense+dstv_expense+other_expense+pool_expense+vr_expense) as totale,
          (playstation_profit+betting_profit+coffee_profit+dstv_profit+other_profit+pool_profit+vr_profit) as totalp  from (income join expense on income.date=expense.date join profit on profit.date=expense.date) 
           where income.date BETWEEN '2023-08-01 ' AND '2023-08-30 '";


$se="select income.date,(playstation_income+betting_income+coffee_income+dstv_income+other_income+pool_income+vr_income) 
           as totali  , (playstation_expense+betting_expense+coffee_expense+dstv_expense+other_expense+pool_expense+vr_expense) as totale,
           (playstation_profit+betting_profit+coffee_profit+dstv_profit+other_profit+pool_profit+vr_profit) as totalp  from (income join expense on income.date=expense.date join profit on profit.date=expense.date) 
            where income.date BETWEEN '2023-09-01 ' AND '2023-09-30 '";



$oc="select income.date,(playstation_income+betting_income+coffee_income+dstv_income+other_income+pool_income+vr_income) 
            as totali  , (playstation_expense+betting_expense+coffee_expense+dstv_expense+other_expense+pool_expense+vr_expense) as totale,
            (playstation_profit+betting_profit+coffee_profit+dstv_profit+other_profit+pool_profit+vr_profit) as totalp  from (income join expense on income.date=expense.date join profit on profit.date=expense.date) 
             where income.date BETWEEN '2023-10-01 ' AND '2023-10-30 '";



$no="select income.date,(playstation_income+betting_income+coffee_income+dstv_income+other_income+pool_income+vr_income) 
             as totali  , (playstation_expense+betting_expense+coffee_expense+dstv_expense+other_expense+pool_expense+vr_expense) as totale,
             (playstation_profit+betting_profit+coffee_profit+dstv_profit+other_profit+pool_profit+vr_profit) as totalp  from (income join expense on income.date=expense.date join profit on profit.date=expense.date) 
              where income.date BETWEEN '2023-11-01 ' AND '2023-11-30 '";


$de="select income.date,(playstation_income+betting_income+coffee_income+dstv_income+other_income+pool_income+vr_income) 
           as totali  , (playstation_expense+betting_expense+coffee_expense+dstv_expense+other_expense+pool_expense+vr_expense) as totale,
           (playstation_profit+betting_profit+coffee_profit+dstv_profit+other_profit+pool_profit+vr_profit) as totalp  from (income join expense on income.date=expense.date join profit on profit.date=expense.date) 
            where income.date BETWEEN '2023-12-01 ' AND '2023-12-30 '";




 $pr='select sum(pool_profit) as pool,sum(vr_profit) as vr,sum(coffee_profit) as coffee, sum(betting_profit) as betting,
     sum(playstation_profit) as ps, sum(dstv_profit) as dstv,sum(other_profit) as other from profit limit 30';
     
$ress=mysqli_query($conn,$pr);

          

$res=mysqli_query($conn,$na);
$feb=mysqli_query($conn,$fa);
$mar=mysqli_query($conn,$ma);
$apr=mysqli_query($conn,$ap);
$may=mysqli_query($conn,$my);
$june=mysqli_query($conn,$ju);
$jul=mysqli_query($conn,$jl);
$aug=mysqli_query($conn,$au);
$sep=mysqli_query($conn,$se);
$oct=mysqli_query($conn,$oc);
$nov=mysqli_query($conn,$no);
$dec=mysqli_query($conn,$de);
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
          <a href="index.php" class="dashboard "><i class="material-icons text-light">dashboard</i><span >dashboard</span></a>

        </li>

        <div class="small-screen navbar-display">
          <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
              <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
    <i class="material-icons">notifications</i><span> 4 notification</span></a>
              <ul class="collapse list-unstyled menu" id="homeSubmenu0">
                            
              </ul>
          </li>
  
  <li  class="d-lg-none d-md-block d-xl-none d-sm-block">
              <a href="#"><i class="material-icons">apps</i><span>apps</span></a>
          </li>
  
   <li  class="d-lg-none d-md-block d-xl-none d-sm-block">
              <a href="#"><i class="material-icons">person</i><span>user</span></a>
          </li>
  
  <li  class="d-lg-none d-md-block d-xl-none d-sm-block">
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


  <li class="">
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

<li class="active">
  <a href="monthrepo.html" class="text-light fw-bold "><i class="material-symbols-outlined">warning</i><span>monthely report</span></a>
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
  
                   <a class="navbar-brand text-light" href="#"> Monthly Report </a>

                   <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

<div class="po p-7 text-center mb-5">

<div id="columnchart_values" style="width: 900px; height: 300px;" class="p-599 m-28"></div>
         
</div>                    


<h1 class="h1 text-muted text-center p-5">View Monthly Report</h1>







<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> January </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="row ">
                    <div class="col-lg-12 col-md-20">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title fw-bold">Monthly Report</h4>
                                <p class="category">total revenue and expense of the month</p>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr><th>Date</th>
                                        <th>total revenue</th>
                                        <th>total expense</th>
                                        <th>total profit</th>
                                    </tr></thead>
                                    <tbody>
                                    
                                        <tr>
                                        <?php
                                           while($row=mysqli_fetch_assoc($res))
                                           {
                                        ?>
                                            <td><?php echo $row['date']?></td>

                                           

                                        
                                            <td><?php echo $row['totali']?></td>
                                          
                                            <td><?php echo $row['totale']?></td>
                                            <td><?php echo $row['totalp']?></td>

                                            <?php

                                          }

                                          ?>
                                        </tr>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
            </div>
        </div>
    </div>
    </div>
    
    <?php
                                           while($row=mysqli_fetch_assoc($feb))
                                           {
                                        ?>
<div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Feburary </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="row ">
                    <div class="col-lg-12 col-md-20">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title fw-bold">Monthly Report</h4>
                                <p class="category">total revenue and expense of the month</p>
                            </div>

                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr><th>Date</th>
                                        <th>total revenue</th>
                                        <th>total expense</th>
                                        <th>total profit</th>
                                    </tr></thead>
                                    <tbody>
                                        <tr>
                                      
                                            <td><?php echo $row['date']?></td>

                                           

                                        
                                            <td><?php echo $row['totali']?></td>
                                          
                                            <td><?php echo $row['totale']?></td>
                                            <td><?php echo $row['totalp']?></td>

                                          
                                        </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>            
                  </div>
        </div>
    </div>
</div>

</div>
<?php

}

?>



                                     
                              <?php
                                           while($row=mysqli_fetch_assoc($mar))
                                           {
                                        ?>
<div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> March </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="row ">
                    <div class="col-lg-12 col-md-20">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title fw-bold">Monthly Report</h4>
                                <p class="category">total revenue and expense of the month</p>
                            </div>

                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr><th>Date</th>
                                        <th>total revenue</th>
                                        <th>total expense</th>
                                        <th>total profit</th>
                                    </tr></thead>
                                    <tbody>
                                        <tr>
                                      
                                            <td><?php echo $row['date']?></td>

                                           

                                        
                                            <td><?php echo $row['totali']?></td>
                                          
                                            <td><?php echo $row['totale']?></td>
                                            <td><?php echo $row['totalp']?></td>

                                          
                                        </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>            
                  </div>
        </div>
    </div>
</div>

</div>
<?php

}

?>





<?php
                                           while($row=mysqli_fetch_assoc($apr))
                                           {
                                        ?>
<div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> April </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="row ">
                    <div class="col-lg-12 col-md-20">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title fw-bold">Monthly Report</h4>
                                <p class="category">total revenue and expense of the month</p>
                            </div>

                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr><th>Date</th>
                                        <th>total revenue</th>
                                        <th>total expense</th>
                                        <th>total profit</th>
                                    </tr></thead>
                                    <tbody>
                                        <tr>
                                      
                                            <td><?php echo $row['date']?></td>

                                           

                                        
                                            <td><?php echo $row['totali']?></td>
                                          
                                            <td><?php echo $row['totale']?></td>
                                            <td><?php echo $row['totalp']?></td>

                                          
                                        </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>            
                  </div>
        </div>
    </div>
</div>

</div>
<?php

}

?>




<?php
                                           while($row=mysqli_fetch_assoc($may))
                                           {
                                        ?>
<div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> May </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="row ">
                    <div class="col-lg-12 col-md-20">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title fw-bold">Monthly Report</h4>
                                <p class="category">total revenue and expense of the month</p>
                            </div>

                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr><th>Date</th>
                                        <th>total revenue</th>
                                        <th>total expense</th>
                                        <th>total profit</th>
                                    </tr></thead>
                                    <tbody>
                                        <tr>
                                      
                                            <td><?php echo $row['date']?></td>

                                           

                                        
                                            <td><?php echo $row['totali']?></td>
                                          
                                            <td><?php echo $row['totale']?></td>
                                            <td><?php echo $row['totalp']?></td>

                                          
                                        </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>            
                  </div>
        </div>
    </div>
</div>

</div>
<?php

}

?>





<?php
                                           while($row=mysqli_fetch_assoc($june))
                                           {
                                        ?>
<div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> June </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="row ">
                    <div class="col-lg-12 col-md-20">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title fw-bold">Monthly Report</h4>
                                <p class="category">total revenue and expense of the month</p>
                            </div>

                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr><th>Date</th>
                                        <th>total revenue</th>
                                        <th>total expense</th>
                                        <th>total profit</th>
                                    </tr></thead>
                                    <tbody>
                                        <tr>
                                      
                                            <td><?php echo $row['date']?></td>

                                           

                                        
                                            <td><?php echo $row['totali']?></td>
                                          
                                            <td><?php echo $row['totale']?></td>
                                            <td><?php echo $row['totalp']?></td>

                                          
                                        </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>            
                  </div>
        </div>
    </div>
</div>

</div>

<?php
}
?>




                                       <?php
                                           while($row=mysqli_fetch_assoc($jul))
                                           {
                                        ?>
<div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> July </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="row ">
                    <div class="col-lg-12 col-md-20">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title fw-bold">Monthly Report</h4>
                                <p class="category">total revenue and expense of the month</p>
                            </div>

                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr><th>Date</th>
                                        <th>total revenue</th>
                                        <th>total expense</th>
                                        <th>total profit</th>
                                    </tr></thead>
                                    <tbody>
                                        <tr>
                                      
                                            <td><?php echo $row['date']?></td>

                                           

                                        
                                            <td><?php echo $row['totali']?></td>
                                          
                                            <td><?php echo $row['totale']?></td>
                                            <td><?php echo $row['totalp']?></td>

                                          
                                        </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>            
                  </div>
        </div>
    </div>
</div>

</div>
<?php

}

?>


<?php
                                           while($row=mysqli_fetch_assoc($aug))
                                           {
                                        ?>
<div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> August </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="row ">
                    <div class="col-lg-12 col-md-20">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title fw-bold">Monthly Report</h4>
                                <p class="category">total revenue and expense of the month</p>
                            </div>

                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr><th>Date</th>
                                        <th>total revenue</th>
                                        <th>total expense</th>
                                        <th>total profit</th>
                                    </tr></thead>
                                    <tbody>
                                        <tr>
                                      
                                            <td><?php echo $row['date']?></td>

                                           

                                        
                                            <td><?php echo $row['totali']?></td>
                                          
                                            <td><?php echo $row['totale']?></td>
                                            <td><?php echo $row['totalp']?></td>

                                          
                                        </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>            
                  </div>
        </div>
    </div>
</div>

</div>
<?php

}

?>


<?php
                                           while($row=mysqli_fetch_assoc($sep))
                                           {
                                        ?>
<div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> September </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="row ">
                    <div class="col-lg-12 col-md-20">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title fw-bold">Monthly Report</h4>
                                <p class="category">total revenue and expense of the month</p>
                            </div>

                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr><th>Date</th>
                                        <th>total revenue</th>
                                        <th>total expense</th>
                                        <th>total profit</th>
                                    </tr></thead>
                                    <tbody>
                                        <tr>
                                      
                                            <td><?php echo $row['date']?></td>

                                           

                                        
                                            <td><?php echo $row['totali']?></td>
                                          
                                            <td><?php echo $row['totale']?></td>
                                            <td><?php echo $row['totalp']?></td>

                                          
                                        </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>            
                  </div>
        </div>
    </div>
</div>

</div>
<?php

}

?>



<?php
                                           while($row=mysqli_fetch_assoc($oct))
                                           {
                                        ?>
<div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> October </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="row ">
                    <div class="col-lg-12 col-md-20">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title fw-bold">Monthly Report</h4>
                                <p class="category">total revenue and expense of the month</p>
                            </div>

                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr><th>Date</th>
                                        <th>total revenue</th>
                                        <th>total expense</th>
                                        <th>total profit</th>
                                    </tr></thead>
                                    <tbody>
                                        <tr>
                                      
                                            <td><?php echo $row['date']?></td>

                                           

                                        
                                            <td><?php echo $row['totali']?></td>
                                          
                                            <td><?php echo $row['totale']?></td>
                                            <td><?php echo $row['totalp']?></td>

                                          
                                        </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>            
                  </div>
        </div>
    </div>
</div>

</div>
<?php

}

?>


<?php
                                           while($row=mysqli_fetch_assoc($nov))
                                           {
                                        ?>
<div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> November </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="row ">
                    <div class="col-lg-12 col-md-20">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title fw-bold">Monthly Report</h4>
                                <p class="category">total revenue and expense of the month</p>
                            </div>

                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr><th>Date</th>
                                        <th>total revenue</th>
                                        <th>total expense</th>
                                        <th>total profit</th>
                                    </tr></thead>
                                    <tbody>
                                        <tr>
                                      
                                            <td><?php echo $row['date']?></td>

                                           

                                        
                                            <td><?php echo $row['totali']?></td>
                                          
                                            <td><?php echo $row['totale']?></td>
                                            <td><?php echo $row['totalp']?></td>

                                          
                                        </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>            
                  </div>
        </div>
    </div>
</div>

</div>
<?php

}

?>




<?php
                                           while($row=mysqli_fetch_assoc($dec))
                                           {
                                        ?>
<div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> December </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <div class="row ">
                    <div class="col-lg-12 col-md-20">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h4 class="card-title fw-bold">Monthly Report</h4>
                                <p class="category">total revenue and expense of the month</p>
                            </div>

                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <tr><th>Date</th>
                                        <th>total revenue</th>
                                        <th>total expense</th>
                                        <th>total profit</th>
                                    </tr></thead>
                                    <tbody>
                                        <tr>
                                      
                                            <td><?php echo $row['date']?></td>

                                           

                                        
                                            <td><?php echo $row['totali']?></td>
                                          
                                            <td><?php echo $row['totale']?></td>
                                            <td><?php echo $row['totalp']?></td>

                                          
                                        </tr>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>            
                  </div>
        </div>
    </div>
</div>

</div>
<?php

}

?>















                

           
           <script>
                            var collapseElementList = [].slice.call(document.querySelectorAll('.collapse'))
                            var collapseList = collapseElementList.map(function (collapseEl) {
                                collapseEl.addEventListener('hidden.bs.collapse', function () {
                                    let children = this.querySelectorAll('.collapse.show');
                                    children.forEach((c)=>{
                                        var collapse = bootstrap.Collapse.getInstance(c)
                                        collapse.hide()
                                    })
                                })
                            })

                        </script>


                <footer class="footer">
                  <div class="container-fluid">
                     <div class="row">
                      <div class="col-md-6">
                        <p class="copyright d-flex justify-content-end"> &copy 2022 Design by
                                        omishtu interns. play gamezone Admin Dashboard.
                                   </p>
                       </div>
                      </div>
                     </div>
                   </footer>
               </div>

          </div>


       </div>
   
</div>



       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       <script type="text/javascript">
         google.charts.load("current", {packages:['corechart']});
         google.charts.setOnLoadCallback(drawChart);
         function drawChart() {
           var data = google.visualization.arrayToDataTable([
             ["revenue", "birr", { role: "style" } ],
             <?php
         while($row= mysqli_fetch_assoc($ress))

         {
        
         ?>

         
             ["Pool", <?php echo $row['pool']?>, "#b87333"],
             ["Playstation", <?php echo $row['ps']?>, "silver"],
             ["betting", <?php echo $row['betting']?>, "gold"],
             ["DSTV", <?php echo $row['dstv']?>, "color: #e5e4e2"]
           
            

             <?php
         }
     ?> 
           ]);
     
           var view = new google.visualization.DataView(data);
           view.setColumns([0, 1,
                            { calc: "stringify",
                              sourceColumn: 1,
                              type: "string",
                              role: "annotation" },
                            2]);
     
           var options = {
             title: "revenue of the month",
             width: 800,
             height: 400,
             bar: {groupWidth: "95%"},
             legend: { position: "none" },
           };
           var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
           chart.draw(view, options);
       }
       </script>











        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">

        </script>

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>


<script type="text/javascript">
$(document).ready(function () {
         $('#sidebar-collapse').on('click', function () {
             $('#sidebar').toggleClass('active');
     $('#content').toggleClass('active');
         });
   
    $('.more-button,.body-overlay').on('click', function () {
             $('#sidebar,.body-overlay').toggleClass('show-nav');
         });
   
     });


  
        
    
</script>

</body>
</html>