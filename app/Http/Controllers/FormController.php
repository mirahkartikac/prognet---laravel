<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //mengambil semua data di model (tabel) form
        $data = Form::all();
        return view('formlist',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //perintahkan view untuk menampilkan form baru
        return view('formnew');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form = new Form();
        $form->nama=$request->nama;
        $form->alamat=$request->alamat;
        $form->telepon=$request->telepon;
        $form->gender=$request->gender;
        $form->umur=$request->umur;
        $form->tanggalLahir=$request->tanggalLahir;
        $form->save();
        return redirect('form');

    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Form $form)
    {
        return view('formedit', compact('form'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Form $form)
    {
        $form->nama = $request->nama;
        $form->alamat = $request->alamat;
        $form->telepon = $request->telepon;
        $form->gender = $request->gender;
        $form->umur = $request->umur;
        $form->tanggalLahir = $request->tanggalLahir;
        $form->save();
        return redirect('form');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        //untuk menghapus data
        $form->delete();
        return redirect('form');

    }
}
