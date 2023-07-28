<?php

namespace App\Http\Controllers;

use App\Models\DummyApi as ModelsDummyApi;
use Illuminate\Http\Request;

class DummyAPI extends Controller
{
    /***function for get all data with condition singele data */
    // public function allData($id =null){
    //  return $id?ModelsDummyApi::find($id):ModelsDummyApi::all();
    // }

    // all student data
    public function index(){

      return ModelsDummyApi::all();

    }

    // student show data
    public function show($id){

      return ModelsDummyApi::find($id);

    }

    // store user data
    public function store(Request $req){

     $req->validate([
        'name' => 'string|required',
        'email' => 'string|required',
        'phone' => 'required',
        'address' => 'string|required'
     ]);

      $data= new ModelsDummyApi();
      $data->name = $req->name;
      $data->email = $req->email;
      $data->phone = $req->phone;
      $data->address = $req->address;
      $data->save();

      return response()->json([
        'status' => 200,
        'msg'=> 'User Store Successfull'
      ]);

    }

    // update user data
    public function update(Request $req, $id){

         $data= ModelsDummyApi::find($id);
         $data->name = $req->name;
         $data->email = $req->email;
         $data->phone = $req->phone;
         $data->address = $req->address;
         $data->update();

         return response()->json([
           'status' => 200,
           'msg'=> 'User Update Successfull'
         ]);

    }
    // delete user data

    public function destroy($id){

        $data= ModelsDummyApi::find($id);
        $data->delete();

        return response()->json([
            'status' => 200,
            'msg'=> 'User Delete Successfull'
          ]);
    }

    // search data

    public function searchData($name){
        return ModelsDummyApi::where('name', $name)->get();
    }

}
