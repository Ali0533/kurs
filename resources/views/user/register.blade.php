@extends('welcome')

@section('content')
    <div class="container">
        <form action="" method="POST" class="authForm form">
            @if(session()->has('success'))
                <div class="success">Вы успешно зарегистрировались. <a href="{{ route('login') }}">Можете авторизоваться</a></div>
            @endif
            <h2>Регистрация</h2>
            @csrf
            <div class="form-field">
                <label for="name" class="form-label">Ваше имя:</label>
                <input type="text" class="form-input @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="failValidation">
                @error('name')
                <div class="failValidation">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-field">
                <label for="surname" class="form-label">Ваша фамилия:</label>
                <input type="text" class="form-input @error('surname') is-invalid @enderror" name="surname" id="surname" aria-describedby="failValidation">
                @error('surname')
                <div class="failValidation">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-field">
                <label for="email" class="form-label">Ваша электронная почта:</label>
                <input type="email" class="form-input @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="failValidation">
                @error('email')
                <div class="failValidation">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-field">
                <label for="password" class="form-label">Придумайте пароль:</label>
                <input type="password" class="form-input @error('password') is-invalid @enderror" name="password" id="password" aria-describedby="failValidation">
                @error('password')
                <div class="failValidation">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-field">
                <label for="password_confirmation" class="form-label">Повторите пароль:</label>
                <input type="password" class="form-input @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" aria-describedby="failValidation">
                @error('password_confirmation')
                <div class="failValidation">{{ $message }}</div>
                @enderror
            </div>

            <input type="submit" class="form-btn" value="Зарегистрироваться">

            <p>Уже есть аккаунт? <a href="{{ route('login') }}">Авторизируйтесь</a></p>
        </form>
    </div>
@endsection
