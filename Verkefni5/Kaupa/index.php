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
            form{
                text-align: center;
                margin-top: 3em;
            }
        </style>
    </head>
    <body>
        <?php include("../includes/includes.php"); ?>
        <form action="../sold.php" method="post">
            Nafn:<br>
            <input type="text" required><br>
            Email:<br>
            <input type="email" required><br>
            Sími:<br>
            <input type="tel" required><br>
            Hvenær:<br>
            <select name="tonleikar">
                <option value="0">--------------</option>
                <option value="1">Nr.1 Laugardag</option>
                <option value="2">Nr.2 Laugardag</option>
                <option value="3">Nr.1 Sunnudag</option>
                <option value="4">Nr.1 Sunnudag</option>
            </select><br>
            Hve margir miðar:<br>
            <input type="text" required><br>
            <input type="submit">
        </form>
    </body>
</html>