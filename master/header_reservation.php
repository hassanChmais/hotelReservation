<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Hotel Reservation</title>

    <!-- Styles -->
    <link href="../theme/bootstrap/css/app.css" rel="stylesheet">
    <link href="../theme/bootstrap/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <?php 
    session_start();
  if ($_SESSION['room_id'] == "" && $_SESSION['customer_id'] == "" ){
  header('location:../login/customer.php');
}
?> 
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="">
                   Hotel Reservation
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
<!--                                                     <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Manage <span class="caret"></span>
                                </a>

                              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="">
                                        News
                                    </a>
                            <a class="dropdown-item" href="">
                                        Teams
                                    </a>
                            <a class="dropdown-item" href="">
                                        Highligh
                                    </a>
                             <a class="dropdown-item" href="">
                                        Results
                                    </a>
                                </div> </li> -->
                                       <!--<li class="nav-item Navbar">
         <a class="nav-link" href="{{ route('viewdetails') }}" role="button"  aria-haspopup="true" aria-expanded="false">
        All Details<span class="caret"></span></a></li>-->
<!--                                                <li class="nav-item Navbar">
         <a class="nav-link" href="{{ route('addResult') }}" role="button"  aria-haspopup="true" aria-expanded="false">
        Result<span class="caret"></span></a></li>-->
<!--                 <li class="nav-item Navbar">
         <a class="nav-link" href="../reservation/show_reservation.php" role="button"  aria-haspopup="true" aria-expanded="false">
        Reservation<span class="caret"></span></a></li> -->
                                                        <li class="nav-item Navbar">
                                    <a class="nav-link" href="../foodDrink_reservation/index.php" role="button"  aria-haspopup="true" aria-expanded="false">
                                    Food/Drink<span class="caret"></span></a>
</li>  
                                                <li class="nav-item Navbar">
                                    <a class="nav-link" href="../extraService_reservation/index.php" role="button"  aria-haspopup="true" aria-expanded="false">
                                    Extra Services<span class="caret"></span></a>
</li>    
        <li class="nav-item Navbar">
         <a class="nav-link" href="../maintenance_reservation/index.php" role="button"  aria-haspopup="true" aria-expanded="false">
        Maintenance<span class="caret"></span></a></li>
<li class="nav-item Navbar">
         <a class="nav-link" href="../bathes_reservation/index.php" role="button"  aria-haspopup="true" aria-expanded="false">
        Bathes<span class="caret"></span></a></li>
        <li class="nav-item Navbar">
         <a class="nav-link" href="../login/exit.php" role="button"  aria-haspopup="true" aria-expanded="false">
        Exit<span class="caret"></span></a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

