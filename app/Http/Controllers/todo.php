<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todoList;

use function PHPUnit\Framework\isNull;

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
            'number'=>'required'

        ]);
        $data=new todoList();
        $data->name=$req->name;
        $data->email=$req->email;
        $data->number=$req->number;
        $req=$data->save();

        if($req){
            return back()->with('success','user register sucessfully');
            // return redirect('/');
        }
        else{
            return back()->with('failure','something is wrong');
        }
      
     
    }
    public function Add(){
        $Alldata=todoList::all();
        // print_r($Alldata);
        $All_Data=compact('Alldata');
        return view('Home')->with($All_Data);
        // return view('Home');
    }
    public function Update($id){
      
       $UpdateData=todoList::find($id);
       if(is_Null($UpdateData)){
        return redirect('/Home');
       }
       else{
        // $url=url('/Update')."/".$id;
       $pdata=compact('UpdateData');
       return view('Update')->with($pdata);
     
       }
    }
    public function newData($id,Request $request){
       
        $UpdateData=todoList::find($id);
        $UpdateData->name=$request->name;
        $UpdateData->email=$request->email;
        $UpdateData->number=$request->number;
        $request=$UpdateData->save();

        return redirect('/Home');
    }
    public function Delete($id){
       $items=todoList::find($id)->delete();
       if(!is_Null($items)){
        $items->delete();
       }
       return redirect()->back();

    //    echo $items;
    }
}
?>