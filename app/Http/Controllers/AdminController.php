<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

use App\Models\Post;

class AdminController extends Controller
{
    /*
    public function index(){
        if(Auth::id()){
            $usertype = Auth::user()->usertype;

            if($usertype == 'user'){
                return view('dashboard');
            }

            if($usertype == 'admin'){
                return view('admin.index');
            }

            else{
                return redirect()->back();
            }
            
        }
    }
    */
    
    public function post_page(){
        return view('admin.post_page');
    }

    public function add_post(Request $request){
        $post = new Post;

        $user = Auth::user();

        $post->user_id = $user->id;
        $post->name= $user->name;
        $post->usertype = $user->usertype;

        $post->title = $request->title;
        $post->description = $request->description;
        $post->post_status = 'active';
        //////////
        $image=$request->image;

        //En el caso de que la imagen sea true va a pasar a la condicional if
        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension(); // Esto ayuda a que no se sobreescriba cada vez que se quiere agregar cada imagen
            $request->image->move('postimage',$imagename);
            $post->image=$imagename;
        }

        $post->save();
        return redirect()->back()->with('message','Post Added Successfully');
    }


    public function show_post(){
        $post = Post::all();
        
        

        return view('admin.show_post',compact('post'));
    }
    
}
