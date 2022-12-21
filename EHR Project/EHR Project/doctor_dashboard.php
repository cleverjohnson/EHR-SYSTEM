<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="20">
    <title>ECRI_CARE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
  <div class="wrapper">
     <!--Top Menu & Menu button-->
        <div class="sidebar">
            <div class="profile">
                <img src="images/Picture1.png" alt="profile picture">
                <h3 class="fw-bold">JOHNSON</h3>
                <P class="fw-bold">Doctor</P>
            </div>
            <ul class="navbar-nav text-center">
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-gauge"></i>&ensp;Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-house-user"></i>&ensp;Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-people-group"></i>&ensp;About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-hospital-user"></i>&ensp;Patients</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"><i class="fa-solid fa-gear"></i>&ensp;Settings</a>
                </li>
            </ul>
        </div>
        
        <div class="section">
            <nav class="navbar navbar-dark bg-mynav">
                <div class="container-fluid justify-content-between">
                    <a class="navbar-brand fw-bold" href="#">ECRI<i class="fa-solid fa-heart-pulse"></i>CARE</a>
                    <a class="btn btn-primary" href="#" role="button"><i class="fa-solid fa-right-from-bracket"></i>&ensp;Logout</a>
                </div>
            </nav>

            <!-- Box container -->
    <div class="dashboard">

    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
        <a class="text-decoration-none" href="#">
          <div class="card p-3 shadow bg-purple text-center border-0">
            <div class="card-body">
              <i class="fa fa-image fa-2x" aria-hidden="true"></i>
              <hr />
              <p class="card-title lead">Home</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
        <a class="text-decoration-none" href="#">
          <div class="card p-3 shadow bg-purple text-center border-0">
            <div class="card-body">
              <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
              <hr />
              <p class="card-title lead">My Patients</p>
            </div>
          </div>
        </a>
      </div>

      <div class="card" style="width: 18rem;">
      <i class="fa-solid fa-user-gear"></i>
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Patients</p>
    <a href="#" class="btn btn-primary">Billing Info</a>
  </div>
</div>

      <div class="col-xs-6 col-sm-6 col-md-3 col-lg-2 p-2">
        <a class="text-decoration-none" href="#" data-toggle="modal" data-target="#modelHELP">
          <div class="card p-3 shadow bg-purple text-center border-0">
            <div class="card-body">
              <i class="fa-solid fa-user-gear"></i>
              <hr />
              <p class="card-title lead">Settings</p>
            </div>
          </div>
        </a>
      </div>

    </div>
    </div>





        </div>
	</div>


    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.16/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   
</body>
</html>
