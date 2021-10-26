<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function index() {
        //get blog posts
        $blogPosts = BlogPost::where('is_deleted', '=', false)->latest()->get();

        return view('frontend.articles-knowledge', compact('blogPosts'));
    }

    public function viewBlogPost($blogPostId) {
        //get blog post
        $blogPost = BlogPost::where('id', '=', $blogPostId)->first();

        //recent blog posts
        $recentBlogPosts = BlogPost::where(
            [
                ['is_deleted', '=', false],
                ['id', '!=', $blogPostId],
            ]
        )->take(5)->latest()->get();

        return view('frontend.view-blog-post', compact('blogPost', 'recentBlogPosts'));
    }

    public function viewBlogPosts() {
        //get blog posts
        $blogPosts = BlogPost::where('is_deleted', '=', false)->get();
        return view('superAdmin.view-blog-posts', compact('blogPosts'));
    }

    public function addBlogForm() {
        return view('superAdmin.add-update-blog-post');
    }

    public function upload(Request $request) {
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('upload')->storeAs('public/uploads', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }
    }

    public function saveBlog(Request $request) {
        $request->validate([
            'file' => 'sometimes|file|mimetypes:image/jpeg,image/jpega,image/png,image/pnga|max:10000',
            'title' => 'required|min:10',
        ]);

        $BlogPost = new BlogPost();

        if($request->file) {
            $fileName = $request->file->getClientOriginalName().time().'.'.$request->file->getClientOriginalExtension();
            $request->file->move('uploads_78asd6as7d6asb', $fileName);
            $BlogPost->image = $fileName;
        }

        $BlogPost->title = $request->title;
        $BlogPost->post_content = $request->post_content;
        $BlogPost->save();

        return redirect('/superAdmin/view-blog-posts')->with('status', 'The blog post has been published successfully.');
    }

    public function updateBlogPostForm($blogPostId) {
        $blogPost = BlogPost::where([
            ['id','=',$blogPostId]
        ])->first();

        return view('superAdmin.add-update-blog-post', compact('blogPost'));
    }

    public function updateBlogPost(Request $request, $blogPostId) {
        $request->validate([
            'file' => 'sometimes|file|mimetypes:image/jpeg,image/jpega,image/png,image/pnga|max:10000',
            'title' => 'required|min:10',
        ]);

        $booking = BlogPost::where([
            ['id','=',$blogPostId]
        ])->first();

        $imageUpdated = false;
        if($request->hasFile('file')){
            $oldImageFile = $booking->image;
            $fileName = $request->file->getClientOriginalName().time().'.'.$request->file->getClientOriginalExtension();
            $request->file->move('uploads_78asd6as7d6asb', $fileName);
            $booking->image = $fileName;
            $imageUpdated = true;
        }

        $booking->title = $request->title;
        $booking->post_content = $request->post_content;
        $booking->save();

        //delete old image file
        if($imageUpdated) {
            File::delete('uploads_78asd6as7d6asb/' . $oldImageFile);
        }

        return redirect('/superAdmin/view-blog-posts')->with('status', 'The blog post has been updated successfully.');
    }

    public function deleteBlogPost($blogPostId) {
        //get blog post
        $blogPost = BlogPost::where('id', '=', $blogPostId)->first();
        $blogPost->is_deleted = 1;
        $blogPost->save();

        return redirect('/superAdmin/view-blog-posts')->with('status', 'The blog post has been deleted successfully.');
    }
}
