<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangas streaming</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/index.css">
    <link rel="icon" type="image/x-icon" href="./image/logo.png">
    
</head>
<body>
    <header>
        <div id="log">
            <img src="./image/logo.png" alt="logo">
            
            <a href="#"> <i class="fa-solid fa-circle-user avatar"></i>  </a>
        </div>
        <div id="head">
            <h1>MANGAS STREAM</h1>
            <form action="#" id="searchbar">
                <input type="search" name="rech" id="rech">
                <button type="submit"><i class="fa-solid fa-magnifying-glass icone"></i></button>
            </form>
        </div>
        <!--  -->
        <div class="container">
            <input type="checkbox" id="chk1" data-valeur="change">
            <label for="chk1">
                <div class="hamberger">
                <span></span>
                <span></span>
                <span></span>
                </div>
            </label>
        </div>
        <nav id="nav">
            <ul>
                <li><a href="#"><span>Acceuil</span></a></li>
                <li><a href="#">Liste Anime</a></li>
                <li><a href="#"><span>Scan</span></a></li>
                <li><a href="#">Film</a></li>
                <li><a href="#"><span>Genres</span></a></li>
            </ul>
        </nav>
        
    </header>

    <section id="sct">
        <article id="episodeDay">
            <h2>Episode du jour</h2>
        </article>
        <!--  -->
        <article id="scanDay">
            <h2>Scan du jour</h2>
        </article>
    </section>

    <footer>
        <h3>CONTACTEZ-NOUS</h3>
        <div> 
            <ul>
                <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
            </ul>
        </div>
    </footer>
</body>
<script src="./script.js"></script>
</html>