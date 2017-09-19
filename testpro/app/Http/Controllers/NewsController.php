<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ar = DB::table('news')->get();
        // var_dump($ar);
        return view('/news/index',[
            'ar'=>$ar
            ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('news.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $va = $request->all();
        // $va = $_POST;
        $data = $request->except(['_token']);
       $res =  DB::table('news')->insert($data);
        // var_dump($res);
       if($res){
            // echo '添加成功';
            return redirect('/news');
        } else {
            // echo '添加失败';
            return redirect('/news/create');
        }

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
       $data = DB::table('news')->where('id',$id)->first();
       // echo  $data[id];
        // var_dump($data);


        return view('/news/show',['data'=>$data]);


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
       $data = DB::table('news')->where('id',$id)->first();
       // echo  $data[id];
        // var_dump($data);


        return view('/news/edit',['data'=>$data]);


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

        // echo $id;
        // $a = $request->all();
        $da = $request->except('_token','_method');
        $res = DB::table('news')->where('id',$id)->update($da);
        // var_dump($res);
        // var_dump($da);

        if($res){
            return redirect('/news');
        } else {
           return redirect('/news/'.$id.'/edit'); 
        }
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
        $res = DB::table('news')->where('id',$id)->delete();
        if($res){
            return redirect('/news');
        } else {
           return redirect('/news/'.$id.'/edit'); 
        }
    }
}
