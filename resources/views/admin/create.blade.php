@extends('welcome')

@section('content')
    <div class="container">
        <form action="" method="POST" enctype="multipart/form-data" class="form formCreate">
            @csrf
            @if(session()->has('success'))
                <div class="success">Товар успешно добавлен!</div>
            @endif
            <h2>Добавить товар</h2>
            <div class="form-field">
                <label for="name" class="form-label">Введите название:</label>
                <input type="text" name="name" id="name" class="form-input @error('name') is-invalid @enderror" aria-describedby="failValidation">
                @error('name')
                <div class="failValidation">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-field">
                <label for="price" class="form-label">Объем, стоимость:</label>
                <input type="text" name="price" id="price" class="form-input @error('price') is-invalid @enderror" aria-describedby="failValidation">
                @error('price')
                <div class="failValidation">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-field">
                <label for="photo_file" class="form-label">Вставьте изображение:</label>
                <input type="file" name="photo_file" id="photo_file" class="form-input @error('photo_file') is-invalid @enderror" aria-describedby="failValidation">
                @error('photo_file')
                <div class="failValidation">{{ $message }}</div>
                @enderror
            </div>

            <input type="submit" class="form-btn" value="Добавить">
        </form>
    </div>

@endsection
