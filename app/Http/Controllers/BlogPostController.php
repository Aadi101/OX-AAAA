<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\category_age_group;
use App\category;
use Illuminate\Http\Request;
use App\Http\Resources\PostCollection;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lol = category_age_group::where(["category_id"=>1])->get();
        dd($lol);

        // $posts = BlogPost::all();
            //dd($posts);
            //return response(['post'=>$posts]);

        // return response()->json(['blogpost' => $posts]);
            //return new PostCollection(BlogPost::all());
            //return BlogPost::latest()->paginate(10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new BlogPost([
            'title' => $request->get('title'),
            'category' => $request->get('category'),
            'age' => $request->get('age'),
            'description' => $request->get('description'),
        ]);

        //dd($post);

        $post->save();

        return response()->json('successfully added!');
        //return redirect('/blogpost');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $post = BlogPost::find($id);
        return response()->json($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = BlogPost::find($id);
        $post->update($request->all());

        return response()->json('updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BlogPost  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $post = BlogPost::find($id);
       // dd($id);
        $post->delete();
		//sudu manike mage raththran
        return response()->json('deleted!');
    }
}
