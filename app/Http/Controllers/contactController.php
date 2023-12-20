<?php

namespace App\Http\Controllers;

use App\Jobs\ContactUsJob;
use App\Mail\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactController extends Controller
{
    public function show(){
        return view('contact');
    }
    public function send(){
        $data = request()->validate([
            'name' =>  'required|min:3',
            'email' => 'required|email',
            'message' => 'required|min:5',
        ]);
        // Mail::to('farhanmusyaffa093@gmail.com')->send(new ContactUs($data));
        $job = (new ContactUsJob($data));
        dispatch($job);
        // dd("sent");
        return redirect()->back()->with('success', 'pesan berhasil di kirim ✔');
    }
}
