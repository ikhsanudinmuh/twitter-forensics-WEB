<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <!-- NAVBAR --> 
        <nav class="navbar navbar-expand-lg container-fluid" style="z-index: 8;background-color:#013654;padding-top: 13px;padding-bottom: 13px;">
            <div class="container-fluid">
                <img src="assets/logo.png" style="padding-right: 40px;padding-left: 40px;width: 200px;">
                <div class="d-flex d-sm-block d-md-none">
                    <button style="border:none" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header" style="background-color:#013654">
                            <img src="assets/logo.png">
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body" >
                            <div class="d-flex flex-column bd-highlight mb-3">
                                <div class="p-3 bd-highlight text-navbar"><a href="./landingPage.blade.html" class="nav-text" style="text-decoration:none">Dashboard</a></div>
                                <div class="p-3 bd-highlight text-navbar"><a href="./nextPage.blade.html" class="nav-text" style="text-decoration:none">Twitter</a></div>
                                <div class="p-3 bd-highlight text-navbar"><a href="#Why Us" class="nav-text" style="text-decoration:none">About</a></div>
                                <div class="p-3 bd-highlight text-navbar"><a href="#Masuk" class="nav-text" style="text-decoration:none">Tutorial</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse container mt-3" id="navbarSupportedContent">
                    <div class="navbar-nav me-auto mb-2 mb-lg-0"></div>
                    <form class="d-flex">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link p-3 text-navbar" aria-current="page" href="./landingPage.blade.html">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-3 text-navbar" href="./nextPage.blade.html">Twitter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-3 text-navbar" aria-current="page" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-3 text-navbar" aria-current="page" href="#">Tutorial</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </nav>
        <!-- header section  -->
        <div class="row">
            <div class="col p-0 center-text" style="background-image: linear-gradient(to right, #0679B9, #00314D)">
                <img src="../public/assets/Group 11.png" class="pb-3 header-picture">
                <h2 class="header-text p-0 pb-3">Seeing the data in the app makes it open and clear to give you things you've never seen before,
                    Then use super forensics.
                    </h2>
                <button class="btn btn-dark header-text" ><a href="#main-section" class="button-text">Try it now!</a></button>
            </div>
            <div class="col p-0">
                <img src="../public/assets/Rectangle 3.png" style="width: 700px;height: 560px;">
            </div>
        </div>
    </header>
    <main>
        <!-- Section 1 -->
        <div class="row" id="main-section">
            <h1 class="title-text pt-5" >Select A Phone or Data and Press Project</h1>
            <div class="col">
                <img class="ps-5" style="margin-top:-110px; height: 630px;" src="../public/assets/iPhone 11 Pro.png">
                <div class="row pt-3 ms-5" style="width: 260px;">
                    <p class="text-center"  style="font-weight: 600;">IPHONE 11-MXT2</p>
                </div>
            </div>
            <div class="col ps-4 pt-4 mt-5 box">
                <h5 class="title-text pb-3" style="font-size:18px;color: white;">CONNECTED PHONES AND IMPORTED DATA :</h5>
                <div class="d-flex justify-content-start box-phone ps-4 pt-3 mb-2">
                    <img src="../public/assets/phone.png" style="width: 20px;height:30px">
                    <p class="text-center ms-3"  style="font-weight: 600;">IPHONE 11-MXT2</p>
                </div>
                <p class="text ps-2" style="color: white">Searching for devices ...</p>
                <div class="d-flex justify-content-start pt-5">
                    <div class="row col-3 me-3 ms-4">
                        <button class="btn btn-info mb-2" style="width: 200px">Disconnect phone</button>
                        <button class="btn btn-info mb-2" style="width: 200px">Remove Connector</button>
                        <button class="btn btn-info mb-2" style="width: 200px">Phone Data Preview</button>
                        <button class="btn btn-info mb-2" style="width: 200px">Browse Phone</button>
                    </div>
                    <div class="row col-8" style="border-radius: 30px;background-color: #043753;">
                        <div class="col pt-3 ps-5">
                            <button class="btn btn-link text-box pb-3"><img class="me-3" src="../public/assets/wifi.png" width="25px"> Wifi connection</button>
                            <button class="btn btn-link text-box pb-3"><img class="me-3" src="../public/assets/Vector.png" width="25px"> Import data</button>
                            <button class="btn btn-link text-box"><img class="me-3" src="../public/assets/Vector (2).png" width="25px"> Hack phone</button>
                        </div>
                        <div class="col pt-3" style="margin-left: -50px">
                            <button class="btn btn-link text-box pb-3"><img class="me-3" src="../public/assets/bluetooth.png" width="25px"> Bluetooth connection</button>
                            <button class="btn btn-link text-box pb-3"><img class="me-3" src="../public/assets/Vector (3).png" width="25px"> Connect iCloud</button>
                            <button class="btn btn-link text-box"><img class="me-3" src="../public/assets/Group.png" width="25px"> How to connect</button>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between pt-5">
                    <div></div>
                    <button class="btn btn-dark header-text" ><a href="./nextPage.blade.html" class="button-text">Next</a></button>
                </div>
            </div>
            <img src="../public/assets/Group 12.png">
        </div>
        <div class="section-addition">
            <img src="../public/assets/Group 11.png" class="pb-3 header-picture" style="margin-left:700px;margin-top: 100px;">
            <h2 class="header-text p-0 pb-3" style="margin-left:700px;font-size: 24px;width: 600px;">Seeing the data in the app makes it open and clear to give you things you've never seen before,
                Then use super forensics.</h2>
        </div>
        <div class="row mt-5">
            <hr>
        </div>
    </main>
    <footer>
        <div class="text-center" style="margin-bottom: 5px;">
            <p class="text-muted mb-0" >
                Super Forensic
                <strong>2022</strong>
                <span class="px-1">.</span>
                <a href="#" class="link-secondary">Forensic Digital</a>
                <span class="px-1">.</span>
                <a href="#" class="link-secondary">2022</a>
                <span class="px-1">.</span>
                <a href="#" class="link-secondary">Telkom University</a>
            </p>
          </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>