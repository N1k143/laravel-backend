<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'email'      => 'required|email|unique:students,email',
            'group'      => 'required|string|max:50',
            'birth_date' => 'required|date',
        ]);
        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Студент успешно добавлен!');
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name'  => 'required|string|max:100',
            'email'      => 'required|email|unique:students,email,' . $student->id,
            'group'      => 'required|string|max:50',
            'birth_date' => 'required|date',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Данные студента обновлены!');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Студент удалён!');
    }
}
