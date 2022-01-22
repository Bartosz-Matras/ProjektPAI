<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style_login.css">
    <title>LOGIN PAGE</title>
    <script src="public/js/functions.js" crossorigin="anonymous" defer></script>

</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="public/img/logo.svg">
        </div>
        <div class="image">
            <img src="public/img/image.svg">
        </div>

        <div class="login-container">
            <div class="login-container-div">
                <form action="login" method="POST" id="login-form">
                    <div class="inputs">
                        <div class="messages">
                            <?php if(isset($messages)){
                                foreach ($messages as $message){
                                    echo $message;
                                }
                            }
                            ?>
                        </div>
                        <input name="login" type="text" placeholder="login">
                        <input name="password" type="password" placeholder="password">
                    </div>
                </form>
                <div class="buttons">
                    <button name="buttonZ2" type="submit" form="login-form">
                        Zaloguj sie
                    </button>
                    <button name="buttonZ" onclick="showSingUpDiv()">
                        Zarejestruj sie
                    </button>
                </div>
            </div>
        </div>

        <div class="sing-up">
            <form action="register" method="POST" id="register-form">
                <div class="sing-up-div">
                    <p>Login:</p>
                    <input name="login" type="text" placeholder="Login">
                    <p>Hasło:</p>
                    <input name="haslo" type="text" placeholder="Hasło" type="password">
                    <p>Imie:</p>
                    <input name="imie" type="text" placeholder="Imie">
                    <p>Nazwisko:</p>
                    <input name="nazwisko" type="text" placeholder="Nazwisko">
                    <p>Email:</p>
                    <input name="email" type="text" placeholder="Email">
                    <p>Numer telefonu:</p>
                    <input name="numerTelefonu" type="text" placeholder="Numer telefonu">
                </div>
            </form>
            <div class="sing-up-buttons">
                <button name="sing-up" type="submit" form="register-form">
                    Zarejestruj się
                </button>
                <button name="sing-up-exit" type="button" onclick="showSingUpDiv()">
                    Anuluj
                </button>
            </div>

        </div>

        <div class="sing-up-mobile">
            <form action="register" method="POST">
                <p>Podaj login:</p>
                <label>
                    <input name="Login" type="text" placeholder="Login">
                </label>
                <p>Podaj hasło:</p>
                <label>
                    <input name="Hasło" type="text" placeholder="Hasło">
                </label>
                <p>Podaj imie:</p>
                <label>
                    <input name="Imie" type="text" placeholder="Imie">
                </label>
                <p>Podaj nazwisko:</p>
                <label>
                    <input name="Nazwisko" type="text" placeholder="Nazwisko">
                </label>
                <p>Podaj email:</p>
                <label>
                    <input name="Email" type="text" placeholder="Email">
                </label>
                <p>Podaj numer telefonu:</p>
                <label>
                    <input name="Numer telefonu" type="text" placeholder="Numer telefonu">
                </label>
                <button name="sing-up2">
                    Potwierdź
                </button>
                <button name="sing-up2-exit">
                    Anuluj
                </button>
            </form>
        </div>
    </div>
</body>


