<?php
include_once('connect.php');
$conn=mysqli_connect("localhost","root","","play");
$sql="SELECT * from notification";


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
          <a href="index.php" class="dashboard text-light "><i class="material-icons text-light">dashboard</i><span >dashboard</span></a>

        </li>

        <div class="small-screen navbar-display">
          <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
              <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
    <i class="material-icons">notifications</i></a>
             
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
  
                   <a class="navbar-brand text-light" href=""> Alert Messages </a>

                   <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
                   data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                 <span class="material-icons">more_vert</span>
                             </button>
         

                   <div class="lo ml-700">
  
           
            <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none " id="navbarSupportedContent">
                <ul class="nav navbar-nav ml-700"> 
                  
                  <li class=" active nav-item  ">
                    <a href="#" class="nav-link" data-toggle="dropdown">
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



        


           <div class="row ">
            <div class="col-lg-12 col-md-20">
                <div class="card" style="min-height: 485px">
                    <div class="card-header card-header-text">
                        <h4 class="card-title">alert messages</h4>
                    </div>
                    <div class="card-content table-responsive">
                        <table class="table table-hover">
                            <thead class="text-primary">
                                <tr>
                                  <th>date</th>
                                  <th>from</th>
                                <th>Message</th>
                            </tr></thead>
                            <tbody>
                            <?php
                                           while($row=mysqli_fetch_assoc($result))
                                           {
                                        ?>

                                        <tr>
                                            <td><?php echo $row['date']?></td>
                                            <td><?php echo $row['name']?></td>
                                            <td><?php echo $row['message']?></td>
                                           
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