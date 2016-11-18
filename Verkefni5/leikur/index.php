<?php
    $tala = rand(1,5);
    $vinningstalan = rand(1,5);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,height=device-height, initial-scale=1">
        <link rel="icon" href="images/ptx_logo.jpg">
        <title>Pentatonix - Harpan</title>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <?php include("../includes/style.php"); ?>
        <style>
            body{
                background: gray;
            }
            div{
                text-align: center;
                z-index: 2;
            }
            p{
                z-index: 2;
            }
            .hula{
                background: gray;
                z-index: 4;
                height: 10em;
                width: 100vw;
                position: absolute;
                margin-top: 5em;
                animation-name: example;
                animation-duration: 4s;
            }
            @keyframes example {
            0% {margin-top: 0;}
            10% {margin-top: 2em;}
            100% {margin-top: 5em;}
            }
        </style>
    </head>
    <body>
        <?php include("../includes/includes.php"); ?>
        <div>
            <p>Talan þín er: <?php echo $tala ?></p>
            <br>
            <br>
            <p>Vinningstalan:</p>
            <br>
            <br>
            <div>
                <div class="hula">
                </div>
                    <p><?php echo $vinningstalan ?></p>
                    <?php if($tala === $vinningstalan){ ?>
                    <p>Til hamingju, þú vannst!!</p>
                    <?php } ?>
            </div>
        </div>
    </body>
</html>