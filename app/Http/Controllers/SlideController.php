<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function index()
    {
        $slides = Slide::all(); // SELECT * FROM slide
        return view('admin.slideshow.index', compact('slides'));
    }

    public function create(){
        return view('admin.slideshow.create');
    }

    public function store(Request $request)
{
    $slide = new Slide;
    $slide->title = $request->title;

    $imageFile = $request->image; //get from input
    $imageName = time().'.'.$imageFile->getClientOriginalExtension(); // corrected method name
    $imageFile->move(public_path('upload/admin/images/slide'), $imageName); // corrected path and method

    $imagePath = 'upload/admin/images/slide/' . $imageName; // corrected path

    $slide->image = $imagePath;
    $slide->save();

    return redirect()->route('slide.index');
}


    public function show($id){
        return view('admin.slideshow.show');
    }

    public function edit($id)
    {
        $slide = Slide::find($id);
        return view('admin.slideshow.edit', compact('slide'));
    }

    public function update(Request $request, $id)
    {
        $slide = Slide::find($id);
        $slide->title = $request->title;

        if ($request->image != 'image') {
            $imageFile = $request->image; //get from input
            $imageName = time().'.'.$imageFile->getClientOriginalExtension(); // corrected method name
            $imageFile->move(public_path('upload/admin/image/slide'), $imageName); // corrected path and method
            $imagePath = 'upload/admin/image/slide'.$imageName;
            $slide->image = $imagePath;
        }
        $slide->save();
        return redirect()->route('slide.index');
    }

    public function destroy($id){
        // Delete the slide from the database
        $slide = Slide::find($id);
        $slide->delete();
        return redirect()->route('slide.index');
    }
}