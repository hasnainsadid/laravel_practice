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

        $validate = $request->validate([
            'f_name' => 'required|max:10|min:4',
            'l_name' => 'required|max:10|min:4'
        ]);

        if ($validate) {
            $data = [
                'f_name'=> $request->f_name,
                'l_name'=> $request->l_name,
                'sub'=> $request->sub,
                'msg'=> $request->msg,
            ];
        }

        $contact->insert($data);

        return redirect('contact')->with('msg', '👉Thanks For Your Feedback.👈');
    }

    public function contactList()
    {
        $contacts = ContactModel::all();
        $data['messages'] = $contacts;
        return view('contactList', $data);
    }

    public function delete($id)
    {
        $contact = ContactModel::find($id);
        $contact->delete();
        return redirect('/contactlist')->with('msg', 'Deleted Successfully');
    }

    public function edit($id)
    {
        $contact = ContactModel::find($id);
        $data['single'] = $contact;
        return view('edit', $data);
    }
    public function update(Request $request, $id)
    {
        $contact = ContactModel::find($id);
        $validate = $request->validate([
            'f_name' => 'required|max:10|min:4',
            'l_name' => 'required|max:10|min:4'
        ]);

        if ($validate) {
        $data = [
            'f_name'=> $request->f_name,
            'l_name'=> $request->l_name,
            'sub'=> $request->sub,
            'msg'=> $request->msg,
        ];

            $contact->update($data);

            return redirect('/contactlist')->with('msg', 'Your data updated successfully.');
        }
    }
}
