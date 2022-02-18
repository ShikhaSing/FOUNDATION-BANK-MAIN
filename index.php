<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>FOUNDATION BANK</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Nav bar -->
    <nav class="navbar py-2 navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">FOUNDATION BANK <img src="https://previews.123rf.com/images/bestvectorstock/bestvectorstock1808/bestvectorstock180811868/107211374-bank-vector-icon-isolated-on-transparent-background-bank-logo-concept.jpg" alt="Bank" width="50" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-8 mb-lg-0">
                    <li class="nav-item py-3">
                        <a class="nav-link active" aria-current="page" href="#"><strong>Home</strong></a>
                    </li>
                    <li class="nav-item dropdown py-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Actions
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-3" href="money.php">Money Transfer</a></li>
                            <li><a class="dropdown-item py-3" href="history.php">Transaction History</a></li>
                        </ul>
                    </li>
                    <li class="nav-item py-3">
                        <a class="nav-link" href="https://www.thesparksfoundationsingapore.org/ " target="_blank">About</a>
                    </li>
                    <li class="nav-item py-3">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <class class="welcome">
        <h2>
            <img src="https://image.shutterstock.com/image-vector/two-friends-logo-people-teamwork-260nw-337087919.jpg" alt="Bank" width="75" height="75" style="font-weight: bold;"> <strong>Welcoming you in the most trusted FOUNDATION Bank !</strong> <img src="data:image/jpeg;base64,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" alt="Bank" width="75" height="65">
        </h2>
    </class>
    <!-- Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://github.com/Ayush979/Basic-Banking-System/blob/main/Background/bg1.jpg?raw=true" width="1000" height="375" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1622760274068-a26adafc984f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" width="1000" height="375" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/50987/money-card-business-credit-card-50987.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" width="1000" height="375" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    <!-- Cards -->
    <div class="container my-4 ">
        <div class="row mb-2">
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <div id="hover1"><strong class="d-inline-block mb-5 text-dark text-center">
                                <a href="money.php">
                                    <h6><strong>Money Transfer</strong></h6>
                                </a>
                            </strong></div>
                        <h5 class="mb-2" style="margin: 10px;"><strong>Our Services...</strong></h5>
                        <p class="card-text mb-auto mb-2">
                        <div class="service">
                            <ul>
                                <li>Personal Banking</li>
                                <li>Business Banking</li>
                                <li>Corporate Banking</li>
                                <li>Digital Banking</li>
                            </ul>
                        </div>
                        </p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="350" height="300" src="https://images.pexels.com/photos/5999936/pexels-photo-5999936.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <div id="hover2"><strong class="d-inline-block mb-5 text-dark text-center">
                                <a href="history.php">
                                    <h6><strong>Transaction History</strong></h6>
                                </a>
                            </strong></div>
                        <h5 class="mb-2" style="margin: 10px;"><strong>We...</strong></h5>
                        <p class="card-text mb-auto mb-2">
                        <div class="service">
                            <ul>
                                <li>Here for you !</li>
                                <li>Assure our trust</li>
                                <li>Prefer your satisfaction</li>
                                <li>Are 24 x 7 available</li>
                            </ul>
                        </div>
                        </p>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <img class="bd-placeholder-img" width="350" height="300" src="https://images.pexels.com/photos/6205759/pexels-photo-6205759.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="foot">
        <footer class="bg-light text-center text-lg-start">
            <!-- Copyright -->
            <div class="text-center p-3 " style="background-color: rgba(0, 0, 0, 0.2)">
                ©  Copyright - Made  by Aditya kumar :
                <a class="text-dark" href="https://www.thesparksfoundationsingapore.org/" target="_blank"> The Sparks
                    Foundation <img src="data:image/png;base64,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" alt="" width="40" height="35"></a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>
</html>