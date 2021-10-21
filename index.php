<?php
    require __DIR__ . '/data.php';
    require __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Spotify favicon -->
    <link rel="icon" href="https://icons-for-free.com/iconfiles/png/512/music+round+icon+spotify+icon-1320190507294268936.png">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <title>Spotify</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/spotify-logo.png" alt="Spotify Logo">
        </div>
    </header>
    <main>
        <div class="albums-container">
            <?php foreach ($database as $album) { ?>
                <div class="album">
                    <div class="image">
                        <img src="<?php echo $album["poster"]; ?>" alt="<?php echo $album["title"].' Album Image'; ?>">
                    </div>
                    <div class="info">
                        <h4 class="title"><?php echo strtoupper($album["title"]); ?></h4>
                        <h5 class="artist"><?php echo $album["author"]; ?></h5>
                        <h5 class="year"><?php echo $album["year"]; ?></h5>      
                    </div>        
                </div>  
            <?php } ?>
        </div>
    </main>
</body>
</html>