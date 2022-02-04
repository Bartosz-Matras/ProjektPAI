<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style_login.css">
    <title>LOGIN PAGE</title>
    <script src="public/js/functions.js" crossorigin="anonymous" defer></script>
    <script src="public/js/script.js" crossorigin="anonymous" defer></script>
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

        <div class="login-container2">
            <div class="login-container2-div">
                <form action="login" method="POST" id="login-form2">
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
                    <button name="buttonZ2" type="submit" form="login-form2">
                        Zaloguj sie
                    </button>
                    <button name="buttonZ" onclick="showSingUpDiv2()">
                        Zarejestruj sie
                    </button>
                </div>
            </div>
        </div>

        <div class="sing-up">
            <div class="messages-sing">
                <?php
                if(isset($messages)){
                    foreach ($messages as $message){
                        echo $message;
                    }
                }
                ?>
            </div>
            <form action="register" method="POST" id="register-form">
                <div class="sing-up-div">
                    <input name="login" type="text" placeholder="Login">
                    <input name="haslo"  placeholder="Hasło" type="password">
                    <input name="haslo2" placeholder="Powtórz hasło" type="password">
                    <input name="imie" type="text" placeholder="Imie">
                    <input name="nazwisko" type="text" placeholder="Nazwisko">
                    <input name="email" type="text" placeholder="Email">
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
            <div class="messages-mobile">
                <?php
                if(isset($messages)){
                    foreach ($messages as $message){
                        echo $message;
                    }
                }
                ?>
            </div>
            <form action="register" method="POST" id="register-form2">
                <input name="login" type="text" placeholder="Login">
                <input name="haslo"  placeholder="Hasło" type="password">
                <input name="haslo2" placeholder="Powtórz hasło" type="password">
                <input name="imie" type="text" placeholder="Imie">
                <input name="nazwisko" type="text" placeholder="Nazwisko">
                <input name="email" type="text" placeholder="Email">
                <input name="numerTelefonu" type="text" placeholder="Numer telefonu">
            </form>
            <div class="buttons-mobile">
                <button name="sing-up2" form="register-form2">
                    Potwierdź
                </button>
                <button name="sing-up2-exit" onclick="showSingUpDiv2()">
                    Anuluj
                </button>
            </div>
        </div>
    </div>
</body>


