@include('layouts.header')
  <title>Twitter Chat Data</title>
</head>
<body>
  @include('layouts.navbar')
  <h1 class="title-text mt-4" style="font-size: 20px;">Chat Data</h1>

  <div class="d-flex align-items-start container-fluid ms-5 mt-5">
    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="width: 400px">
        @foreach ($chat as $c)
          <button class="nav-link mt-2 nav-vertical" id="v-pills-{{ $c['ContentID'] }}-tab"  data-bs-toggle="pill" data-bs-target="#v-pills-{{ $c['ContentID'] }}" type="button" role="tab" aria-controls="v-pills-{{ $c['ContentID'] }}" aria-selected="true" style="border: 1px solid #C1C1C1;">{{ $c['ContentID'] }}</button>
        @endforeach
    </div>
    <div class="tab-content mt-3 ms-5 p-4 box" id="v-pills-tabContent" style="width: auto; max-width: 1000px;height: auto;">
      @foreach ($chat as $c)
        <div class="tab-pane fade show" id="v-pills-{{ $c['ContentID'] }}" role="tabpanel" aria-labelledby="v-pills-{{ $c['ContentID'] }}-tab">
          <h5 class="text-tab"><b>{{ $c['ContentID'] }}</b></h5>
          <hr style="border:1px solid white">
          @foreach ($c['ContentInfo'] as $cData)
            <img src="{{ $cData['imageProfile'] }}" alt="">
            <p class="text-tab">{{ $cData['username'] }}</p>    
            <p class="text-tab">{{ $cData['chatData'] }}</p>
            <hr style="border:1px solid white">              
          @endforeach
        </div>          
      @endforeach
    </div>
  </div>

@include('layouts.footer')