<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script src="https://kit.fontawesome.com/3ee6bedd82.js" crossorigin="anonymous"></script>
    <script src="public/js/map.js" crossorigin="anonymous" defer></script>

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
                        <i class="fas fa-bars fa-2x"></i>
                    </span>
            </button>
        </div>
        <div class="logo">
            <img src="public/img/logo.svg">
        </div>
        <div class="search-town">
            <div class="search-wrap">
                    <span class="wysz" style="color: white;">
                        <i class="fas fa-search"></i>
                    </span>
                <input name="search" type="text" placeholder="Szukaj miejsca">
                <span class="exit" style="color: white;">
                        <i class="fas fa-times-circle"></i>
                    </span>
            </div>
        </div>
        <div class="profile">
                <span class="profile-icon" style="color:white;">
                    <i class="fas fa-user-tie fa-3x"></i>
                </span>
            <div class="name">
                Bartek
            </div>
        </div>
        <div class="settings">
            <button name="settings-button">
                    <span class="settings-icon" style="color: white;">
                        <i class="fas fa-cog fa-3x"></i>                
                    </span>
            </button>
        </div>
    </header>
    <main>
        <section class="project">
            <div class="filters">
                <div class="filters-bar">
                    <h1>Znaleziono 10 wyników</h1>
                    <div class="filters-bar-section">

                    </div>
                </div>
            </div>

            <div class="info projects">
                <div id="project-1">
                    <div class="image">
                        <img src="public/img/first.svg">
                    </div>
                    <div class="informations">
                        <h1>Robert Mazurek</h1>
                        <div class="icon-background">
                                <span class="rate-icon" style="color: #FFD500;">
                                    <i class="fas fa-plus"> 23</i>
                                </span>
                        </div>
                    </div>
                    <div class="text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        </p>
                    </div>
                </div>

                <div id="project-1">
                    <div class="image">
                        <img src="public/img/first.svg">
                    </div>
                    <div class="informations">
                        <h1>Robert Mazurek</h1>
                        <div class="icon-background">
                                <span class="rate-icon" style="color: #FFD500;">
                                    <i class="fas fa-plus"> 23</i>
                                </span>
                        </div>
                    </div>
                    <div class="text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        </p>
                    </div>
                </div>

                <div id="project-1">
                    <div class="image">
                        <img src="public/img/first.svg">
                    </div>
                    <div class="informations">
                        <h1>Robert Mazurek</h1>
                        <div class="icon-background">
                                <span class="rate-icon" style="color: #FFD500;">
                                    <i class="fas fa-plus"> 23</i>
                                </span>
                        </div>
                    </div>
                    <div class="text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        </p>
                    </div>
                </div>
            </div>

            <div class="mapa">
                <div id="map">
                    <div class="pin">
                        <button name="add-pin">
                            <i class="fas fa-plus-square fa-3x"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="bottom-bar">

            </div>
        </section>

    </main>
</div>
</body>
</html>