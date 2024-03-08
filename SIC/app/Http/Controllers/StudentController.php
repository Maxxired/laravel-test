<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $students=Student::all();
        $students = Student::paginate(10);
        return view('CrudStudents.students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("CrudStudents.form");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        $validatedData = $request->validated();
        $student = new Student([
            'name_student' => $validatedData['name_student'],
            'lastname_student' => $validatedData['lastname_student'],
            'id_student' => $validatedData['id_student'],
            'birthdate' => $validatedData['birthdate'],
            'comments' => $validatedData['comments'],
        ]);

        $student->save();

        return redirect()->route('students.index')->with('success', 'Estudiante registrado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('CrudStudents.student', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::find($id);
    
        return view('CrudStudents.student-edit', compact('student'));
    }
    
    public function update(StudentRequest $request, $id)
    {
        $validatedData = $request->validated();
        
        $student = Student::find($id);
    
        if (!$student) {
            return redirect()->route('students.index')->with('error', 'Estudiante no encontrado.');
        }
    
        $student->update([
            'name_student' => $validatedData['name_student'],
            'lastname_student' => $validatedData['lastname_student'],
            'id_student' => $validatedData['id_student'],
            'birthdate' => $validatedData['birthdate'],
            'comments' => $validatedData['comments'],
        ]);
    
        return redirect()->route('students.index')->with('success', 'Estudiante registrado exitosamente');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::find($id);
        if(!$student){
            return redirect()->route('students.index')->with('error', 'Estudiante no encontrado.');
        }

        $student->delete();
        return redirect()->route('students.index')->with('success', 'Estudiante eliminado exitosamente.');

    }
}