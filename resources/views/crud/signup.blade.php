@extends('dashboard')

@section('content')
<style>
    .login-form {
        width: 100%;
        max-width: 400px;
        margin: auto;
    }

    .card-login {
        border: 1px solid #ccc;
        padding: 20px;
        margin-top: 50px;
    }

    .card-title h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    .input-group {
        margin-bottom: 15px;
    }

    .input-group label {
        display: block;
        margin-bottom: 5px;
    }

    .input-group input[type="text"],
    .input-group input[type="password"],
    .input-group input[type="email"] {
        width: 90%;
        padding: 10px;
        border: 1px solid #ccc;
    }

    .login {
        display: grid;
        justify-content: center;
        align-items: center;
        margin-top: 15px;
        color: blue;
        text-decoration: none;
    }

    .btn-login {
        width: 100%;
        padding: 10px;
        background-color: blue;
        color: white;
        border: none;
        cursor: pointer;
        font-size: x-large;
    }
</style>


<section class="login-form">
    <div class="card-login">
        <div class="card-title">
            <h1>Màn hình đăng ký</h1>
        </div>
        <form method="POST" action="{{ route('user.postUser') }}" class="card-body">
            @csrf
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required autofocus>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password 1" name="password" required>
            </div>

            <div class="input-group">
                <label for="password">Password Again</label>
                <input type="password" id="password 2" name="password" required>
            </div>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>

            <button type="submit" class="btn-login">Đăng Ký</button>

            <div>
                <a href="#" class="login">Đã Có Tài Khoản</a>
            </div>
        </form>
    </div>
</section>

@endsection