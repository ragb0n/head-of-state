
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/main.css" rel="stylesheet">
        <title>Head of State</title>
    </head>
    <body class="bg-red-400">
        <div class="login-register-window">
            <div class="logo">
                <img class="logo" src="/images/logo.png" alt="logo">
            </div>
            <div class="login-register-window-box">
                <h1 style="text-align: center">
                    Witaj
                </h1>
                <h4 style="text-align: center">
                    Wracasz ponownie, czy jesteś tu po raz pierwszy?
                </h4>
                <div id="login-register-buttons">
                    <a href="{{ route('login') }}"><div>Logowanie</div></a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"><div>Rejestracja</div></a>
                    @endif
                </div>
                <div id="footer-info">
                    2021 - Patryk Marcinków - 97711
                </div>
            </div>
        </div>
    </body>
</html>