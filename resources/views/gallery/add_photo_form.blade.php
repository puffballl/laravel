@extends('layout.master')

<div class="container">
<form action="{{route('gallery.save_photo_form')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Titel: </label>
        <input type="text" name="title" class="form-control">
        @if($errors->has('title'))
            <p class="text-danger">{{$errors->first('title')}}</p>
        @endif

    </div>
    <div class="form-group">
        <label for="">Omschrijving: </label>
        <textarea type="text" name="description" class="form-control" rows="10" cols="30"></textarea>
        @if($errors->has('description'))
            <p class="text-danger">{{$errors->first('description')}}</p>
        @endif
    </div>
    <div class="form-group">
        <label for="">file: </label>
        <input type="file" name="photo">
        @if($errors->has('photo'))
            <p class="text-danger">{{$errors->first('photo')}}</p>
        @endif
    </div>
    <input type="submit" class="btn btn-success" value="yeet het er in">
</form>
</div>
