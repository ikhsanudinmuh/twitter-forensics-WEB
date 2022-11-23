@include('layouts.header')
  <title>Device Data</title>
</head>
<body>
  @include('layouts.navbar')

  <div class="container-fluid">
    @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif  
    <main>
      <!-- Section 1 -->
      <div class="row" id="main-section">
        <div class="col">
          <img class="ps-5" style="margin-top:-110px; height: 630px;" src="assets/iPhone 11 Pro.png">
          <div class="row pt-3 ms-5" style="width: 260px;">
            <p class="text-center"  style="font-weight: 600;">{{ $data[0]['model'] }}</p>
          </div>
        </div>
        <div class="col ps-4 pt-4 mt-5 box">
          <h5 class="title-text pb-3" style="font-size:18px;color: white;">Device Data</h5>
          <div class="d-flex justify-content-start box-phone ps-4 pt-3 mb-2">
            <p class="text-center ms-3"  style="font-weight: 600;">Serial Number : </p> {{ $data[0]['id'] }}
          </div>
          <div class="d-flex justify-content-start box-phone ps-4 pt-3 mb-2">
            <p class="text-center ms-3"  style="font-weight: 600;">Model : </p> {{ $data[0]['model'] }}
          </div>
          <div class="d-flex justify-content-start box-phone ps-4 pt-3 mb-2">
            <p class="text-center ms-3"  style="font-weight: 600;">Product : </p> {{ $data[0]['product'] }}
          </div>
          <div class="d-flex justify-content-start box-phone ps-4 pt-3 mb-2">
            <p class="text-center ms-3"  style="font-weight: 600;">SDK : </p> {{ $data[0]['sdk'] }}
          </div>
          <div class="d-flex justify-content-start box-phone ps-4 pt-3 mb-2">
            <p class="text-center ms-3"  style="font-weight: 600;">Operator : </p> {{ $data[0]['operator'] }}
          </div>
          <div class="d-flex justify-content-start box-phone ps-4 pt-3 mb-2">
            <p class="text-center ms-3"  style="font-weight: 600;">SELinux : </p> {{ $data[0]['SELinux'] }}
          </div>
          <div class="d-flex justify-content-start box-phone ps-4 pt-3 mb-2">
            <p class="text-center ms-3"  style="font-weight: 600;">Timezone : </p> {{ $data[0]['timezone'] }}
          </div>
          <div class="d-flex justify-content-start box-phone ps-4 pt-3 mb-2">
            <p class="text-center ms-3"  style="font-weight: 600;">Security Patch : </p> {{ $data[0]['security_patch'] }}
          </div>
          <div class="d-flex justify-content-start box-phone ps-4 pt-3 mb-2">
            <p class="text-center ms-3"  style="font-weight: 600;">API Level : </p> {{ $data[0]['api_level'] }}
          </div>
          {{-- @if ($data[0]['network'] == null)
            <div class="d-flex justify-content-start box-phone ps-4 pt-3 mb-2">
              <p class="text-center ms-3"  style="font-weight: 600;">Network : </p> {{ $data[0]['network']['ssid'] }}
            </div>              
          @endif --}}
          <div class="d-flex justify-content-start box-phone ps-4 pt-3 mb-2">
            <p class="text-center ms-3"  style="font-weight: 600;">Battery : </p> {{ $data[0]['battery']['level'] }}%
          </div>
          <div class="d-flex justify-content-start box-phone ps-4 pt-3 mb-2">
            <p class="text-center ms-3"  style="font-weight: 600;">Screen : </p> {{ $data[0]['screen']['width'] }} x {{ $data[0]['screen']['height'] }}
          </div>
          <center>
            <button class="btn btn-success"><a style="text-decoration: none; color:white" href="/twitter/{{ $data[0]['id'] }}">pull twitter</a></button>
          </center>
        </div>
      </div>
      <div class="row mt-5">
        <hr>
      </div>
    </main>
  </div>

@include('layouts.footer')