<?php

namespace App\Http\Controllers;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Models\Stuff;
use App\Http\Requests;

class StuffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Stuff::all();
        return view('Stuff',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd($_SERVER['REMOTE_ADDR']);
        $name = $_POST['name_create'];
        $phone = $_POST['phone_create'];
        $id = $_POST['ID_create'];
        
        $post = new Stuff();
        $post->name = $name;
        $post->phone = $phone;
        $post->stu_id = $id;
        $post->save();

        return Redirect::route('Stuff');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        $name = $_POST['edit_name'];
        $phone = $_POST['edit_phone'];
        $stdid = $_POST['edit_ID'];
        $number =$_POST['edit_key'];

        $data = Stuff::find($number);
        dd($data);
        $data->name = $name;
        $data->phone = $phone;
        $data->stu_id= $stdid;

        $data->save();
        return Redirect::route('Stuff');
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Stuff::destroy($id);
       

        return Redirect::route('Stuff');
    }
}
