<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../src/bootstrap.css" rel="stylesheet">
    <link href="../src/style.css" rel="stylesheet">

    <title>Donate - Pocket, Inc.</title>
</head>
<body class="bg-success">
<?php require("../nav.php"); ?>

<div class="w-100 h-50 bg-success container text-light" id="header">
    <center>
        <img src="../src/logo.png" style="width: 25%;height: 25%">
        <h3 style="font-family: 'Roboto Thin'">Donate to Support our Work.</h3>

        <hr class="bg-light w-25">
    </center>
</div>
<div class="container text-light">
    <center>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
        <input type="hidden" name="cmd" value="_s-xclick" />
        <input type="hidden" name="hosted_button_id" value="L4TXSSEQN9HDJ" />
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="Donate using Paypal!" alt="Donate with PayPal button" />
        <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
    </form>
        <small>Donations are spent on improving our company on all sides, paying costs, and buying better equipment.</small>

    </center>
    </div>
    <center><hr class="bg-light w-25"></center>

</div>
<?php require("../footer.php"); ?>
<script src="../src/bootstrap.js"></script>
</body>
</html>