<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTNoD9oT_VnEYNKKeOor8U4qK5T1LF4bC2iRDD75fQdveQMHTUA" width="64" height="64"> </a>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link" href="Index.html"> Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Something </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">All the other site</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#"> Action </a></li>
                        <li><a class="dropdown-item" href="#"> Another action </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"> Something else here </a></li>
                        </ul>
                    </li>
                </ul>
            
                <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"> Search </button>
                </form>
                
                <ul class="navbar-nav my-2 my-lg-0 navbar-nav-scroll ">
                    <?php   if (isset($_SESSION["username"])) {
                                echo"<li class='nav-item' style='color:red;'>".$_SESSION['username']."</li>";
                                echo'<li class="nav-item"> <a class="" href="#"><button class="btn btn-outline-success"> log out </button></a></li>';
                            else {
                            echo'<li class="nav-item"> <a class="" href="#"><button class="btn btn-outline-success"> log in </button></a></li>';
                            echo'<li class="nav-item"> <a class="" href="#"><button class="btn btn-outline-success"> Register </button></a></li>';
                            } 
                    ?>
                </ul>
            </div>
        </div>
    </nav>