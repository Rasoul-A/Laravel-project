<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsOrm extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
//        return $posts= Post::all(); // DB::table('post')->get();
        /*
         * Retrieving all data
         * Retrieving single data
         * Retrieving data or throw error*/
//        $post = Post::find(34);
//        return $post->title;
//          return $post = Post::findOrFail(34);
//        $posts= Post::all();
//        foreach($posts as $post)
//        {
//            echo $post->title;
//        }
//        return Post::where('view','>',100)->where('id','<',23)->get();
//        return Post::where('view','>',100)->orWhere('id','<',23)->get();
//    }
        //Inserting data
//        $post = new Post();
//        $post->title = 'My New post Using eloquent orm';
//        $post->status = 1;
//        $post->description = 'Eloquent is a nice thing.';
//        $post->publish_date = date('Y-m-d');
//        $post->views = 500;
//        $post->save();//Will modify the created_at field also.
//          //Updating
//        $post = Post::find(23);
        $post = Post::where('id',51)->first();// ->get() will return a collection.
//        $post->title= 'This post has been updated';
//        $post->save(); //Will modify the updated_at field also.
        //Deleting
//        $post = Post::find(23)->delete();
//        $post = Post::where('id',51)->delete();
//        $post = Post::create([
//            'title'=>'new post',
//            'description'=>'not specified',
//            'status'=>0,
//            'publish_date'=>date('Y-m-d'),
//            'views'=>1
//        ]);
//        $post = Post::where('views','=',10)->update([
//            'title'=>'new post',
//            'views'=>1
//        ]);
//        Post::where('id',5)->delete();
//        return Post::all();
        //Access Trahsed data
//        return Post::onlyTrashed()->get();
        //Restore or delete permanently.
//        Post::withTrashed()->find(4)->restore();
        Post::withTrashed()->find(5)->forceDelete();
        return Post::onlyTrashed()->get();
        dd('success');

    }
}
