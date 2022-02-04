<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/3ee6bedd82.js" crossorigin="anonymous"></script>
    <script src="public/js/map.js" crossorigin="anonymous" defer></script>
    <script src="public/js/functions.js" crossorigin="anonymous" defer></script>
    <script src="public/js/account-div.js" crossorigin="anonymous" defer></script>
    <script src="public/js/pin-add-div.js" crossorigin="anonymous" defer></script>
    <script src="public/js/search.js" crossorigin="anonymous" defer></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <!-- MAPBOX LIBRARY CDN -->
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.css' rel='stylesheet'/>
    <title>Document</title>
</head>
<body>
    <div class="base-container">
        <header>
            <div class="bars">
                <button name="bars-button" onclick="showFilters2()">
                    <span class="bars-icon" style="color: white;">
                        <i class="fas fa-bars fa-6x"></i>
                    </span>
                </button>
            </div>

            <div class="logo">
                <img src="public/img/logo.svg">
            </div>

            <div class="search-town">
                <div class="search-wrap">
                    <button class="wysz">
                        <i class="fas fa-search fa-2x"></i>
                    </button>
                    <input name="search" type="text" placeholder="Szukaj">
                    <button class="exit" onclick="clearSearchDiv()">
                        <i class="fas fa-times-circle fa-2x"></i>
                    </button>
                </div>
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

            <button name="settings-button-2" onclick="showOptionsDiv2()">
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
                            <?php foreach ($tags as $tag): ?>
                            <label class="container">
                                <?= $tag->getTagName(); ?>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>

                <div class="filters2">
                    <?php
                        $userSession = Session::getInstance();
                    ?>
                    <div class="profile2-image">
                        <img src="<?= $userSession->profilePhotoPath ?>" alt="">
                    </div>
                    <div class="profile2-labelName">
                        <p><?= $userSession->name ?></p>
                    </div>
                    <button name="profile2Name" onclick="showAccount2()">
                        <p>Edytuj profil </p>
                    </button>
                    <div class="profile2-filters">
                        <p>Filtry</p>
                        <div class="profile2-filters-div">
                            <?php foreach ($tags as $tag): ?>
                            <label class="container2">
                                <?= $tag->getTagName(); ?>
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>

                <div class="projects">
                    <?php foreach ($pins as $pin): ?>
                    <div id="project-1">
                        <div class="image">
                            <img src="<?= $pin->getImage()?>" alt="">
                        </div>
                        <div class="informations">
                            <h1><?= $pin->getTitle(); ?></h1>
                        </div>
                        <div class="text">
                            <p>
                                <?= $pin->getDescription(); ?>
                            </p>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>

                <div class="search-tool">
                    <i class="fas fa-map-marker-alt"></i>
                    <input name="search-app" type="text" placeholder="Szukaj miejsca">
                    <div class="empty-space"></div>
                </div>

                <div class="mapa">
                    <div id="map">
                        <div class="pin">
                            <button name="add-pin" onclick="showAddPinDiv()">
                                <i class="fas fa-plus-square fa-3x"></i>
                            </button>
                        </div>
                        <div class="pin-2">
                            <button name="add-pin-2" onclick="showAddPinDiv2()">
                                <i class="fas fa-plus-square"></i>
                            </button>
                        </div>
                        <div class="local">
                            <button name="localization">
                                <i class="fas fa-location-arrow fa-2x"></i>
                            </button>
                        </div>
                        <div class="local-2">
                            <button name="localization-2">
                                <i class="fas fa-location-arrow"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="account-div">
                    <?php
                        $userSession = Session::getInstance();
                    ?>
                    <div class="photo-div">
                        <button name="close-button" onclick="showAccountDiv()">
                            <i class="fas fa-times fa-3x"></i>
                        </button>
                        <div class="photo">
                            <div class="photo-icon">
                                <img src="<?= $userSession->profilePhotoPath ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="data">
                        <form method="post" action="account" id="account-div">
                            <div class="data-flex">
                                <div class="data-first">
                                    <div class="data-name">
                                        <p>
                                            Imie:<br>
                                            <input id="input-name" name="input-name"  type="text" readonly="true" placeholder="Imie" value="<?= $userSession->name ?>">
                                        </p>
                                        <button name="edit-data" type="button" onclick="accountDiv('input-name')" >
                                            <i class="far fa-edit"></i>
                                        </button>
                                    </div>
                                    <div class="data-surname">
                                        <p>
                                            Nazwisko: <br>
                                            <input id="input-surname" name="input-surname" type="text" readonly="true" placeholder="Nazwisko" value="<?= $userSession->surname ?>">
                                        </p>
                                        <button name="edit-data" type="button" onclick="accountDiv('input-surname')">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    </div>
                                    <div class="data-email">
                                        <p>
                                            Adres email: <br>
                                            <input id="input-email" name="input-email" type="text" readonly="true" placeholder="Email" value="<?= $userSession->email ?>">
                                        </p>
                                        <button name="edit-data" type="button" onclick="accountDiv('input-email')">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="data-second">
                                    <div class="data-adress">
                                        <p>
                                            Adres: <br>
                                            <input id="input-address" name="input-address" type="text" readonly="true" placeholder="Adres" value="<?= $userSession->address ?>"> <br>
                                        </p>
                                        <button name="edit-data" type="button" onclick="accountDiv('input-address')">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    </div>
                                    <div class="data-phone">
                                        <p>
                                            Numer telefonu: <br>
                                            <input id="input-phone" name="input-phone" type="text" readonly="true" placeholder="Numer telefonu" value="<?= $userSession->phone ?>"> <br>
                                        </p>
                                        <button name="edit-data" type="button" onclick="accountDiv('input-phone')">
                                            <i class="far fa-edit"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <button name="save-data" type="submit" form="account-div">
                            Save
                        </button>
                    </div>
                </div>

                <div class="bottom-bar">
                    <button name="scroll">
                        <i class="fas fa-grip-lines"></i>
                    </button>

                    <div class="info-projects">
                        <div class="info-projects-div">
                            <?php foreach ($pins as $pin): ?>
                            <div class="project-2">
                                <div class="project2-photo-name">
                                    <img src="<?= $pin->getImage()?>">
                                    <div class="project2-name">
                                        <p><?= $pin->getTitle(); ?></p>
                                    </div>
                                </div>
                                <div class="project2-desc">
                                    <label for="description">
                                        <?= $pin->getDescription(); ?>
                                    </label>
                                </div>
                            </div>
                            <?php endforeach ?>

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
                        <form action="logout" method="post" id="form-logout">
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
                            <i class="fas fa-bell"></i>
                        </button>
                        <button name="support">
                            <i class="fas fa-question"></i>
                        </button>
                        <button name="dark-mode">
                            <i class="fas fa-moon"></i>
                        </button>
                    </div>
                    <div class="break">

                    </div>
                    <div class="other-app2">
                        <form action="https://www.facebook.com/">
                            <button name="buttonFb2">
                                <i class="fab fa-facebook-f fa-2x"></i>
                            </button>
                        </form>
                        <form action="https://www.messenger.com/">
                            <button name="buttonMess2">
                                <i class="fab fa-facebook-messenger"></i>
                            </button>
                        </form>
                        <form action="https://www.instagram.com/">
                            <button name="buttonInstagram2">
                                <i class="fab fa-instagram"></i>
                            </button>
                        </form>
                        <form action="https://twitter.com/">
                            <button name="buttonTwitter2">
                                <i class="fab fa-twitter"></i>
                            </button>
                        </form>
                    </div>
                    <div class="logout2">
                        <form action="logout" method="post" id="form-logout">
                            <button name="buttonLogout2">
                                <p>Wyloguj.</p>
                            </button>
                        </form>
                    </div>
                    <div class="producent-info2">
                        <p>Train 1.0.1 <br> Stworzono w Kraków</p>
                    </div>
                </div>

                <div class="add-pin-div">
                    <form id="form-pin-add" method="post" action="addPin" ENCTYPE="multipart/form-data">
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


                        <div class="form-group">
                            <select id="mul-select" name="mul-select" class="mul-select" multiple>
                                <?php $i = 1; ?>
                                <?php foreach ($tags as $tag): ?>
                                <option value="<?= $i++; ?>" class="dupa">
                                    <?= $tag->getTagName(); ?>
                                </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <input name="tags3" id="tags3" type="text" >


                        <input id="coordinates-input" name="coordinates" type="text" placeholder="coordinates:" readonly>
                        <input id="address-input" name="address" type="text" placeholder="address:" readonly>

                        <input name="upload-input" type="file">
                    </form>
                    <div class="buttons-pin">
                        <button name="button-add" id="button-add" type="submit" form="form-pin-add">
                            <p>Dodaj</p>
                        </button>
                        <button name="button-cancel" onclick="showAddPinDiv()">
                            <p>Anuluj</p>
                        </button>
                    </div>
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
                        <button name="button-cancel2" onclick="showAddPinDiv2()">
                            <p>Anuluj</p>
                        </button>
                    </div>
                </div>

                <div class="profile2">
                    <?php
                        $userSession = Session::getInstance();
                    ?>
                    <div class="profile2-photo-exit">
                        <button name="profile2-photo">
                            <img src="<?= $userSession->profilePhotoPath ?>">
                        </button>
                        <button name="profile2-exit" onclick="showAccount2()">
                            <i class="fas fa-times fa-5x"></i>
                        </button>
                    </div>

                    <div class="save-data2-div">
                        <button name="save-data2" form="account-div2">
                            Zapisz
                        </button>
                    </div>
                    <form method="post" action="account2" id="account-div2">
                        <div class="profile2-info">
                            <div class="profile2-info-name">
                                <p>Imie: <br>
                                    <input id="input-name2" name="input-name2" type="text" readonly="true" placeholder="Imie" value="<?= $userSession->name ?>">
                                </p>
                                <button name="profile2-edit-data-name" type="button" onclick="accountDiv('input-name2')">
                                    <i class="far fa-edit"></i>
                                </button>
                            </div>

                            <div class="profile2-info-surname">
                                <p>Nazwisko: <br>
                                    <input id="input-surname2" name="input-surname2" type="text" readonly="true" placeholder="Surname" value="<?= $userSession->surname ?>">
                                </p>
                                <button name="profile2-edit-data-surname" type="button" onclick="accountDiv('input-surname2')">
                                    <i class="far fa-edit"></i>
                                </button>
                            </div>

                            <div class="profile2-info-email">
                                <p>Email: <br>
                                    <input id="input-email2" name="input-email2" type="email" readonly="true" placeholder="Email" value="<?= $userSession->email ?>">
                                </p>
                                <button name="profile2-edit-data-email" type="button" onclick="accountDiv('input-email2')">
                                    <i class="far fa-edit"></i>
                                </button>
                            </div>

                            <div class="profile2-info-address">
                                <p>Adres: <br>
                                    <input id="input-address2" name="input-address2" type="text" readonly="true" placeholder="Address" value="<?= $userSession->address ?>">
                                </p>
                                <button name="profile2-edit-data-address" type="button" onclick="accountDiv('input-address2')">
                                    <i class="far fa-edit"></i>
                                </button>
                            </div>

                            <div class="profile2-info-phone">
                                <p>Numer telefonu: <br>
                                    <input id="input-phone2" name="input-phone2" type="text" readonly="true" placeholder="Phone" value="<?= $userSession->phone ?>">

                                </p>
                                <button name="profile2-edit-data-phone" type="button" onclick="accountDiv('input-phone2')">
                                    <i class="far fa-edit"></i>
                                </button>
                            </div>

                        </div>
                    </form>

                </div>
            </section>
        </main>
    </div>
    </body>

    <template id="project-template">
        <div id="project-1">
            <div class="image">
                <img src="" alt="">
            </div>
            <div class="informations">
                <h1>title</h1>
            </div>
            <div class="text">
                <p>description</p>
            </div>
        </div>
    </template>
</html>


