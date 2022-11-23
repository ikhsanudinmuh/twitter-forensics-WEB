@include('layouts.header')
  <title>Twitter Chat Data</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">  
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
</head>
<body>
  @include('layouts.navbar')
  
  <div class="container">
    <h1 class="title-text mt-4" style="font-size: 20px;">Logged In User</h1>
    <center>
      <img src="{{ $data[0]['image_url'] }}" alt=""><br>
      <p><strong>User Id : </strong>{{ $data[0]['id'] }}</p>
      <p><strong>Username : </strong>{{ $data[0]['username'] }}</p>
      <p><strong>Full Name: </strong>{{ $data[0]['full_name'] }}</p>
      <p><strong>Followers: </strong>{{ $data[0]['followers'] }}</p>
    </center>
    
    <h1 class="title-text mt-4" style="font-size: 20px;">Visited User Data</h1>
    <table id="table_id" class="display">
      <thead>
          <tr>
            <th>User Id</th>
            <th>Username</th>
            <th>Full Name</th>
            <th>Followers</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($data as $d)
          <tr>
            <td>{{ $d['id'] }}</td>
            <td>{{ $d['username'] }}</td>
            <td>{{ $d['full_name'] }}</td>
            <td>{{ $d['followers'] }}</td>
          </tr>            
        @endforeach
      </tbody>
    </table>
    <br><br>
  </div>

  <script>
    $(document).ready( function () {
      $('#table_id').DataTable();
    });
  </script>
@include('layouts.footer')