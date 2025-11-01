@extends('layouts.app')

@section('title', 'Добавить студента')

@section('content')
<div class="container mt-4">
    <h2>Добавить студента</h2>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        @include('students.form')
        
        <button type="submit" class="btn btn-success">Сохранить</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Назад</a>
    </form>
</div>
@endsection
