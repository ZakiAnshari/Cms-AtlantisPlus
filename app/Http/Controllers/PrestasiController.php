<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasis = Prestasi::all();
        return view('admin.prestasi', ['prestasis' =>  $prestasis]);
    }

    public function add()
    {

        return view('admin.prestasi-add');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|unique:prestasis'
        ]);

        $prestasi = Prestasi::create($request->all());
        return redirect('/prestasi')->with('status','Data Prestasi berhasil ditambahkan');
    }

    public function edit($slug)
    {
        $prestasi = Prestasi::where('slug', $slug)->first();
        return view('admin.prestasi-edit', ['prestasi' => $prestasi]);
    }

    public function update(Request $request ,$slug)
    {
        $validated = $request->validate([
            'name' => 'required|unique:prestasis'
        ]);

        $prestasi = Prestasi::where('slug',$slug)->first();
        $prestasi->slug = null;
        $prestasi->update($request->all());
        return redirect('/prestasi')->with('status','Edit Prestasi berhasil ');
    }

    public function delete($slug)
    {
        $prestasi = Prestasi::where('slug', $slug)->first();
        return view('admin.prestasi-delete',['prestasi' => $prestasi]);
    }

    public function destroy($slug)
    {
        $prestasi = Prestasi::where('slug', $slug)->first();
        $prestasi->delete();
        return redirect('/prestasi')->with('status','Data Prestasi berhasil di Hapus ');
    }
}
