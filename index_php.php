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
<body class="dark-theme">
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
            <div class="toggle">
                <span class="toggle__text">Dark</span>
                <div class="theme-toggle">
                    <div class="toggle__circle"></div>
                </div>
                <span class="toggle__text">Light</span>
            </div>
        </header>
        <main class="main">
            <div class="container">
                <?php
                foreach($db as $song){
                    echo "
                    <div class='card'>
                        <div class='card__img'>
                            <img src={$song['poster']} alt='poster {$song['title']}'>
                        </div>
                        <div class='card__info'>
                            <div class='card__title'><h3>".strtoupper($song['title'])."</h3></div>
                            <div class='card__author'>
                                <h4>{$song['author']}</h4>
                                <h4>{$song['year']}</h4>
                            </div>
                        </div>
                    </div>
                    ";
                }
                ?>
            </div>
        </main>
</body>
</html>