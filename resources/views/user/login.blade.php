@extends('welcome')

@section('content')
    <div class="container">
        <form action="" method="POST" class="authForm form">
            <h2>Нужно авторизироваться</h2>
            @csrf
            <div class="form-field">
                <label for="email" class="form-label">Ваша электронная почта:</label>
                <input type="email" class="form-input @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="failValidation">
                @error('email')
                <div class="failValidation">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-field">
                <label for="password" class="form-label">Введите пароль:</label>
                <input type="password" class="form-input @error('password') is-invalid @enderror" name="password" id="password" aria-describedby="failValidation">
                @error('password')
                <div class="failValidation">{{ $message }}</div>
                @enderror
            </div>

            <input type="submit" class="form-btn" value="Войти">
            <p>Нет аккаунта? <a href="{{ route('register') }}">Зарегистрируйтесь</a></p>
        </form>
    </div>
@endsection
