<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Murahkom | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
    <!-- Main Content -->
    <div class="container-fluid">
        <div class="row main-content bg-primary text-center">
            <div class="col-md-4 text-center company__info">
                <span class="company__logo">
                    <h2><span class="fa fa-laptop-code" aria-hidden="true"></span></h2>
                </span>
                <h5 class="company_title">Murahkom</h5>
            </div>
            <div class="col-md-8 col-xs-12 col-sm-12 login_form ">
                <div class="container-fluid mt-4">
                    <div class="row">
                        <h2>Login</h2>
                    </div>
                    <div class="row my-2">
                        <form control="" class="form-group" method="POST">
                            @csrf
                            {{-- cek validasi apakah ada error pada login --}}
                            @if (session()->has('loginError'))
                                <div class="error-text" role="alert">
                                    {{ session('loginError') }}
                                </div>
                            @endif
                            <div class="row">
                                <input type="text" name="email" id="email" class="form__input"
                                    placeholder="Email" required>
                                @error('email')
                                    <div class="text-danger text-start p-0">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="row">
                                <input type="password" name="password" id="password" class="form__input"
                                    placeholder="Password" required>
                                @error('password')
                                    <div class="text-danger text-start p-0">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="row align-self-center">
                                <input type="submit" value="Submit" class="btn">
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <p>Don't have an account? <a href="{{ url('/register') }}">Register Here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="container-fluid text-center footer">
        Laravel with &hearts; by <a href="https://github.com/guguspradita">Gugus Pradita</a></p>
    </div>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/
                                                                                                                                bootstrap.bundle.min.js">
    </script>
</body>

</html>
