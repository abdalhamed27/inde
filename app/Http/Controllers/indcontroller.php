<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;

class indcontroller extends Controller
{

 
    public function ABOUT()
{
return 	view('pages.ABOUT');
}

public function ContactUs()
{
return 	view('pages.ContactUs');
}
 
public function POSTContactUs()
{

$name=Request()->input('Name');

$phone=Request()->input('phone');

$Email=Request()->input('Email');

$Message=Request()->input('Message');
mail::to('mohamedabdhiamed2@gamil.com')->send(new ContactUs($name,$phone,$Email,$Message));
return back();
}

public function shop()
{
return 	view('pages.shop');
}



    }
