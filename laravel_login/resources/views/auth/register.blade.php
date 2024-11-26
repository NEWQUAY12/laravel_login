<!-- resources/views/auth/register.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }} - Register</title>

    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iN8+L3zQ7PbeA5O2dq5pH4Q9t7AAlBKhZrs3XwLO5lP2p6oJ6Z2K0NYk" crossorigin="anonymous">
    <style>
        body {
            background-color: #f9f9f9;
            font-family: 'Poppins', sans-serif;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #6f42c1;
            color: white;
            font-weight: 600;
            text-align: center;
            padding: 20px;
        }

        .card-body {
            padding: 2rem;
            background-color: #ffffff;
        }

        .form-control,
        .btn {
            border-radius: 8px;
        }

        .form-control:focus {
            border-color: #6f42c1;
            box-shadow: 0 0 5px rgba(111, 66, 193, 0.5);
        }

        .btn-primary {
            background-color: #6f42c1;
            border: none;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #5a2d9e;
        }

        .btn-block {
            width: 100%;
        }

        .invalid-feedback {
            display: block;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .footer-text {
            text-align: center;
            margin-top: 20px;
            font-size: 0.875rem;
            color: #6c757d;
        }

        .footer-text a {
            color: #6f42c1;
            text-decoration: none;
        }

        .footer-text a:hover {
            text-decoration: underline;
        }

        .password-eye {
            cursor: pointer;
        }

        .position-relative {
            position: relative;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ __('Create a New Account') }}</h3>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group mb-3 row">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                <div class="col-md-6 position-relative">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required>
                                    <span id="toggle-password" class="position-absolute password-eye"
                                        style="right: 10px; top: 50%; transform: translateY(-50%);">
                                        <i class="bi bi-eye-slash"></i>
                                    </span>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group mb-3 row">
                                <label for="password_confirmation" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                <div class="col-md-6 position-relative">
                                    <input id="password_confirmation" type="password" class="form-control"
                                        name="password_confirmation" required>
                                    <span id="toggle-password-confirmation" class="position-absolute password-eye"
                                        style="right: 10px; top: 50%; transform: translateY(-50%);">
                                        <i class="bi bi-eye-slash"></i>
                                    </span>
                                </div>
                            </div>

                            <!-- Role selection -->
                            <div class="form-group mb-3 row">
                                <label for="role" class="col-md-4 col-form-label text-md-end">{{ __('Role') }}</label>
                                <div class="col-md-6">
                                    <select id="role" name="role" class="form-control @error('role') is-invalid @enderror" required>
                                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                        <option value="guru" {{ old('role') == 'guru' ? 'selected' : '' }}>Guru</option>
                                        <option value="siswa" {{ old('role') == 'siswa' ? 'selected' : '' }}>Siswa</option>
                                    </select>
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>

                        <div class="footer-text">
                            <p>Already have an account? <a href="{{ route('login') }}">Login here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Script dependencies (Bootstrap JS, Popper.js, and custom password toggle script) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz4fnFO9gyb6Q53p6YtvS8Wp3oM5bd1z4bd6ID5ShGe7kD1fl0+zATqshV2"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-pzjw8f+ua7Kw1TIq0zyW2y9KIS1+dxxqik6N2wC7ncbMjUy5WI2+zU3dmc9Bf9yIi"
        crossorigin="anonymous"></script>

    <!-- Script to toggle password visibility -->
    <script>
        // Toggle password visibility for password and password_confirmation
        document.getElementById('toggle-password').addEventListener('click', function () {
            let passwordField = document.getElementById('password');
            let passwordFieldType = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = passwordFieldType;

            // Toggle eye icon
            this.innerHTML = passwordFieldType === 'password' ? '<i class="bi bi-eye-slash"></i>' : '<i class="bi bi-eye"></i>';
        });

        document.getElementById('toggle-password-confirmation').addEventListener('click', function () {
            let passwordConfirmationField = document.getElementById('password_confirmation');
            let passwordConfirmationFieldType = passwordConfirmationField.type ===
