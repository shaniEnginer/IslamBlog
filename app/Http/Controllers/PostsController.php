<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    //  Returns Void
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show'] ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $post=Post::orderBy('desec');
        // $post =Post::all();
        $post = Post::orderBy('created_at','desc')->paginate(4);
        return view('posts.index')->with('myposts',$post);
        // return $post;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        // if(Auth::guest())
        // {
        //     return redirect('/login')->with('error',"Post has been Created !");
        // }

       return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);
        
        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

$post= new Post;
$post->title=$request->input('title');
$post->body=$request->input('body');
$post->User_id=auth()->user()->id;
$post->cover_image = $fileNameToStore;
$post->save();
 return redirect('/posts')->with('success',"Post has been Created !");
//   ->with('success', 'Post Created');
 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =Post::find($id);
        return view('posts.show')->with('myposts',$post);
    }

    /**kk
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $post=Post::find($id);
if(auth()->user()->id !== $post->User_id)
{
    return redirect('/posts')->with('error','Unauthorized Page !');
}
       return view('posts.edit')->with('post',$post);
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
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            // 'cover_image' => 'image|nullable|max:1999'
        ]);

$post=  Post::find($id);
$post->title=$request->input('title');
$post->body=$request->input('body');
$post->save();

 return redirect('/posts')->with('success',"Post has been updated !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $post=Post::find($id);
    $post->delete();
    return redirect('/posts')->with('error',"Post was Deleted");;
    }
}
