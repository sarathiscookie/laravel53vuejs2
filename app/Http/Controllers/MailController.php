<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Mail\WelcomeMessage;

use Mail;

class MailController extends Controller
{
    public function index()
    {
        $user = User::find(1);
        Mail::to($user->email)->queue(new WelcomeMessage($user));
        return redirect()->back();
    }

}
