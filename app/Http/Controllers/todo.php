<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todoList;
// use Illuminate\Support\Facades\Session;
class todo extends Controller
{
    public function index(){
      
      return view('welcome');
      $Alldata=todoList::all();
      print_r($Alldata);
      $All_Data=compact('Alldata');
      return view('welcome')->with($All_Data);
    }
    public function data(Request $req){
        $req->validate([
            'name'=>'required|string',
            'email'=>'required|email',
            'number'=>'required|max:10'

        ]);
        $data=new todoList();
        $data->name=$req->name;
        $data->email=$req->email;
        $data->number=$req->number;
        $req=$data->save();
        if($req){
            return back()->with('success','user register sucessfully');
        }
        else{
            return back()->with('failure','something is wrong');
        }
      
      $Alldata=todoList::all();
      print_r($Alldata);
      $All_Data=compact('Alldata');
      return view('welcome')->with($All_Data);
    }
}
