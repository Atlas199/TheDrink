<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>The Drink</title>
        <?php include 'View/head.php'; ?>
    </head>
    <body>
      <?php session_start();?>
      <?php include 'View/header.php'; ?>
        <?php
        if ($_GET) {
          require_once 'Controller/' . $_GET['c'] . '.php';
        } else {
          include 'View/home.php';
        }        
        ?>
        <?php include 'View/footer.php'; ?>
    </body>
</html>
