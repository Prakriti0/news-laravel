<?php

namespace App\Http\Controllers;
use App\Models\headlines;
use Illuminate\Http\Request;

class logi extends Controller
{
    public function save(Request $req) {
        $data=headlines::all();
        $req->validate([
            'title'=>"required|max:225",
            'description'=>'required',
            'image'=>'required'
        ]);
        $new = new headlines(); //modelname
        $new->title=$req->title;
        $new->description=$req->description;
        $new->image=$req->image;
        if($new->save()){
            return redirect('welcome');
        }
        else{
            return "not success";
        }
    }
    public function index(){
        $data = headlines::all(); //all()-> SELECT *from table_name
        return view('./Layout/table',['data'=>$data]);
    }

    public function edit($id){
        $data = headlines::find($id); // find($id) = select *from model where('id'=$id)
        return view('welcome',['data'=>$data]);
    }

    public function update(Request $req) {
        $update= headlines::find($req->id);
        $update->title=$req->title;
        $update->description=$req->description;
        $update->image=$req->image;
        if($update->save()){
            return redirect('/table');
        }
        else
        {
            return "failed";
        }

    }

    public function delete($id){
        $data = headlines::find($id); // find($id) = select *from model where('id'=$id)
        if($data->delete()){
            return back()->with("status","successfully deleted");
        }
    }
}
