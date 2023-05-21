
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="assets/font_login/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>

    <div id="login-box">
        <div class="left">
          <h2>Créer un compte</h2>
          <form method="POST" action="{{ route('register') }}">
            @csrf

            <input type="text" class=" @error('name') is-invalid @enderror" name="name" placeholder="name" />
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input type="text" class=" @error('lastname') is-invalid @enderror" name="lastname" placeholder="lastname" />
                @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input type="email" class=" @error('email') is-invalid @enderror" name="email" placeholder="email" />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input type="number" class=" @error('telephone') is-invalid @enderror" name="telephone" placeholder="phone" />
                @error('telephone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                 @enderror
            <input type="password" class=" @error('password') is-invalid @enderror" name="password" placeholder="Password" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
               @enderror
            <input type="password" name="password_confirmation" placeholder="Retype password" />

            <input type="submit" name="signup_submit" value="S'inscrire" />
          </form>
        </div>

        <div class="right">
            <marquee behavior="" direction="">

                <span class="loginwith">Welcome to<br /> flight tracker</span>
            </marquee>
        <a href="login">
          <button class="social-signin facebook">Se connecter</button>
        </a>
        </div>
        <div class="or">OU</div>
      </div>
</body>
</html>
