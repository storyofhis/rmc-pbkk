<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function input()
    {
        return view('input');
    }
 
    public function proses(Request $request)
    {
        $messagesError = [
            'required' => ':attribute ini wajib diisi!!',
            'min' => ':attribute harus diisi minimal :min karakter!!!',
            'max' => ':attribute harus diisi maksimal :max karakter!!!',
        ];
        
        // $this->validate($request,[
        //     'nama' => 'required|min:5|max:20',
        //     'pekerjaan' => 'required',
        //     'usia' => 'required|numeric'
        // ],$messagesError);
        $this->validate($request,[
            'nama' => ['required', 'min:6', 'max:20'],
            'pekerjaan' => ['required','min:2'],
            'usia' => ['required', 'numeric']
       ]);
 		
        return view('proses',['data' => $request]);
    }
}
