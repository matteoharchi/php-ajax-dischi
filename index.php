<?php 
include 'src/db.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src ="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="dist/app.css">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="https://pluspng.com/spotify-logo-png-5753.html" title="Image from pluspng.com"><img class="logo" src="https://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="Spotify Logo PNG"></a>
        <ul id='header-menu'>
            <li>Home</li>
            <li>Playlist</li>
            <li>La tua musica</li>
            <li>Filtra per genere: 
                <select name="" id="select-genre">
                    <option value="Rock">Rock</option>
                    <option value="Pop">Pop</option>
                    <option value="Metal">Metal</option>
                    <option value="Jazz">Jazz</option>
                </select>
            </li>
            
        </ul>    
        </header>
    <main>
        <div class="container">
            <?php foreach ($database as $album) {?>
                <div class="card">
                
                    <img class='cover' src="<?php echo $album['poster'] ?>" alt="">
                    <p> <?php echo $album['title']; ?> </p> 
                    <p><?php echo $album['author'] ?></p>
                    <p><?php echo $album['year'] ?></p>
                </div>
            <?php } ?>
    
    
        </div>

    </main>
    
</body>
</html>