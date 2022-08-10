<?php

namespace App\Http\Controllers;
use App\Models\result;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
     public function index(){         
        return view("home",["results" =>result::all()]);

     }
    public function store(Request $req){
        $req->validate([
            "name" => "required",
            "contact" => "required|size:10",
            "email" => "required",
            "maths" => "required|integer",
            "sci" => "required|integer",
            "sst" => "required|integer",
            "hindi" => "required|integer",
            "eng" => "required|integer",
        ]);

       $reg = new result();
       $reg->name = $req->name;
       $reg->contact = $req->contact;
       $reg->email = $req->email;
       $reg->maths = $req->maths;
       $reg->sci = $req->sci;
       $reg->sst = $req->sst;
       $reg->hindi = $req->hindi;
       $reg->eng = $req->eng;
       $reg->save();
      return redirect()->route("homepage")->with("msg","data inserted successfully");

    }
    public function destroy($r_id){
        $data = result::find($r_id);
        $data->delete();
        return redirect()->route("homepage")->with("msg","data deleted successfully");
    }
    public function view($id){
        $result = result::find($id);
        return view("view",["result"=>$result]);
    }
    public function search(Request $req){
        $id = $req->search;
       return $this->view($id);
    }
    public function edit($r_id){
        return view ("edit",["result"=>Result::find($r_id)]);
    }
    public function update(Request $req,$r_id){
        $req->validate([
            "name" => "required",
            "contact" => "required|size:10",
            "email" => "required",
            "maths" => "required|integer",
            "sci" => "required|integer",
            "sst" => "required|integer",
            "hindi" => "required|integer",
            "eng" => "required|integer",
        ]);
        $reg = Result::find($r_id);
        $reg->name = $req->name;
        $reg->contact = $req->contact;
        $reg->email = $req->email;
        $reg->maths = $req->maths;
        $reg->sci = $req->sci;
        $reg->sst = $req->sst;
        $reg->hindi = $req->hindi;
        $reg->eng = $req->eng;
        $reg->save();
        return redirect()->route("Homepage")->with("msg","data updated successfully");
    }
}
