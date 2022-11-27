<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{

    public function display()
    {
        return view('dashboard',['list'=>student::all()]);
    }

    function addstu(Request $req)
    {
        $req->validate([
            'name'=>'required',
            'address'=>'required',
            'contact'=>'required',
            'grade'=>'required',
            'remark'=>'required'
        ]);

        student::create([
          
            'name'=>$req->name,
            'address'=>$req->address,
            'contact'=>$req->contact,
            'grade'=>$req->grade,
            'remark'=>$req->remark
           
        ]);
      

        return redirect()->route('add');
    }
    function add(){
        return view('add');
    }

    function editv(){
        return view('edit');
    }

    public function delete($id){
        $data=student::find($id);
        $data->delete();
        return redirect()->route('dashboard');
    }

    public function editstu($id){
        $data=student::find($id);
        return view('edit',['data'=>$data]);
    }

    public function update(Request $req){

        $itemObj=student::find($req->id);
        $itemObj-> name=$req->name;
        $itemObj->address=$req->address;
        $itemObj->contact=$req->contact;
        $itemObj->grade=$req->grade;
        $itemObj->remark=$req->remark;
        $itemObj->save();
        return redirect()->route('dashboard');
    }

}
