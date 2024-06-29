<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $newss = News::all();
        return view('admin.shownews.index', compact('newss'));
    }

    public function create(){
        return view('admin.shownews.create');
    }

    public function store(Request $request){

        $news = new News();
        $news->title = $request->title;
        $news->news_content = $request->news_content; 
        $news->date = $request->date;

        $imageFile = $request->image; //get from input
    $imageName = time().'.'.$imageFile->getClientOriginalExtension(); // corrected method name
    $imageFile->move(public_path('upload/admin/images/news'), $imageName); // corrected path and method

    $imagePath = 'upload/admin/images/news/' . $imageName; // corrected path

    $news->image = $imagePath;
    $news->save();
        return redirect()->route('news.index');
    }

    public function edit($id) {
        $news = News::find($id); // Fetch the slide using the ID
    
        return view('admin.shownews.edit', compact('news')); // Pass the $news variable to the view
    }
    
    public function show($id) {
        $news = News::find($id); // Fetch the slide using the ID
    
        return view('admin.shownews.show', compact('news')); // Pass the $news variable to the view
    }
    

    public function update(Request $request, $id)
{
    
    // Find the news item by ID
    $news = News::find($id);

    // Update the title
    $news->title = $request->input('title');
    $news->news_content = $request->input('news_content');

    // Check if a new image file is uploaded
    if ($request->hasFile('image')) {
        $imageFile = $request->file('image'); // Get the uploaded file
        $imageName = time() . '.' . $imageFile->getClientOriginalExtension(); // Create a unique filename
        $imageFile->move(public_path('upload/admin/image/news'), $imageName); // Move the file to the desired location
        $imagePath = 'upload/admin/image/news/' . $imageName; // Create the image path
        $news->image = $imagePath; // Assign the image path to the model
    }

    // Save the updated news item
    $news->save();

    // Redirect back to the news index page with a success message
    return redirect()->route('news.index')->with('success', 'News updated successfully!');
}


    public function destroy($id){
        // Delete the slide from the database
        $news = News::find($id);
        $news->delete();
        return redirect()->route('news.index');
    }
}
