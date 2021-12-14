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
                    <button>Zarejestruj sie</button>
                    <button type="submit">Zaloguj sie</button>
                </div>
            </form>
        </div>
    </div>
</body>