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
                overflow-y: scroll;
                margin: 0;
            }
            nav{
                width: 99vw;
            }
            h1{
                font-size: 3em;
            }
            h2{
                font-size: 2em;
                font-weight: 900;
                height: 2em;
                margin-top: 2em;
                border-top: 1px solid black;
            }
            div{
                padding-left: 1em;
                height: 100vh;
                width: 90vw;
            }
        </style>
    </head>
    <body>
        <?php include("../includes/includes.php"); ?>
        <div>
            <?php include("../includes/texti.php"); ?>
        </div>
    </body>
</html>