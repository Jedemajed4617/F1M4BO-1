<?php
//ini_set("display_errors", 1);

require 'functions.php';
$connection = dbConnect();

$result = $connection->query('SELECT * FROM plaatsen');


if(isset($_GET['message'])){
    echo '<script type="text/javascript">';
    echo ' alert("'.$_GET['message'].'")';  //not showing an alert box.
    echo '</script>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <script src="./js/main.js" defer></script>
    <link rel="shortcut icon" href="/F2M4BO/photo/stormlogo.webp" type="image/x-icon">
    <script src="jquery-2.1.4.js"></script>
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
        if (position > msg.length) position = 0
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
    <center><div class="roww">
    <?php foreach($result as $row):?>
    <section class="columnn">
        <!-- https://www.youtube.com/watch?v=yNBObeTWvio voor tutorial om hoe t maken.-->
        <article class="card kaartje1">

            <div class="imgBox">
                <img src="<?php echo $row['foto'] ?>" alt="Storm Spoofer buy card" class="mouse">
            </div>

            <div class="contentBox">
                <h3><?php echo $row['titel'] ?></h3>
                <h2 class="price">€<?php echo $row['prijs'] ?></h2>
                <a href="product.php?id=<?php echo $row['id'];?>" class="buy">View</a>
            </div>

        </article>

    </section>
    <?php endforeach;?>
    </div></center>

    
    <div class="jemaop">
            <form class="klasse" action="handlecontactform.php">

                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                <label for="country">Country</label>
                <select id="country" name="country">
                    <option value="australia">Australia</option>
                    <option value="canada">Canada</option>
                    <option value="usa">USA</option>
                    <option value="holland">The Netherlands</option>
                    <option value="russia">Russia</option>
                    <option value="france">France</option>
                    <option value="spain">Spain</option>
                    <option value="other">Other</option>
                </select>

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit">

             </form>
    </div>


    <footer class="footer">

        <ul class="footerNav" class="noselect">
            <li class="footerNavItem noselect">
                <a href="/about.php">About</a>
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