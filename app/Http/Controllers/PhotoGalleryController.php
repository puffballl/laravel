<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    public function listPhotos(){
        $photos = Photo::all();
        return view('gallery.index', compact('photos'));
    }

    public function showPhotoForm(){
        return view('gallery.add_photo_form');
    }

    public function savePhotoForm(Request $request){
        $validatedData = $request->validate(
            [
                'title' => 'required',
                'description' => 'min:10',
                'photo'=>'required|image'
            ]
        );

        $targetFolder = public_path('photos');
        $fileName = str_random(16) . '.' . $validatedData['photo']->getClientOriginalExtension();

        $validatedData['photo']->move($targetFolder, $fileName);

        $photo = new Photo();
        $photo->fill([
           'title' => $validatedData['title'],
           'description' => $validatedData['description'],
           'photo' => $fileName
        ]);

        $photo->save();

        return redirect()->route('gallery.index');
    }


}
