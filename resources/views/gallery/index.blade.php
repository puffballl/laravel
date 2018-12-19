@extends('layout.master')

<html>
<body>
<a href="{{ route('gallery.add_photo_form') }}" class="btn btn-primary">voeg foto toe</a>
yeet

<div class="container">

    @if($photos->count())
        @foreach($photos as $photo)
            <div class="col-sm-4 col-xs-6 col-md-3 col-lg-3">
                <a class="thumbnail fancybox" rel="ligthbox" href="/public/photos/{{ $Photos->photo }}">
                    <img class="img-responsive" alt="" src="/public/photos/{{ $photo->photo }}" />
                    <div class="text-center">
                        <small class="text-muted">{{$photo->title}}</small>
                    </div>
                </a>
            </div>
        @endforeach
    @endif

</div>

</body>
</html>
