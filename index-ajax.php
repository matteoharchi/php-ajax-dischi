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
            <li>Filtra per Artista: 
                <!-- <form action="?artist=" method='post'> -->
                    <select name="" id="select-artist">
                        <option value="Queen"> Queen</option>
                        <option value="Bon Jovi">Bon Jovi</option>
                        <option value="Steve Gadd Band">Steve Gadd Band</option>
                        <option value="Iron Maiden">Iron Maiden</option>
                        <option value="Eric Clapton">Eric Clapton</option>
                        <option value="Sting">Sting</option>
                    </select>
                    <input type="submit" value="Cerca">
                <!-- </form> -->
            </li>

            
        </ul>    
        </header>
    <main>
        <div class="container">
            <script id="template" type="text/x-handlebars-template">
                <div class="card">
                
                    <img class='cover' src="{{{cover}}}" alt="">
                    <p> {{titolo}} </p> 
                    <p>{{autore}}</p>
                    <p>{{anno}}</p>
                </div>
            </script>
    
    
        </div>

    </main>
    <script src="dist/app.js"></script>
</body>
</html>