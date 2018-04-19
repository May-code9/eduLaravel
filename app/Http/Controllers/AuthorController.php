<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use Image;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activeAuthors = "active";
        $getAuthors = Author::join('users', 'users.id', '=', 'authors.user_id')
        ->select('authors.id', 'first_name', 'last_name', 'author_name', 'about_author', 'author_image')
        ->get();
        return view('admin.layouts.author.view', compact('activeAuthors', 'getAuthors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activeAuthors = "active";
        return view('admin.layouts.author.add', compact('activeAuthors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $photo = $request->file('author_image');
      $imagename = time().'.'.$photo->getClientOriginalExtension();

      $destinationPath = public_path('/images/authors');
      $thumb_img = Image::make($photo->getRealPath())->resize(400, 400);
      $thumb_img->save($destinationPath.'/'.$imagename);

      $author = $request->all();
      $author['author_image'] = $imagename;

      Author::create($author);

      return redirect()->back()->with("success_status", "Author Added");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $author = Author::findOrFail($id);
        $activeAuthors = "active";
        return view('admin.layouts.author.edit', compact('author', 'activeAuthors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $author = Author::findOrFail($id);

      $author_name = $request->input('author_name');
      $about_author = $request->input('about_author');
      $user_id = $request->input('user_id');

      $author->update(['author_name'=>$author_name, 'about_author'=>$about_author, 'user_id'=>$user_id]);
      return redirect('/author')->with("success_status", "Author Details Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Author::destroy($id);
      return redirect('/author')->with("failure_status", "Author Moved to Trash");
    }
}
