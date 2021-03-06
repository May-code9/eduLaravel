<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Book;
use App\Content;
use App\Course;
use App\Author;
use App\Instructor;

class EditImagesController extends Controller
{
    public function instructor($id)
    {
      $instructor = Instructor::findOrFail($id);

      $activeInstructor = 'active';
      return view('admin.layouts.instructor.editImage', compact('activeInstructor', 'instructor'));
    }

    public function post_instructor(Request $request, $id)
    {
      $request->validate([
        'instructor_image' => 'required|mimes:jpeg,png|max:1000'
      ]);
      $instructor = Instructor::findOrFail($id);
      $photo = $request->file('instructor_image');
      $imagename = time().'.'.$photo->getClientOriginalExtension();

      $destinationPath = public_path('/images/instructors');
      $thumb_img = Image::make($photo->getRealPath())->resize(400, 400);
      $thumb_img->save($destinationPath.'/'.$imagename);

      $user_id = $request->input('user_id');

      $instructor->update(['instructor_image'=>$imagename, 'user_id'=>$user_id]);
      return redirect('/instructor')->with("success_status", "Instructor Image Updated");
    }
    public function content($id)
    {
      $content = Content::findOrFail($id);

      $activeContent = 'active';
      return view('admin.layouts.content.editImage', compact('activeContent', 'content'));
    }
    public function post_content(Request $request, $id)
    {
      $request->validate([
        'content_image' => 'required|mimes:jpeg,png|max:1000'
      ]);
      $content = Content::findOrFail($id);
      $photo = $request->file('content_image');
      $imagename = time().'.'.$photo->getClientOriginalExtension();

      $destinationPath = public_path('/images/content');
      $thumb_img = Image::make($photo->getRealPath())->resize(1000, 500);
      $thumb_img->save($destinationPath.'/'.$imagename);

      $user_id = $request->input('user_id');

      $content->update(['content_image'=>$imagename, 'user_id'=>$user_id]);
      return redirect('/content')->with("success_status", "Content Image Updated");
    }
    public function course($id)
    {
      $course = Course::findOrFail($id);

      $activeCourse = 'active';
      return view('admin.layouts.course.editImage', compact('activeCourse', 'course'));
    }
    public function post_course(Request $request, $id)
    {
      $request->validate([
        'course_image' => 'required|mimes:jpeg,png|max:1000'
      ]);
      $course = Course::findOrFail($id);
      $photo = $request->file('course_image');
      $imagename = time().'.'.$photo->getClientOriginalExtension();

      $destinationPath = public_path('/images/course');
      $thumb_img = Image::make($photo->getRealPath())->resize(370, 270);
      $thumb_img->save($destinationPath.'/'.$imagename);

      $user_id = $request->input('user_id');

      $course->update(['course_image'=>$imagename, 'user_id'=>$user_id]);
      return redirect('/course')->with("success_status", "Course Image Updated");
    }
    public function author($id)
    {
      $author = Author::findOrFail($id);
      $activeAuthor = 'active';
      return view('admin.layouts.author.editImage', compact('activeAuthor', 'author'));
    }
    public function post_author(Request $request, $id)
    {
      $request->validate([
        'author_image' => 'required|mimes:jpeg,png|max:1000'
      ]);
      $author = Author::findOrFail($id);
      $photo = $request->file('author_image');
      $imagename = time().'.'.$photo->getClientOriginalExtension();

      $destinationPath = public_path('/images/authors');
      $thumb_img = Image::make($photo->getRealPath())->resize(400, 400);
      $thumb_img->save($destinationPath.'/'.$imagename);

      $user_id = $request->input('user_id');

      $author->update(['author_image'=>$imagename, 'user_id'=>$user_id]);
      return redirect('/author')->with("success_status", "Author's Image Updated");
    }
    public function book($id)
    {
      $book = Book::findOrFail($id);

      $activeBooks = "active";
      return view('admin.layouts.book.editImage', compact('activeBooks', 'book'));
    }
    public function post_book(Request $request, $id)
    {
      $request->validate([
        'book_image' => 'required|mimes:jpeg,png|max:1000'
      ]);
      $book = Book::findOrFail($id);
      $photo = $request->file('book_image');
      $imagename = time().'.'.$photo->getClientOriginalExtension();

      $destinationPath = public_path('/images/books');
      $thumb_img = Image::make($photo->getRealPath())->resize(600, 600);
      $thumb_img->save($destinationPath.'/'.$imagename);

      $user_id = $request->input('user_id');

      $book->update(['book_image'=>$imagename, 'user_id'=>$user_id]);
      return redirect('/book')->with("success_status", "Book Image Updated");
    }
}
