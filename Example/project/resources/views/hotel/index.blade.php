<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
           
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name's Hotel</th>
        <th>Address</th>
        <th>Room is empty</th>
        <th ></th>
      </tr>
    </thead>
    <tbody>
      {{-- @foreach ($hotelList as $hotel) --}}
      <tr>
        {{-- <td>{{$hotel['hotelName']}}</td> --}}
        {{-- <td>{{$hotel['address']}}</td> --}}
        <td>10</td>
        <td> <button type="button" class="btn btn-info"> <a style="color: white" href="detail">Detail</a> </button>
        </td>
      </tr>
      {{-- @endforeach --}}
    </tbody>
  </table>
  <a href="" class="btn btn-success"> Input </a>

</div>

</body>
</html>
