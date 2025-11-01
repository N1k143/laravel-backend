<div class="mb-3">
    <label class="form-label">Имя</label>
    <input type="text" name="first_name" class="form-control" value="{{ old('first_name', $student->first_name ?? '') }}">
    @error('first_name') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Фамилия</label>
    <input type="text" name="last_name" class="form-control" value="{{ old('last_name', $student->last_name ?? '') }}">
    @error('last_name') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $student->email ?? '') }}">
    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Группа</label>
    <input type="text" name="group" class="form-control" value="{{ old('group', $student->group ?? '') }}">
    @error('group') <div class="text-danger">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label class="form-label">Дата рождения</label>
    <input type="date" name="birth_date" class="form-control" value="{{ old('birth_date', $student->birth_date ?? '') }}">
    @error('birth_date') <div class="text-danger">{{ $message }}</div> @enderror
</div>
