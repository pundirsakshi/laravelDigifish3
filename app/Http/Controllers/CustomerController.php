<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    function AddCustomer(Request $req)
    {
      $customers=new Customer;
      echo $req;
      $customers->id=$req->input('id');
      $customers->name=$req->input('name');
      $customers->gender=$req->input('gender');
      $customers->address=$req->input('address');
      $customers->save();
      return redirect('data');
    }
   
}


