<?php

namespace App\Http\Controllers;

use App\Models\ContactModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
    
    public function store(Request $request)
    {
        $contact = new ContactModel();

        $data = [
            'f_name'=> $request->f_name,
            'l_name'=> $request->l_name,
            'sub'=> $request->sub,
            'msg'=> $request->msg,
        ];

        $contact->insert($data);
    }
}
