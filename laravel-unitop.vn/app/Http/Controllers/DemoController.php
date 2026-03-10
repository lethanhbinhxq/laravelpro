<?php

namespace App\Http\Controllers;
use Exception;

use App\Http\Controllers\Controller;
use App\Mail\DemoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DemoController extends Controller
{
    //
    function sendMail()
    {
        try {
            $data = [
                'key1' => "value1"
            ];
            Mail::to('binhlethanh623@gmail.com')->send(new DemoMail($data));
            return "Mail sent successfully";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    function viewMail() {
        return view('mails.demo');
    }
}
