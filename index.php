<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kpop Gallery</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Kpop Gallery</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Categories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#girlgroups">Girl Groups</a>
                        <a class="dropdown-item" href="#boygroups">Boy Groups</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">more options</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img id="home" src="images/viviz-members-dazed-hd-wallpaper-uhdpaper.com-17@0@g.jpg" alt="viviz">
                <div class="carousel-caption d-none d-md-block">
                    <h3>VIVIZ</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/monsta-x-shape-of-love-group-members-hd-wallpaper-uhdpaper.com-7@0@g.jpg" alt="monstax">
                <div class="carousel-caption d-none d-md-block">
                    <h3>MONSTA X</h3>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/feel-my-rhythm-red-velvet-members-ballerina-hd-wallpaper-uhdpaper.com-156@1@g.jpg" alt="redvelvet">
                <div class="carousel-caption d-none d-md-block">
                    <h3>RED VELVET</h3>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="badge bg-warning text-dark tx">
        <span>KPOP RUN THE WORLD</span>
    </div>


    <section class="my-4">
        <div class="py-4">
            <h2 id="girlgroups" class="text-center">Girl Groups</h2>
            <hr>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/twice-feel-special-all-members-uhdpaper.com-4K-5.830.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">TWICE</h5>
                        <a href="#" class="btn btn-outline-dark">details</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/feel-my-rhythm-red-velvet-members-ballerina-hd-wallpaper-uhdpaper.com-156@1@g.jpg" class="card-img">
                    <div class="card-body text-center">
                        <h5 class="card-title">RED VELVET</h5>
                        <a href="#" class="btn btn-outline-dark">details</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/aespa-girls-all-members-real-world-hd-wallpaper-uhdpaper.com-665@1@h.jpg" class="card-img">
                    <div class="card-body text-center">
                        <h5 class="card-title">AESPA</h5>
                        <a href="#" class="btn btn-outline-dark">details</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/itzy-checkmate-all-members-4k-wallpaper-uhdpaper.com-858@1@g.jpg" class="card-img">
                    <div class="card-body text-center">
                        <h5 class="card-title">ITZY</h5>
                        <a href="#" class="btn btn-outline-dark">details</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/blackpink-kill-this-love-members-uhdpaper.com-hd-6.1717.jpg" class="card-img">
                    <div class="card-body text-center">
                        <h5 class="card-title">BLACKPINK</h5>
                        <a href="#" class="btn btn-outline-dark">details</a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/nmixx-all-members-4k-wallpaper-uhdpaper.com-133@1@g.jpg" class="card-img">
                    <div class="card-body text-center">
                        <h5 class="card-title">NMIXX</h5>
                        <a href="#" class="btn btn-outline-dark">details</a>
                    </div>
                </div>
            </div>

            <div class="py-4">
                <h2 id="boygroups" class="text-center">Boy Groups</h2>
                <hr>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/monsta-x-shape-of-love-group-members-hd-wallpaper-uhdpaper.com-7@0@g.jpg" class="card-img">
                        <div class="card-body text-center">
                            <h5 class="card-title">MONSTA X</h5>
                            <a href="#" class="btn btn-outline-dark">details</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/197473956_347053430114585_615874446952802434_n.jpg" class="card-img">
                        <div class="card-body text-center">
                            <h5 class="card-title">A.C.E</h5>
                            <a href="#" class="btn btn-outline-dark">details</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/80629199_2511892738920585_4314192699193294848_n.jpg" class="card-img">
                        <div class="card-body text-center">
                            <h5 class="card-title">SF9</h5>
                            <a href="#" class="btn btn-outline-dark">details</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/241258559_414851376672976_7961800323343323811_n.jpg" class="card-img">
                        <div class="card-body text-center">
                            <h5 class="card-title">ATEEZ</h5>
                            <a href="#" class="btn btn-outline-dark">details</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images//258875129_456970239129143_2794705429896516780_n.jpg" class="card-img">
                        <div class="card-body text-center">
                            <h5 class="card-title">NCT</h5>
                            <a href="#" class="btn btn-outline-dark">details</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/txt-all-members-loser-lover-fight-or-escape-4k-wallpaper-3840x2160-uhdpaper.com-795.0_b.jpg" class="card-img">
                        <div class="card-body text-center">
                            <h5 class="card-title">TOMORROW X TOGETHER</h5>
                            <a href="#" class="btn btn-outline-dark">details</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>


    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>