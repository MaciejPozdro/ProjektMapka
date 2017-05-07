<?php

namespace App\Http\Controllers;

use App\Announcement;
use App\Http\Requests\PhotoRequest;
use App\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $photos = Photo::with('announcement')->orderBy('id','DESC')->paginate(10);
        return view('photos.index',compact('photos'));
    }
    public function create()
    {

        return view('photos.add',compact('announcement'));
    }

    public function store(PhotoRequest $request)
    {
        $photos = new Photo();

        $request->file('name')
            ->move(public_path('foto'), $request->file('name')
            ->getClientOriginalName());
        $photos->name = $request->input('name');
        $photos->name = $request->file('name')
            ->getClientOriginalName();
        $photos->save();

        return redirect(route('photos.index'));
    }

    public function edit (Photo $photo)
    {
        $announcement = Announcement::all()->pluck('address','id');
        return view('photos.edit',compact('photo','announcement'));
    }
    public function update(PhotoRequest $request, Photo $photo )
    {
        $request->file('name')
            ->move(public_path('foto'), $request->file('name')
                ->getClientOriginalName());
        $photo->announcement_id = $request->input('announcement_id');
        $photo->name = $request->file('name')
            ->getClientOriginalName();
        $photo->save();

        return redirect()->route('photos.index');
    }
    public function destroy(Photo $photo)
    {
        $photo->delete();
        return redirect()->route('photos.index');

    }

}
