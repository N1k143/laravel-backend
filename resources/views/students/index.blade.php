@extends('layouts.app')

@section('title', 'Список студентов')

@section('content')
    <h1>Список студентов</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Email</th>
                <th>Группа</th>
                <th>Дата рождения</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->first_name }}</td>
                    <td>{{ $student->last_name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->group }}</td>
                    <td>{{ $student->birth_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
