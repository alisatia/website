<?php 
session_start();

if (isset($_SESSION['id_user'])) { ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Dasboard</title>
  </head>
  <body style="background-color: #F0F5FF; font-family: 'Montserrat'">

    <!-- container -->
    <div id="wrapper" class="toggled" >

      <!-- Sidebar -->
      <div id="sidebar-wrapper" class="shadow bg-white">
        <div class="d-flex flex-column h-100">
            <div class="d-flex flex-row" style="height: 85%;">
                <div class="m-0" style="width: 15%; background-color: #a8a8a8"></div>
                <div class="d-flex flex-column" style="width: 85%">
                    <div class="d-flex justify-content-center py-5">
                        <img style="width: 80%;" src="../assets/itbpress.png" alt="itbpress">
                    </div>
                    <div class="fs-5 fw-bold mb-3" style="margin-left: 8%">Menu</div>
                    <a href="#" class="d-flex flex-row shadow-sm rounded-4 p-3" style="text-decoration: none; background-color: #004DFF; margin: 1% 8%; height: 40px">
                        <div class="d-flex align-items-center" style="width: 30%">
                            <img class="" src="../assets/wdasboard.png" alt="dasboard" style="width: 70%">
                        </div>
                        <div class="d-flex align-items-center fs-6 fw-bold text-white" style="width: 70%; padding-left: 5px">Dasboard</div>
                    </a>

                    <a href="#" class="tomdas d-flex flex-row rounded-4 p-2" style="text-decoration: none; margin: 1% 8%; height: 40px;">
                        <div class="d-flex align-items-center" style="width: 30%">
                            <div class="imgg"></div>
                        </div>
                        <div class="d-flex align-items-center fs-6 fw-bold" style="width: 70%; padding-left: 5px">Status</div>
                    </a>

                    <a href="#" class="tomdas d-flex flex-row rounded-4 p-2" style="text-decoration: none; margin: 1% 8%; height: 40px;">
                        <div class="d-flex align-items-center" style="width: 30%">
                            <div class="imgn"></div>
                        </div>
                        <div class="d-flex align-items-center fs-6 fw-bold" style="width: 70%; padding-left: 5px">Naskah</div>
                    </a>

                    <a href="#" class="tomdas d-flex flex-row rounded-4 p-2" style="text-decoration: none; margin: 1% 8%; height: 40px;">
                        <div class="d-flex align-items-center" style="width: 30%">
                            <div class="imgc"></div>
                        </div>
                        <div class="d-flex align-items-center fs-6 fw-bold" style="width: 70%; padding-left: 5px">Cek Harga</div>
                    </a>

                    <a href="#" class="tomdas d-flex flex-row rounded-4 p-2" style="text-decoration: none; margin: 1% 8%; height: 40px;">
                        <div class="d-flex align-items-center" style="width: 30%">
                            <div class="imgt"></div>
                        </div>
                        <div class="d-flex align-items-center fs-6 fw-bold" style="width: 70%; padding-left: 5px">Term and Condition</div>
                    </a>
                </div>
            </div>
            <div class="d-flex flex-column" style="height: 15%;">
                <div class="d-flex flex-row " style="height: 40%">
                    <div class="" style="width: 15%; background-color: #a8a8a8; border-bottom-right-radius: 100%;"></div>
                    <div class="" style="width: 85%"></div>
                </div>
                <div class="d-flex flex-row align-items-center" style="height: 85%;">
                    <div class="m-0" style="width: 15%;"></div>
                    <div class="d-flex flex-column" style="width: 85%">
                        <a href="#" class="tomdas d-flex flex-row rounded-4 p-2" style="text-decoration: none; margin: 1% 8%; height: 40px;">
                            <div class="d-flex align-items-center" style="width: 30%">
                                <div class="imglg"></div>
                            </div>
                            <div class="d-flex align-items-center fs-6 fw-bold" style="width: 70%; padding-left: 5px">Logout</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
      </div>

      <!-- Page Content -->
      <div id="page-content-wrapper" style="">
        <div class="container-fluid">
          <button type="button" href="#menu-toggle" id="menu-toggle" onClick="sembunyi();" class="mb-1 shadow ">Toggle Menu</button>
          <p class="">dsd</p>
          <div class=" ">
            <div class="col-lg-12">
              <h1>Simple Sidebar</h1>
            </div>
          </div>
            <div class="row">
            <div class=" border col-6 col-md-3 fs-2">1</div>  
            <div class=" border col-6 col-md-3 fs-2">1</div>  
            <div class=" border col-6 col-md-3 fs-2">1</div>  
            <div class=" border col-6 col-md-3 fs-2">1</div>  
            <a href="../login/logout.php">logout</a>
                <?php $mae = $_SESSION['id_user'];
                echo $mae;
                ?>
          </div>
        </div>
      </div>
    </div>
 
    <!-- script -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <script>
        //   var hidden = false;
        //   function sembunyi() {
        //       hidden = !hidden;
        //       if(hidden) {
        //           document.getElementById('menu-toggle').style.visibility = 'hidden';
        //       } else {
        //           document.getElementById('menu-toggle').style.visibility = 'visible';
        //       }
        //   }
      $("#menu-toggle").click(function (e) {e.preventDefault(); $("#wrapper").toggleClass("toggled");});
      $("#menu-toggle2").click(function (e) {e.preventDefault(); $("#wrapper").toggleClass("toggled");});
    </script>
  
</body>
</html>


<?php 
} else { 
    header("Location: ../");
} ?>