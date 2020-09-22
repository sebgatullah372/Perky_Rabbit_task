<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Carbon\Carbon;
class CustomerController extends Controller
{
    

    public function create(){
        return view('customer.create');
    }

    public function store(Request $req){
        
        $req->validate([
            'customer_name'     =>  'required',
            'email'            =>   'required|email',
            'mobile'            =>   'required',
            'image'            =>   'required'  
 
        ]);
      

        $random_number = mt_rand(100000,999999);
       

        $cust_id = substr($req->customer_name, 0,3).$random_number;

        $customer = new Customer;

        $customer->name = $req->customer_name;
        $customer->cust_id = $cust_id;
        $customer->email = $req->email;
        $customer->mobile = $req->mobile;

        $customer_image = $req->file('image');
      
        if ($customer_image) {
            $curr_time = Carbon::now();
            $image_name = hexdec(uniqid());
            $img_name = $image_name . $curr_time;
            $img_name = str_replace(" ", "_", $img_name);
            $image_name = str_replace(":", "_", $img_name);
            $ext = strtolower($customer_image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'uploads_images/customers/';
            $image_url = $upload_path . $image_full_name;
            $success = $customer_image->move($upload_path, $image_full_name);
            $customer->image = $image_url; 
         
        } 

        $customer->save();

        return redirect()->back()->with('success_msg', 'Customer Added Successfully');

        
    }
}
