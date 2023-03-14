<?php

namespace App\Http\Controllers;
use App\Students;
use App\display;
use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    public function index()
    {
    $student= Students::all();
    return view('index', compact('student'));
    }


    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Students::create([
            'studentno'=>$request->studentno,
            'name'=>$request->name,
            'degree'=>$request->degree,
            'service'=>$request->service,
            'created_at'=> now(),


        ]);
        return redirect()->route('student.index')->with('success', 'user has been addedd');
    }
    public function edit($students_id)
    {
        $students = Students::where('id', $students_id)->first();

        return view('edit', compact('students'));
    }

    public function update(Request $request, $student)
    {       
        Students::where('id', $student)
        ->update([
            'studentno'=>$request->studentno,
            'name'=>$request->name,
            'degree'=>$request->degree,
            'service'=>$request->service,
            'created_at'=> now(),

        ]);

        return redirect()->route('student.index')->with('success', 'Student has been Updated');
    }
    public function destroy(request $request)
    {
        $students = $request->id;
        
        Students::where('id',$students)
        ->delete();
       return redirect()->route('student.index')->with('success', 'student has been deleted');
    }

    public function delete()
    {
        return view('delete');
    }

    public function view($id)
    {
        $info = Students::where('id',$id)->first();
        return view('View', compact('info'))->render();

    }
    public function view2(request $request)
    {
        $student= display::all();
        return view('view2',compact('student'))->render();
    }

    public function search(Request $request)
    {
 
        $student = Students::where('studentno','like' , '%' . $request->search . '%' )->get();

        return view('partial.index_table_data', compact('student'))->render();
    }  
    public function studentinfo()
    {
        return view('studentinfo');
    } 
    public function view3(request $request)
    {
        $student= display::all();
        return view('view3',compact('student'))->render();
    }

    public function archive(Request $request)
    {
        $students=Students::onlyTrashed()->whereNotnull('deleted_at')->get(); 
        return view('archive' , compact('students'));
    }
    public function destroyer(Request $request)
    {
        $students = $request->id;
        
        Students::where('id',$students)
        ->forceDelete();
        
       return redirect()->route('student.view2')->with('success', 'student has been deleted');
    }


}




