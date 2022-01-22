<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/3ee6bedd82.js" crossorigin="anonymous"></script>
    <script src="public/js/map.js" crossorigin="anonymous" defer></script>
    <script src="public/js/functions.js" crossorigin="anonymous" defer></script>
    <script src="public/js/account-div.js" crossorigin="anonymous" defer></script>


    <!-- MAPBOX LIBRARY CDN -->
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.css' rel='stylesheet'/>
    <title>Document</title>
</head>
<body>
    <div class="base-container">
        <header>
            <div class="bars">
                <button name="bars-button">
                    <span class="bars-icon" style="color: white;">
                        <i class="fas fa-bars fa-6x"></i>
                    </span>
                </button>
            </div>

            <div class="logo">
                <img src="public/img/logo.svg">
            </div>

            <div class="search-town">
                <form action="project" method="POST" id="search-form">
                    <div class="search-wrap">
                        <button class="wysz">
                            <i class="fas fa-search fa-2x"></i>
                        </button>
                        <input name="search" type="text" placeholder="Szukaj miejsca">
                        <button class="exit" onclick="clearSearchDiv()">
                            <i class="fas fa-times-circle fa-2x"></i>
                        </button>
                    </div>
                </form>
            </div>

            <div class="profile">
                <button name="circle" onclick="showAccountDiv()" >
                    <span class="profile-icon" style="color:white;">
                        <i class="fas fa-user-tie fa-2x"></i>
                    </span>
                </button>
                <div class="name">
                    Bartek
                </div>
            </div>

            <button name="settings-button" onclick="showOptionsDiv()">
                <span class="settings-icon" style="color: white;">
                    <i class="fas fa-cog fa-3x"></i>
                </span>
            </button>

            <button name="settings-button-2">
                <span class="settings-icon" style="color: white;">
                    <i class="fas fa-cog fa-6x"></i>
                </span>
            </button>

        </header>

        <main>
            <section class="project">
                <div class="filters">
                    <div class="filters-bar">
                        <div class="info-bar">
                            <p>Znaleziono 10 wyników</p>
                        </div>
                        <div class="filters-bar-section">
                            <p>Filtry</p>
                            <h3>Jedzenie:</h3>
                            <label class="container">
                                Wedliny
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Pieczywo
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Sery
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Dania
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Przetwory
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Słodycze
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Warzywa
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <h3>Napoje:</h3>
                            <label class="container">
                                Soki
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Piwo
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="filters2">
                    <div class="profile2-image">
                        <img src="public/img/face.svg" alt="">
                    </div>
                    <div class="profile2-labelName">
                        <p>Bartosz</p>
                    </div>
                    <button name="profile2Name">
                        <p>Edytuj profil </p>
                    </button>
                    <div class="profile2-filters">
                        <p>Filtry</p>
                        <div class="profile2-filters-div">
                            <h3>Jedzenie:</h3>
                            <label class="container2">
                                Wedliny
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container2">
                                Pieczywo
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container2">
                                Sery
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container2">
                                Dania
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container2">
                                Przetwory
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container2">
                                Słodycze
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container2">
                                Warzywa
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <h3>Napoje:</h3>
                            <label class="container2">
                                Soki
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container2">
                                Piwo
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container2">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container2">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container2">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container2">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container2">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container2">
                                Wino
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="projects">
                    <div id="project-1">
                        <div class="image">
                            <img src="public/img/first.svg" alt="">
                        </div>
                        <div class="informations">
                            <h1>Robert Mazurek</h1>
                        </div>
                        <div class="text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            </p>
                        </div>
                    </div>

                    <div id="project-1">
                        <div class="image">
                            <img src="public/img/first.svg" alt="">
                        </div>
                        <div class="informations">
                            <h1>Robert Mazurek</h1>
                        </div>
                        <div class="text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            </p>
                        </div>
                    </div>

                    <div id="project-1">
                        <div class="image">
                            <img src="public/img/first.svg" alt="">
                        </div>
                        <div class="informations">
                            <h1>Robert Mazurek</h1>
                        </div>
                        <div class="text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            </p>
                        </div>
                    </div>

                    <div id="project-1">
                        <div class="image">
                            <img src="public/img/first.svg" alt="">
                        </div>
                        <div class="informations">
                            <h1>Robert Mazurek</h1>
                        </div>
                        <div class="text">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmodorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            </p>
                        </div>
                    </div>
                </div>

                <dic class="search-tool">
                    <i class="fas fa-map-marker-alt fa-4x"></i>
                    <input name="search-app" type="text" placeholder="Szukaj miejsca">
                    <button name="microphone">
                        <i class="fas fa-microphone fa-4x"></i>
                    </button>

                </dic>

                <div class="mapa">
                    <div id="map">
                        <div class="pin">
                            <button name="add-pin" onclick="showAddPinDiv()">
                                <i class="fas fa-plus-square fa-3x"></i>
                            </button>
                        </div>
                        <div class="pin-2">
                            <button name="add-pin-2">
                                <i class="fas fa-plus-square fa-5x"></i>
                            </button>
                        </div>
                        <div class="local">
                            <button name="localization">
                                <i class="fas fa-location-arrow fa-2x"></i>
                            </button>
                        </div>
                        <div class="local-2">
                            <button name="localization-2">
                                <i class="fas fa-location-arrow fa-5x"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="account-div">
                    <div class="photo-div">
                        <button name="close-button" onclick="showAccountDiv()">
                            <i class="fas fa-times fa-3x"></i>
                        </button>
                        <div class="photo">
                            <div class="photo-icon">
                                <span class="photo-color" style="color: white">
                                    <i class="fas fa-user-edit fa-5x"></i>
                                </span>
                            </div>
                            <h1>Bartosz Matras</h1>
                        </div>
                    </div>
                    <div class="data">
                        <div class="data-flex">
                            <div class="data-first">
                                <div class="data-name">
                                    <form action="account" method="post" id="account-div">
                                        <p>
                                            Name:<br>
                                            <input id="input-name" type="text" readonly="true">
                                        </p>
                                    </form>
                                    <button name="edit-data" onclick="accountDiv('input-name')" >
                                        <i class="far fa-edit fa-2x"></i>
                                    </button>
                                </div>

<!--                                <form action="account" method="post"-->
                                <div class="data-surname">
                                    <p>Nazwisko: <br>
                                        Matras
                                    </p>
                                    <button name="edit-data">
                                        <i class="far fa-edit fa-2x"></i>
                                    </button>
                                </div>
                                <div class="data-email">
                                    <p>email: <br>
                                        bartosz.matras38@gmail.com
                                    </p>
                                    <button name="edit-data">
                                        <i class="far fa-edit fa-2x"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="data-second">
                                <div class="data-adress">
                                    <p>Adres: <br>
                                        Krakow 12-345 <br>
                                        ul. Krakowiaka 18b
                                    </p>
                                    <button name="edit-data">
                                        <i class="far fa-edit fa-2x"></i>
                                    </button>
                                </div>
                                <div class="data-phone">
                                    <p>Numer telefonu: <br>
                                        123 456 789
                                    </p>
                                    <button name="edit-data">
                                        <i class="far fa-edit fa-2x"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bottom-bar">
                    <button name="scroll">
                        <i class="fas fa-grip-lines fa-5x"></i>
                    </button>
                    <div class="info-projects">
                        <label for="10 Wyników">
                            10 Wyników
                            <i class="fas fa-pizza-slice"></i>
                        </label>
                        <div class="info-projects-div">
                            <div class="project-2">
                                <div class="project2-photo-name">
                                    <img src="public/img/photo.svg">
                                    <div class="project2-name">
                                        <p>Robert Mazurek</p>
                                    </div>
                                </div>
                                <div class="project2-desc">
                                    <label for="description">
                                        Mam na sprzedaż 4 kurczaki z
                                        <button name="description-more">
                                            <i class="fas fa-ellipsis-h fa-2x"></i>
                                        </button>
                                    </label>
                                </div>
                            </div>
                            <div class="project-2">
                                <div class="project2-photo-name">
                                    <img src="public/img/photo.svg">
                                    <div class="project2-name">
                                        <p>Robert Mazurek</p>
                                    </div>
                                </div>
                                <div class="project2-desc">
                                    <label for="description">
                                        Mam na sprzedaż 4 kurczaki z
                                        <button name="description-more">
                                            <i class="fas fa-ellipsis-h fa-2x"></i>
                                        </button>
                                    </label>
                                </div>
                            </div>
                            <div class="project-2">
                                <div class="project2-photo-name">
                                    <img src="public/img/photo.svg">
                                    <div class="project2-name">
                                        <p>Robert Mazurek</p>
                                    </div>
                                </div>
                                <div class="project2-desc">
                                    <label for="description">
                                        Mam na sprzedaż 4 kurczaki z
                                        <button name="description-more">
                                            <i class="fas fa-ellipsis-h fa-2x"></i>
                                        </button>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="options">
                    <div class="alert">
                        <div class="alert-info">
                            <div class="alert-info1">
                                <p> Powiadomienia </p>
                            </div>
                            <div class="alert-info2">
                                <button class="buttonOn">
                                    <p>On</p>
                                </button>
                                <button class="buttonOff">
                                    <p>Off</p>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="help">
                        <button name="buttonHelp">
                            <p>
                                Pomoc
                            </p>
                        </button>
                    </div>
                    <div class="more">
                    </div>
                    <div class="other-app">
                        <form action="https://www.facebook.com/">
                            <button name="buttonFb">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </button>
                        </form>
                        <form action="https://www.messenger.com/">
                            <button name="buttonMess">
                                <i class="fab fa-facebook-messenger fa-2x"></i>
                            </button>
                        </form>
                        <form action="https://www.instagram.com/">
                            <button name="buttonIg">
                                <i class="fab fa-instagram fa-2x"></i>
                            </button>
                        </form>
                        <form action="https://twitter.com/">
                            <button name="buttonTwitter">
                                <i class="fab fa-twitter fa-2x"></i>
                            </button>
                        </form>
                    </div>
                    <div class="logout">
                        <form action="login.php">
                            <button name="buttonLogout">
                                <p>Wyloguj.</p>
                            </button>
                        </form>
                    </div>
                    <div class="producent-info">
                        <p>Train 1.0.1 <br> Stworzono w Kraków</p>
                    </div>
                </div>

                <div class="options2">
                    <div class="notification">
                        <button name="bell">
                            <i class="fas fa-bell fa-4x"></i>
                        </button>
                        <button name="support">
                            <i class="fas fa-question fa-4x"></i>
                        </button>
                        <button name="dark-mode">
                            <i class="fas fa-moon fa-4x"></i>
                        </button>
                    </div>
                    <div class="break">

                    </div>
                    <div class="other-app2">
                        <button name="buttonFb2">
                            <i class="fab fa-facebook-f fa-4x"></i>
                        </button>
                        <button name="buttonMess2">
                            <i class="fab fa-facebook-messenger fa-4x"></i>
                        </button>
                        <button name="buttonInstagram2">
                            <i class="fab fa-instagram fa-4x"></i>
                        </button>
                        <button name="buttonTwitter2">
                            <i class="fab fa-twitter fa-4x"></i>
                        </button>
                    </div>
                    <div class="logout2">
                        <button name="buttonLogout2">
                            <p>Wyloguj.</p>
                        </button>
                    </div>
                    <div class="producent-info2">
                        <p>Train 1.0.1 <br> Stworzono w Kraków</p>
                    </div>
                </div>

                <div class="add-pin-div">
                    <form method="post" action="addPin" ENCTYPE="multipart/form-data">
                        <?php
                        if(isset($messages)){
                            foreach ($messages as $message){
                                echo $message;
                            }
                        }
                        ?>
                        <label for="pin-desc">Dodaj opis:</label>
                        <textarea id="pin-desc" name="pin-desc" rows="1" cols="1">

                        </textarea>
                        <input name="title" type="text" placeholder="Enter title:">
                        <input name="tags" type="text" placeholder="Enter tags:">
                        <input name="upload-input" type="file">

                        <div class="buttons-pin">
                            <button name="button-add" type="submit">
                                <p>Dodaj</p>
                            </button>
                            <button name="button-cancel">
                                <p>Anuluj</p>
                            </button>
                        </div>
                    </form>
                </div>

                <div class="add-pin-div2">
                    <label for="pin2-desc">Dodaj opis:</label>
                    <textarea id="pin2-desc" name="pin2-desc" rows="1" cols="1">

                    </textarea>
                    <input name="tags" type="text" placeholder="Enter tags after the comma:">
                    <button name="upload-photo2">
                        <i class="fas fa-upload fa-2x"></i>
                        <p>Upload file</p>
                    </button>
                    <div class="buttons-pin2">
                        <button name="button-add2">
                            <p>Dodaj</p>
                        </button>
                        <button name="button-cancel2">
                            <p>Anuluj</p>
                        </button>
                    </div>
                </div>

                <div class="pin-info">
                    <div class="pin-info-left">
                        <div class="pin-info-photo">

                        </div>
                        <div class="pin-info-star">
                            <i class="fas fa-star s1"></i>
                            <i class="fas fa-star s2"></i>
                            <i class="fas fa-star s3"></i>
                            <i class="fas fa-star s4"></i>
                            <i class="fas fa-star s5"></i>
                        </div>
                        <button name="pin-info-exit">
                            <i class="fas fa-times fa-3x"></i>
                        </button>
                    </div>
                    <div class="pin-info-right">
                        <div class="pin-info-h1">
                            <h1>Robert Mazurek</h1>
                        </div>
                        <div class="pin-info-p">
                            <p> Sprzedam 4 kurczaki z własnej hodowli.
                                Kurczaki z wolnego wybiegu. Cena: 20zł/szt
                                Dane kontaktowe: 123 456 789
                                Robert.mazurek@gmail.com
                            </p>
                        </div>
                        <div class="pin-info-h2">
                            <h2>ul. Krowoderska 10</h2>
                        </div>
                    </div>
                </div>

                <div class="pin-info2">
                    <div class="pin-info-left2">
                        <div class="pin-info-photo2">

                        </div>
                        <div class="pin-info-star2">
                            <i class="fas fa-star fa-5x s12"></i>
                            <i class="fas fa-star fa-5x s22"></i>
                            <i class="fas fa-star fa-5x s32"></i>
                            <i class="fas fa-star fa-5x s42"></i>
                            <i class="fas fa-star fa-5x s52"></i>
                        </div>
                        <button name="pin-info-exit2">
                            <i class="fas fa-times fa-7x"></i>
                        </button>
                    </div>
                    <div class="pin-info-right2">
                        <div class="pin-info-right2-div">
                            <div class="pin-info2-h1">
                                <h1>Robert Mazurek</h1>
                            </div>
                            <div class="pin-info2-p">
                                <p> Sprzedam 4 kurczaki z własnej hodowli.
                                    Kurczaki z wolnego wybiegu. Cena: 20zł/szt
                                    Dane kontaktowe: 123 456 789
                                    Robert.mazurek@gmail.com
                                </p>
                            </div>
                            <div class="pin-info2-h2">
                                <h2>ul. Krowoderska 10</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="profile2">
                    <div class="profile2-photo-exit">
                        <button name="profile2-photo">
                            <img src="public/img/face.svg">
                        </button>
                        <button name="profile2-exit">
                            <i class="fas fa-times fa-5x"></i>
                        </button>
                    </div>

                    <div class="profile2-info">

                        <div class="profile2-info-name">
                            <p>Imie: <br>
                                Bartosz
                            </p>
                            <button name="profile2-edit-data-name">
                                <i class="far fa-edit fa-3x"></i>
                            </button>
                        </div>

                        <div class="profile2-info-surname">
                            <p>Nazwisko: <br>
                                Matras
                            </p>
                            <button name="profile2-edit-data-surname">
                                <i class="far fa-edit fa-3x"></i>
                            </button>
                        </div>

                        <div class="profile2-info-email">
                            <p>Email: <br>
                                bartosz.matras38@gmail.com
                            </p>
                            <button name="profile2-edit-data-email">
                                <i class="far fa-edit fa-3x"></i>
                            </button>
                        </div>

                        <div class="profile2-info-adres">
                            <p>Adres: <br>
                                Krakow 12-345 <br>
                                ul. Krakowska 18b
                            </p>
                            <button name="profile2-edit-data-adres">
                                <i class="far fa-edit fa-3x"></i>
                            </button>
                        </div>

                        <div class="profile2-info-phone">
                            <p>Numer telefonu: <br>
                                123 456 789
                            </p>
                            <button name="profile2-edit-data-phone">
                                <i class="far fa-edit fa-3x"></i>
                            </button>
                        </div>

                    </div>

                </div>
            </section>
        </main>
    </div>
    </body>
</html>