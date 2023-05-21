


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
          <h1>Login</h1>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" class=" @error('email') is-invalid @enderror" name="email" placeholder="email" />
                @error('email')
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


            <input type="submit" name="signup_submit" value="login" />
          </form>



        </div>

        <div class="right">
            <marquee behavior="" direction="">

                <span class="loginwith">Welcome to<br /> flight tracker</span>
            </marquee>
        <a href="register">
          <button class="social-signin facebook">Créer un compte</button>
        </a>
        </div>
        <div class="or">OU</div>
      </div>
</body>
</html>
