<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Providers\shoes;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    public function index()
    {
        $cart = Cart::content();
        return view('adminpage.SendEmailView', array('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }
    public function send(Request $request)
    {
        $nn = [];
        $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required|email',
            ]);
        $data = array(
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'product' => Cart::content(),
        );
        // logic save bill
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        // calculate total
        $total = strval(Cart::subtotal());

        // save bill
        $newBillID = DB::table('bill')->insertGetId(
            [
                'customerEmail' => $email,
                'customerPhone' => $phone,
                'customerAddress' => $address,
                'totalValue' => $total,
            ]
        );

        // save bill detail
        if (is_numeric($newBillID)) {
            foreach (Cart::content() as $value) {
                $order_detail = [
                    'billID' => $newBillID,
                    'shoesID' =>  $value->id,
                    'amount' => $value->qty, 
                    'money' => $value->price,
                ];
                DB::table('bill_detail')->insertGetId(
                    $order_detail
                );
            }
        }

        // send email
        Mail::to($request->input('email'))->send(new SendMail($data));

        return redirect('/thankyou');

    }
}
