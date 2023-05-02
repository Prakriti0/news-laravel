@extends('Layout/layout')
@section('content')
@if($errors->any())
@foreach ($errors->all() as $item)
{{$item}}
<br>
@endforeach
@endif
<form action="@if(!isset($data)){{"/savedata"}} @else {{"/update-data"}} @endif"method="POST">
  @if (isset($data)) <input type="number" name="id"  value = "{{$data->id}}" hidden> @endif
  <label for="title">Title:</label>
  <input type="text" name="title" placeholder="enter title" value=" @if(isset($data)){{$data->title }} @endif"> <br>
  <label for="image">Image:</label>
  <input type="url" name="image" placeholder="enter image url" height="250px" width="250px"value="@if(isset($data)){{$data->image}} @endif">
  <label for="desc">Description:</label>
  <input type="text" name="description" placeholder="enter desc" value="@if(isset($data)){{$data->description }} @endif">
  
  @csrf
  <button type="submit">SAVE</button>
</div>
</div>
</form>
    @endsection