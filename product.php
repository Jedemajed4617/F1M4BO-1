<?php
require 'functions.php';
$connection = dbConnect();

//checken of id wel is meegestuurd in de url
if ( !isset($_GET['id']) ){
    echo "jaap";
    exit;
}

//checken of het wel een getal is
$id = $_GET['id'];
$check_int = filter_var($id, FILTER_VALIDATE_INT);
if($check_int == false){
    echo "dit is geen getal(integer) #jijbengay";
    exit;
}


$statement = $connection->prepare('SELECT * FROM `product` WHERE id=?');
$params = [$id];
$statement->execute($params);
$place = $statement->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <script src="/js/main.js" defer></script>
    <link rel="shortcut icon" href="/photo/StormLogo.webp" type="image/x-icon">
    <link href="https://cdn.sellix.io/static/css/embed.css" rel="stylesheet"/>
    <script src="https://cdn.sellix.io/static/js/embed.js"></script>
    <title>Storm Services</title>
</head>

<script type='text/javascript'>
    // Titel scroll animatie
    msg = document.title;
    msg = msg + "          ";
    position = 0;
    
    function scrolltitle() {
      document.title = msg.substring(position, msg.length) + msg.substring(0, position);
      position++;
      if(position > msg.length) position = 0
      window.setTimeout("scrolltitle()", 250);
    }
    scrolltitle();
</script>

<header>
    <div class="content typewriter noselect">
        <hgroup>
            <h1>Storm Services</h1>
            <p>
                <i>
                    For all your Fivem Unbans!
                </i>

            </p>
        </hgroup>
    </div>
</header>

<body class="pietje noselect">
    <section class="site">
        <nav>
            <a href="home.php">Home</a>
            <a href="http://www.discord.gg/st0rmcommunity" target="_blank">Discord</a>
            <a href="about.php">About</a>
            <a href="product.php?id=1">Spoofer</a>
            <a href="product.php?id=2">Rockstar Gen</a>
            <a href="https://www.youtube.com/channel/UCxx1Haw-Cee__hUtwyh6tVw" target="_blank">Youtube</a>
        </nav>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="container">
        <div class="imgBx">
            <img src="<?php echo $place['image']?>" alt="Storm Spoofer Image Product Box">
        </div>
        <div class="details">
            <div class="content">
                <h2><?php echo $place['name']?><br>
                    <span><?php echo $place['optionn']?></span>
                </h2>
                <h3>€<?php echo $place['price']?></h3>
                <button data-sellix-product="<?php echo $place['price']?>" type="submit" alt="Buy Now with sellix.io" class="buystormspoof">Buy</button>
                
                
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer class="footer">

        <ul class="footerNav" class="noselect">
            <li class="footerNavItem noselect">
                <a href="/About/about.php">About</a>
            </li>
            <li class="footerNavItem">
                <a href="http://www.discord.gg/st0rmcommunity" target="_blank">Discord</a>
            </li>
            <li class="footerNavItem">
                <a href="https://www.youtube.com/channel/UCxx1Haw-Cee__hUtwyh6tVw" target="_blank">Youtube</a>
            </li>
        </ul>

        <ul class="openHours noselect">
            <li class="openHoursTime2">all rights reserved</li> <!-- miss voor later iets toevoegen -->
            <li class="openHoursTime2">Ⓒ 2022 - Storm Services</li>
        </ul>
        	

        

    </footer>
</body>

</html>