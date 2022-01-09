<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style_login.css">
    <title>LOGIN PAGE</title>
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
            <form action="login" method="POST">
                <div class="inputs">
                    <div class="messages">
                        <?php if(isset($messages)){
                            foreach ($messages as $message){
                                echo $message;
                            }
                        }
                        ?>
                    </div>
                    <input name="email" type="text" placeholder="email@email.com">
                    <input name="password" type="password" placeholder="password">
                </div>
                
                <div class="buttons">
                    <button name="buttonZ2">Zaloguj sie</button>
                    <button name="buttonZ">Zarejestruj sie</button>
                </div>
            </form>
        </div>

        <div class="sing-up">
            <div class="sing-up-div">
                <p>Login:</p>
                <input name="Login" type="text" placeholder="Login">
                <p>Hasło:</p>
                <input name="Hasło" type="text" placeholder="Hasło">
                <p>Imie:</p>
                <input name="Imie" type="text" placeholder="Imie">
                <p>Nazwisko:</p>
                <input name="Nazwisko" type="text" placeholder="Nazwisko">
                <p>Email:</p>
                <input name="Email" type="text" placeholder="Email">
                <p>Numer telefonu:</p>
                <input name="Numer telefonu" type="text" placeholder="Numer telefonu">
            </div>
            <div class="sing-up-buttons">
                <button name="sing-up">
                    Zarejestruj się
                </button>
                <button name="sing-up-exit">
                    Anuluj
                </button>
            </div>
        </div>

        <div class="sing-up-mobile">
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
        </div>
    </div>
</body>