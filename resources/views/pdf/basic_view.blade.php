<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
    <style type="text/css">
    table,td,table,th
    {
        border: 1px solid black;
    }

</style>
</head>
<body>

<div class="container">
  <a href="{{URL::route('basic_view',['download'=>'pdf'])}}"> Download PDF</a>
  <table class="table table-bordered ">
    <tr>
        <th>No </th>
        <th>Name</th>
        <th>Email</th>
    </tr>
    @foreach ($items as $key=> $item)
    <tr>
        <td>{{++$key}}</td>
        <td>{{$item->ma_nv}}</td>
        <td>{{$item->hoten_nv}}</td>
    </tr>
    @endforeach
</table>
</div>
</body>
</html>
