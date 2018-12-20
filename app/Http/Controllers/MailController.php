<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Mailtrap;

class MailController extends Controller
{
    public function index(){
    	Mail::to('mailtrap@mailtrap.com')->send(new Mailtrap());
    }
}
