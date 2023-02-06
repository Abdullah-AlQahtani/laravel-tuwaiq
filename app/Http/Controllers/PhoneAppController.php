<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class PhoneAppController extends Controller
{


    public function index() {
         
        return view('phone.index');
    }

    public function phonesDisplay() {

        $phone = [
            ['type' =>'Iphone 14','price'=>3500 ,'color'=>'Black', 'image_link' => 'https://www.apple.com/v/iphone/home/bl/images/overview/compare/compare_iphone_13__fqzwhmfmroey_small_2x.jpg'],
            ['type' =>'Samsung','price'=>2500 ,'color'=>'White', 'image_link' => 'https://images.samsung.com/is/image/samsung/p6pim/sa_en/2208/gallery/sa-en-galaxy-z-fold4-f936-sm-f936bzadmea-thumb-533117806?$172_172_PNG$'],
            ['type' =>'Huwaui','price'=>1000 ,'color'=>'Gold', 'image_link' => 'https://m.media-amazon.com/images/I/51IbeI6BrEL._AC_.jpg']
        ];
    
         
        return view('phone.phonesdisplay', ["phone"=>$phone]);

    }

    public function oldPhones() {
         
        return view('phone.old.index');
    }


    public function getPhonesData() {

        $phones = DB::table('products')->get();

        // dd($phones);
        return view('phone.getphones', ['phones' => $phones]);

    }

    public function checkout($id) {

        $product = DB::table('products')->find($id);

        // dd($product);
        return view('checkout', ['product' => $product]);

    }

    public function getInvoice(Request $request)  {

        // dd($request);
        // echo $request->fullname;
        // echo "<br>";
        // echo $request->email;
        // echo "<br>";
        // echo $request->address;
        // echo "<br>";

        $invoice_id = rand(0,999);

        $invoice = [
            'fullname' => $request->fullname,
            'email' => $request->email,
            'address' => $request->address,
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'price' => $request->price,
            'vat' => $request->vat,
            'total' => $request->total,
            'invoice_id' => $invoice_id,
        ];



        $query = DB::table('customers_invoices')->insert([
            'name' => $request->fullname,
            'email' => $request->email,
            'address' => $request->address,
            'product_id' => $request->product_id,
            'price' => $request->price,
            'vat' => $request->vat,
            'total' => $request->total
        ]);
    
        if ($query > 0) {
            Session::flash('message', 'Invoice was created successfully!');
        } else {
            Session::flash('error', 'Invoice was not created successfully!');
            // return redirect()->back();
        }
         
        return view('invoice', ["invoice"=>$invoice]);

        
    }

    public function pay() {

    }
    
}
