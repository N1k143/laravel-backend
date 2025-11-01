@extends('layouts.app')

@section('title', 'Редактировать студента')

@section('content')
<div class="container mt-4">
    <h2>Редактировать студента</h2>

    <form action="{{ route('students.update', $student) }}" method="POST">
        @csrf
        @method('PUT')
        @include('students.form')
        <button type="submit" class="btn btn-primary">Обновить</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Назад</a>
    </form>
</div>
@endsection
