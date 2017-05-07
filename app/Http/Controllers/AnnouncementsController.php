<?php

namespace App\Http\Controllers;

use App\Announcement;
use App\City;
use App\Http\Requests\AnnouncementRequest;
use Illuminate\Http\Request;
//announcement
class AnnouncementsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $announcements = Announcement::orderBy('id','DESC')->paginate(10);
        return view('announcements.index',compact('announcements'));
    }
    public function create()
    {
        $cities = City::all()->pluck('city_name','id');
        return view('announcements.create',compact('cities'));
    }
    public function store(AnnouncementRequest $request)
    {
        Announcement::create($request->all());
        return redirect(route('announcements.index'));
    }
    public function edit (Announcement $announcement)
    {
        $cities = City::all()->pluck('city_name','id');
        return view('announcements.edit',compact('announcement','cities'));
    }
    public function update(AnnouncementRequest $request, Announcement $announcement )
    {
        $announcement->update($request->all());
        return redirect()->route('announcements.index');
    }
    public function destroy(Announcement $announcement)
    {
        $announcement->delete();
        return redirect()->route('announcements.index');
    }
}
