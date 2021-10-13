<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Vue Dischi PHP</title>
</head>

<body>
    <div id="app" :class="currentTheme">
        <header class="header">
            <div class="logo__img">
                <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/7/75/Spotify_icon.png"
                        alt="logo spotify"></a>
            </div>
            <div class="selection">
                <select name='selection__genre' id='selectionGenre' v-model='genreSelected' @change='getGenre'>
                    <option value='all' selected>Tutti</option>
                    <option :value='genre' v-for='(genre, index) in genres' :key='index' :name='genre'>{{genre}}</option>
                </select>
            </div>
            <div class="toggle">
                <span class="toggle__text">Dark</span>
                <div class="theme-toggle" @click="changeTheme">
                    <div class="toggle__circle" :class="(currentTheme=='light-theme') ? 'active' : null"></div>
                </div>
                <span class="toggle__text">Light</span>
            </div>
        </header>
        <main class="main">
            <div class="container">
                <div class='card' v-for="(song, index) in filteredGenre" :key="index">
                    <div class='card__img'>
                        <img :src="song.poster" :alt="song.title">
                    </div>
                    <div class='card__info'>
                        <div class='card__title'>
                            <h3>{{song.title}}</h3>
                        </div>
                        <div class='card__author'>
                            <h4>{{song.author}}</h4>
                            <h4>{{song.year}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js"
    integrity="sha512-Idr7xVNnMWCsgBQscTSCivBNWWH30oo/tzYORviOCrLKmBaRxRflm2miNhTFJNVmXvCtzgms5nlJF4az2hiGnA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/main.js"></script>

</html>