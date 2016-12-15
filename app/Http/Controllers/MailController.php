<?php

namespace App\Http\Controllers;

use App\Notifications\InvoicePaid;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Mail\WelcomeMessage;

use Mail;

use Carbon\Carbon;

class MailController extends Controller
{
    public function index()
    {
        $when = Carbon::now()->addMinutes(1);
        $user = User::find(1);
        /*Mail::to($user->email)->queue(new WelcomeMessage($user));*/
        Mail::to($user->email)->later($when, new WelcomeMessage($user));
        return redirect()->back();
    }

    public function invoicepaid(){
        $user = User::find(1);
        $user->notify(new InvoicePaid($user));
        return redirect()->back();
    }

}
