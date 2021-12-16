<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class myController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $emp = DB::table('employee')->get();
        return view('myapp',['emp'=>$emp]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('employee')->insert(
            [
                'name' => $request->get('name'),
                'position' => $request->get('position'),
                'salary' => $request->get('salary'),
            ]
        );
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('employee')
                ->where('id',$id)
                ->first();
                // select * from employee where id = $id
        return view('edit',['data'=>$data]);
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
        DB::table('employee')->where('id',$id)->update(
            [
                'name' => $request->get('name'),
                'position' => $request->get('position'),
                'salary' => $request->get('salary'),
            ]
        );
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('employee')->where('id',$id)->delete();
        return redirect('/');
    }
}
