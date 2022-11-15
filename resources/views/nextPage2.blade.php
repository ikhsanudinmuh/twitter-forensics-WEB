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
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="width: 400px;">
                <h1 class="title-text" style="font-size: 20px;">Choose What to Extract</h1>
                <button class="nav-link active mt-2 nav-vertical" id="v-pills-1-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-1" type="button" role="tab" aria-controls="v-pills-1" aria-selected="true" style="border: 1px solid #C1C1C1;">Account info</button>
                <button class="nav-link mt-2 nav-vertical" id="v-pills-2-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-2" type="button" role="tab" aria-controls="v-pills-2" aria-selected="false" style="border: 1px solid #C1C1C1;">Twitter ID</button>
                <button class="nav-link mt-2 nav-vertical" id="v-pills-3-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-3" type="button" role="tab" aria-controls="v-pills-3" aria-selected="false" style="border: 1px solid #C1C1C1;">Friends</button>
                <button class="nav-link mt-2 nav-vertical" id="v-pills-4-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-4" type="button" role="tab" aria-controls="v-pills-4" aria-selected="false" style="border: 1px solid #C1C1C1;">Followers/Following</button>              
                <button class="nav-link mt-2 nav-vertical" id="v-pills-5-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-5" type="button" role="tab" aria-controls="v-pills-5" aria-selected="false" style="border: 1px solid #C1C1C1;">Direct Messages</button>
                <button class="nav-link mt-2 nav-vertical" id="v-pills-6-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-6" type="button" role="tab" aria-controls="v-pills-6" aria-selected="false" style="border: 1px solid #C1C1C1;">Likes</button>
                <button class="nav-link mt-2 nav-vertical" id="v-pills-7-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-7" type="button" role="tab" aria-controls="v-pills-7" aria-selected="false" style="border: 1px solid #C1C1C1;">Tweets</button>
                <button class="nav-link mt-2 nav-vertical" id="v-pills-8-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-8" type="button" role="tab" aria-controls="v-pills-8" aria-selected="false" style="border: 1px solid #C1C1C1;">URL</button>
                <button class="nav-link mt-2 nav-vertical" id="v-pills-9-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-9" type="button" role="tab" aria-controls="v-pills-9" aria-selected="false" style="border: 1px solid #C1C1C1;">Date of Birth</button>              
                <button class="nav-link mt-2 nav-vertical" id="v-pills-10-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-10" type="button" role="tab" aria-controls="v-pills-10" aria-selected="false" style="border: 1px solid #C1C1C1;">Bio</button>
                <button class="nav-link mt-2 nav-vertical" id="v-pills-11-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-11" type="button" role="tab" aria-controls="v-pills-11" aria-selected="false" style="border: 1px solid #C1C1C1;">Picture</button>
                <button class="nav-link mt-2 nav-vertical" id="v-pills-12-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-12" type="button" role="tab" aria-controls="v-pills-12" aria-selected="false" style="border: 1px solid #C1C1C1;">Delete Messages/Tweets</button>


            </div>
            <div class="tab-content mt-3 ms-5 p-4 box text-center" id="v-pills-tabContent" style="width: 800px;height: 600px;overflow-y: hidden;">
                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                    <!-- contoh data aja  -->
                    <img class="ps-5" style="margin-top:-90px; height: 630px;" src="../public/assets/iPhone 11 Pro white.png">
                </div>
                <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                    <img class="ps-5" style="margin-top:-90px; height: 630px;" src="../public/assets/iPhone 11 Pro white.png">
                </div>
                <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                    <img class="ps-5" style="margin-top:-90px; height: 630px;" src="../public/assets/iPhone 11 Pro white.png">
                </div>
                <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                    <img class="ps-5" style="margin-top:-90px; height: 630px;" src="../public/assets/iPhone 11 Pro white.png">
                </div>
                <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
                    <img class="ps-5" style="margin-top:-90px; height: 630px;" src="../public/assets/iPhone 11 Pro white.png">
                </div>
                <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
                    <img class="ps-5" style="margin-top:-90px; height: 630px;" src="../public/assets/iPhone 11 Pro white.png">
                </div>
                <div class="tab-pane fade show active" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">
                    <!-- contoh data aja  -->
                    <img class="ps-5" style="margin-top:-90px; height: 630px;" src="../public/assets/iPhone 11 Pro white.png">
                </div>
                <div class="tab-pane fade" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-8-tab">
                    <img class="ps-5" style="margin-top:-90px; height: 630px;" src="../public/assets/iPhone 11 Pro white.png">
                </div>
                <div class="tab-pane fade" id="v-pills-9" role="tabpanel" aria-labelledby="v-pills-9-tab">
                    <img class="ps-5" style="margin-top:-90px; height: 630px;" src="../public/assets/iPhone 11 Pro white.png">
                </div>
                <div class="tab-pane fade" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10-tab">
                    <img class="ps-5" style="margin-top:-90px; height: 630px;" src="../public/assets/iPhone 11 Pro white.png">
                </div>
                <div class="tab-pane fade" id="v-pills-11" role="tabpanel" aria-labelledby="v-pills-11-tab">
                    <img class="ps-5" style="margin-top:-90px; height: 630px;" src="../public/assets/iPhone 11 Pro white.png">
                </div>
                <div class="tab-pane fade" id="v-pills-12" role="tabpanel" aria-labelledby="v-pills-12-tab">
                    <img class="ps-5" style="margin-top:-90px; height: 630px;" src="../public/assets/iPhone 11 Pro white.png">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <div></div>
            <button class="btn btn-dark header-text" ><a href="#" class="button-text">Done</a></button>
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