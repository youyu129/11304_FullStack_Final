<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <h2>Student</h2>
  <p>blade</p>            
  <a href="{{route('students.create')}}">create</a>
  {{-- 原生php --}}
<?php
// dd($data);
?>

{{-- blade --}}
@php
// dd($data);
@endphp

  <table class="table table-bordered">
    <thead>
      <tr>
        <th width="10%">ID</th>
        <th>NAME</th>
        <th>MOBILE</th>
      </tr>
    </thead>
    <tbody>
      @php
      // dd($data)
      @endphp
        @foreach($data as $value)
      <tr>
        <td>{{$value->id}}</td>
        <td>{{$value->name}}</td>
        <td>{{$value->mobile}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>


</div>

</body>
</html>








