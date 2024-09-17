<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        $student = $request->validate([
            'name' => 'min: 3 | max: 20',
            'email' => 'min: 5 | max: 70 | unique:students',
            'age' => 'numeric | min: 10 | max: 100',
            'gender' => 'max: 50',
            'class' => 'min: 2 | max: 50',
        ]);


        Student::create($student);
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return view('show', compact('student'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        $student->update($request->validate([
            'name' => 'min: 3 | max: 20',
            'email' => 'min: 5 | max: 70 | unique:students',
            'age' => 'numeric | min: 10 | max: 100',
            'gender' => 'max: 50',
            'class' => 'min: 2 | max: 50',
        ]));

        $student->save();
        return redirect('/students/' . $student->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('/students');
    }
}
