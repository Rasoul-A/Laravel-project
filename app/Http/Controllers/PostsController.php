<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return DB::table('posts')->get();
//         return  DB::table('posts')->find(3);
//         return DB::table('posts')->first();
//        return DB::table('posts')->pluck('title','id');
//        return DB::table('posts')->where('id','>',10)->where('id',12)
//            ->get();
//        DB::table('posts')->insert([
//            [
//            'title'=>"rasoul",
//            'description'=>"loxvxdnvsvnslnslldvnl",
//            'status'=>1,
//            'publish_date'=>date('Y-m-d')
//        ],
//            [
//                'title'=>"rasoul2",
//                'description'=>"loafsfaxvxdnvsvnslnslldvnl",
//                'status'=>0,
//                'publish_date'=>date('Y-m-d')
//            ]
//        ]);
//        DB::table('posts')->where('id',2)->update([
//                'title'=>"rasoul",
//                'description'=>"loxvxdnvsvnslnslldvnl",
//                'status'=>1,
//                'publish_date'=>date('Y-m-d')
//            ]);
//        DB::table('posts')->where('id',2)->delete();
        /*
         * Aggregation
         * max()
         * min()
         * avg()
         * sum()
         * count()*/
//        return DB::table('posts')->count();
//        return DB::table('posts')->sum('views');
        DB::table('posts')->join('users','posts.id','=','users.id')
            ->select('posts.*')->get();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
