<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    /* public function SendMail(){
        $name='Raffy';
        Mail::to('rv.vee40623@gmail.com')->send(new OrderShipped($name));

    } */

    public function sendMail(Request $request)
    {


        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'contactNumber' => $request->input('number'),
            'company' => $request->input('company'),
            'message' => $request->input('message'),
        ];
        /*  config(['mail.from.address' => $data['email']]); */


        try {
            Mail::to('rv.vee40623@gmail.com')->send(new OrderShipped($data));
            return "Email sent successfully.";
        } catch (\Exception $e) {
            return "An error occurred: " . $e->getMessage();
        }
    }
}
