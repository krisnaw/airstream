<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class TestController extends Controller
{
    public function index()
    {
        return Inertia::render('Test/Show');
    }

    public function sendMail()
    {
//        Mail::to('krisna.w2010@gmail.com')->send(new TestMail());
        return redirect()->back();
    }
}
