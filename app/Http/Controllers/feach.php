<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class feach extends Controller
{
    //
    public function index()
    {
        $data['customers']=Customer::all();
        return view('index',$data);
    }
    function AddCustomer(Request $req)
    {

      
      $customers=new Customer;
      $customers->id=$req->input('id');
      $customers->name=$req->input('name');
      $customers->gender=$req->input('gender');
      $customers->address=$req->input('address');
      $customers->save();
      return redirect('data');
    }

    public function update(Request $req,$id)
    {

          // // dd($req->all());
          // dd($req);
          $customers = Customer::where('id',$id)->first();
     
        
      $customers->name=$req->input('name');
      $customers->gender=$req->input('gender');
      $customers->address=$req->input('address');
      $customers->save();
      return redirect('data');

      // Customer::where('id',$id)->update(['name'=>$req->name,'gender'=>$req->gender,'address'=>$req->address]);
              // return redirect('data');
      
    }

    public function edit(Request $req,$id)
    {
     
      $customers = Customer::where('id',$id)->first();
      
      return view('edit',['customers'=>$customers]);
    }

    public function delete($id)
    {
      $customers = Customer::where('id',$id)->first();
      $customers->delete();
      return redirect('data');
    }
}
