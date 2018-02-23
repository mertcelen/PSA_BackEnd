@extends('layouts.app')

@section('content')

    <span class="status"></span><br><br>
<div class="row">
    @foreach($images as $image)
        <div id="wrapper{{$indexKey}}">
            <img id="{{$image["id"]}}" src="{{$image["image"]}}" class="instagramImage rounded float-left" style="width: 170px;height: 170px;padding: 10px; border: 1px solid black">
        </div>
    @endforeach
</div>
@endsection