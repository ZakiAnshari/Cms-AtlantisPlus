<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teacher',['teachers' => $teachers]);
    }

    public function add()
    {
        
        return view('admin.teacher-add');
    }

    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'name' => 'required|unique:teachers'
        ]);

        $newName = '';
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover',$newName);
        }

        $request['cover'] = $newName;
        $teacher = Teacher::create($request->all());
        return redirect('teacher')->with('status','Data Teacher Berhasil Ditambahkan');
    }

    public function edit($slug)
    {
        $teacher = Teacher::where('slug', $slug)->first();
        return view('admin.teacher-edit', ['teacher' => $teacher]);
    }

    public function update(Request $request ,$slug)
    {
        $newName = '';
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover',$newName);
        }

        $request['cover'] = $newName;

        $teacher = Teacher::where('slug', $slug)->first();
        $teacher->update($request->all());

        return redirect('teacher')->with('status','Data Teacher Berhasil Di Edit');
    }

    public function delete($slug)
    {
        $teacher = Teacher::where('slug',$slug)->first();
        return view('admin.teacher-delete', ['teacher' => $teacher]);
    }

    public function destroy($slug)
    {

        $teacher = Teacher::where('slug', $slug)->first();
        $teacher->delete();
        return redirect('/teacher')->with('status','Data Prestasi berhasil di Hapus ');

    }
    //----------------------------------------------------------------------------------------
  
    
}
