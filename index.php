<?php 
include __DIR__ . '/utilities/functions.php';
include __DIR__ . '/utilities/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Ajax Dischi</title>
</head>
<body>
    <header class="header">
        <div class="logo__img">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/Spotify_icon.png" alt="logo spotify">
        </div>
        <div class="selection">
            <select name="selection__genre" id="selectionGenre">
                <option value="All">All</option>
                <option value="Rock">Rock</option>
                <option value="Pop">Pop</option>
                <option value="Jazz">Jazz</option>
                <option value="Metal">Metal</option>
            </select>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="card">
                <div class="card__img">
                    <img src="https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg" alt="">
                </div>
                <div class="card__info">
                    <div class="card__title"><h3>New Jersey</h3></div>
                    <div class="card__author">
                        <h4>Bon Jovi</h4>
                        <h4>1988</h4>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__img">
                    <img src="https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg" alt="">
                </div>
                <div class="card__info">
                    <div class="card__title"><h3>New Jersey</h3></div>
                    <div class="card__author">
                        <h4>Bon Jovi</h4>
                        <h4>1988</h4>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__img">
                    <img src="https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg" alt="">
                </div>
                <div class="card__info">
                    <div class="card__title"><h3>New Jersey</h3></div>
                    <div class="card__author">
                        <h4>Bon Jovi</h4>
                        <h4>1988</h4>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__img">
                    <img src="https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg" alt="">
                </div>
                <div class="card__info">
                    <div class="card__title"><h3>New Jersey</h3></div>
                    <div class="card__author">
                        <h4>Bon Jovi</h4>
                        <h4>1988</h4>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__img">
                    <img src="https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg" alt="">
                </div>
                <div class="card__info">
                    <div class="card__title"><h3>New Jersey</h3></div>
                    <div class="card__author">
                        <h4>Bon Jovi</h4>
                        <h4>1988</h4>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__img">
                    <img src="https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg" alt="">
                </div>
                <div class="card__info">
                    <div class="card__title"><h3>New Jersey</h3></div>
                    <div class="card__author">
                        <h4>Bon Jovi</h4>
                        <h4>1988</h4>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__img">
                    <img src="https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg" alt="">
                </div>
                <div class="card__info">
                    <div class="card__title"><h3>New Jersey</h3></div>
                    <div class="card__author">
                        <h4>Bon Jovi</h4>
                        <h4>1988</h4>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>