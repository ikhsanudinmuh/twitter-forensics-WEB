<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <!-- NAVBAR --> 
        <nav class="navbar navbar-expand-lg container-fluid" style="z-index: 8;background-color:#013654;padding-top: 13px;padding-bottom: 13px;">
            <div class="container-fluid">
                <img src="../public/assets/logo.png" style="padding-right: 40px;padding-left: 40px;width: 200px;">
                <div class="d-flex d-sm-block d-md-none">
                    <button style="border:none" class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header" style="background-color:#013654">
                            <img src="../public/assets/logo.png">
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
    </header>
    <main>
        <!-- Section 1 -->
        <div class="d-flex align-items-start container-fluid ms-5 mt-5">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="width: 400px">
                <h1 class="title-text" style="font-size: 20px;">Choose What to Extract</h1>
                <button class="nav-link active mt-2 nav-vertical" id="v-pills-one-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-one" type="button" role="tab" aria-controls="v-pills-one" aria-selected="true" style="border: 1px solid #C1C1C1;">Specify selection</button>
                <button class="nav-link mt-2 nav-vertical" id="v-pills-two-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-two" type="button" role="tab" aria-controls="v-pills-two" aria-selected="false" style="border: 1px solid #C1C1C1;">Full content</button>
                <button class="nav-link mt-2 nav-vertical" id="v-pills-three-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-three" type="button" role="tab" aria-controls="v-pills-three" aria-selected="false" style="border: 1px solid #C1C1C1;">Application analysis</button>
                <button class="nav-link mt-2 nav-vertical" id="v-pills-four-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-four" type="button" role="tab" aria-controls="v-pills-four" aria-selected="false" style="border: 1px solid #C1C1C1;">Disconnect phone</button>              
                <button class="nav-link mt-2 nav-vertical" id="v-pills-five-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-five" type="button" role="tab" aria-controls="v-pills-four" aria-selected="false" style="border: 1px solid #C1C1C1;">Device info only</button>
                <button class="nav-link mt-2 nav-vertical" id="v-pills-six-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-six" type="button" role="tab" aria-controls="v-pills-four" aria-selected="false" style="border: 1px solid #C1C1C1;">Parental chek</button>
                <div class="d-flex justify-content-between pt-3">
                    <button class="btn btn-link text-box pb-3 btn-tab mt-2" style="color: #013654;font-size: 15px;"><img class="me-3" src="../public/assets/Vector-blue.png" width="25px"> Load report configuration</button>
                    <img class="mt-2" src="../public/assets/Group 9.png" width="35px" height="35px">
                </div>
            </div>
            <div class="tab-content mt-3 ms-5 p-4 box" id="v-pills-tabContent" style="width: 800px;height: 360px;">
                <div class="tab-pane fade show active" id="v-pills-one" role="tabpanel" aria-labelledby="v-pills-one-tab">
                    <!-- contoh data aja  -->
                    <h5 class="text-tab"><b>Twitter 1</b></h5>
                    <hr style="border:3px solid white">
                    <p class="text-tab">Login Twitter Account (ID : @wadieq)</p>    
                    <p class="text-tab">- Email : mohd.najwadi@gmail.com</p>
                    <p class="text-tab">- Password : najwadi87 </p>
                    <hr style="border:1px solid white">
                    <p class="text-tab">Login Twitter Account (ID : @wadieq)</p>    
                    <p class="text-tab">- Email : mohd.najwadi@gmail.com</p>
                    <p class="text-tab">- Password : najwadi87 </p>
                </div>
                <div class="tab-pane fade" id="v-pills-two" role="tabpanel" aria-labelledby="v-pills-two-tab">
                    <h5 class="text-tab"><b>Twitter 2</b></h5>
                    <hr style="border:3px solid white">
                    <p class="text-tab">Login Twitter Account (ID : @wadieq)</p>    
                    <p class="text-tab">- Email : mohd.najwadi@gmail.com</p>
                    <p class="text-tab">- Password : najwadi87 </p>
                    <hr style="border:1px solid white">
                    <p class="text-tab">Login Twitter Account (ID : @wadieq)</p>    
                    <p class="text-tab">- Email : mohd.najwadi@gmail.com</p>
                    <p class="text-tab">- Password : najwadi87 </p>
                </div>
                <div class="tab-pane fade" id="v-pills-three" role="tabpanel" aria-labelledby="v-pills-three-tab">
                    <h5 class="text-tab"><b>Twitter 3</b></h5>
                    <hr style="border:3px solid white">
                    <p class="text-tab">Login Twitter Account (ID : @wadieq)</p>    
                    <p class="text-tab">- Email : mohd.najwadi@gmail.com</p>
                    <p class="text-tab">- Password : najwadi87 </p>
                    <hr style="border:1px solid white">
                    <p class="text-tab">Login Twitter Account (ID : @wadieq)</p>    
                    <p class="text-tab">- Email : mohd.najwadi@gmail.com</p>
                    <p class="text-tab">- Password : najwadi87 </p>
                </div>
                <div class="tab-pane fade" id="v-pills-four" role="tabpanel" aria-labelledby="v-pills-four-tab">
                    <h5 class="text-tab"><b>Twitter 4</b></h5>
                    <hr style="border:3px solid white">
                    <p class="text-tab">Login Twitter Account (ID : @wadieq)</p>    
                    <p class="text-tab">- Email : mohd.najwadi@gmail.com</p>
                    <p class="text-tab">- Password : najwadi87 </p>
                    <hr style="border:1px solid white">
                    <p class="text-tab">Login Twitter Account (ID : @wadieq)</p>    
                    <p class="text-tab">- Email : mohd.najwadi@gmail.com</p>
                    <p class="text-tab">- Password : najwadi87 </p>
                </div>
                <div class="tab-pane fade" id="v-pills-five" role="tabpanel" aria-labelledby="v-pills-five-tab">
                    <h5 class="text-tab"><b>Twitter 5</b></h5>
                    <hr style="border:3px solid white">
                    <p class="text-tab">Login Twitter Account (ID : @wadieq)</p>    
                    <p class="text-tab">- Email : mohd.najwadi@gmail.com</p>
                    <p class="text-tab">- Password : najwadi87 </p>
                    <hr style="border:1px solid white">
                    <p class="text-tab">Login Twitter Account (ID : @wadieq)</p>    
                    <p class="text-tab">- Email : mohd.najwadi@gmail.com</p>
                    <p class="text-tab">- Password : najwadi87 </p>
                </div>
                <div class="tab-pane fade" id="v-pills-six" role="tabpanel" aria-labelledby="v-pills-six-tab">
                    <h5 class="text-tab"><b>Twitter 6</b></h5>
                    <hr style="border:3px solid white">
                    <p class="text-tab">Login Twitter Account (ID : @wadieq)</p>    
                    <p class="text-tab">- Email : mohd.najwadi@gmail.com</p>
                    <p class="text-tab">- Password : najwadi87 </p>
                    <hr style="border:1px solid white">
                    <p class="text-tab">Login Twitter Account (ID : @wadieq)</p>    
                    <p class="text-tab">- Email : mohd.najwadi@gmail.com</p>
                    <p class="text-tab">- Password : najwadi87 </p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div></div>
            <button class="btn btn-dark header-text" ><a href="./nextPage2.blade.html" class="button-text">Next</a></button>
        </div>
        <div class="row">

            <img src="../public/assets/Group 12.png">
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