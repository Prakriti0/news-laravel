<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
</head>
<body>
@if(session('status'))
{{session('status')}}
@endif
    @csrf
@if (count($data)>0)
        
<table>
    <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>Description</th>
        <th>Image</th>
        <th>Created at</th>
        <th>updated at</th>
        <th>Action</th>
    </tr>
@foreach ($data as $item)
<tr>
<td>{{$item->id}}</td>
<td>{{$item->title}}</td>
<td>{{$item->description}}</td>
<td>{{$item->image}}</td>
<td>{{$item->created_at}}</td>
<td>{{$item->updated_at}}</td>
<td><a href="{{'/edit/'.$item->id}}">edit</a> <br>
    <a href="{{'/delete/'.$item->id}}">delete</a>
</td>
</tr>   
@endforeach
    
@else
<h1>Data not found.</h1>
</table>
    
@endif
</body>
</html>