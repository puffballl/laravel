@extends('layout.master')

@section('content')
<a href="{{ route('gallery.add_photo_form') }}" class="btn btn-primary">voeg foto toe</a>
yeet

<div class="container">

    @foreach($photos as $photo)
    <div class="col-sm-4 col-xs-6 col-md-3 col-lg-3">
        <a class="thumbnail fancybox" rel="ligthbox" href="photos/{{ $photo->photo }}">
            <img class="img-responsive" alt="" src="photos/{{ $photo->photo }}"/>
            <div class="text-center">
                <small class="text-muted">{{$photo->title}}</small>
            </div>
        </a>
    </div>
    @endforeach


</div>

@endsection
