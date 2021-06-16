<?php
if (isset($_GET['err'])) {
$err = $_GET['err'];
} else {
$err = "404";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <link href="../src/bootstrap.css" rel="stylesheet">
    <link href="../src/style.css" rel="stylesheet">

    <title>Error <?php echo $err; ?> - Pocket, Inc.</title>
</head>
<body class="bg-success">
<?php require("../nav.php"); ?>

<div class="w-100 h-50 bg-success container text-light" id="header">
    <center>
        <img src="../src/logo.png" style="width: 25%;height: 25%">
        <h3 style="font-family: 'Roboto Thin'">Error <?php echo $err; ?>.</h3>

        <hr class="bg-light w-25">
    </center>
</div>
<div class="container text-light">
    <center>
        <?php
        if ($err == "404") {
        echo "<p>File not found!</p>";
        } else if ($err == "500") {
        echo "<p>Internal Server Error, Contact Support!</p>";
        } else if ($err == "403") {
        echo "<p>Forbidden, You're not allowed there.</p>";
        }
        ?>
        <a class="btn btn-outline-danger" href="../">Go Back</a>
    </center>
</div>
<center>
    <hr class="bg-light w-25">
</center>

</div>
<?php require("../footer.php"); ?>
<script src="../src/bootstrap.js"></script>
</body>
</html>