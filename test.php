<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap form help</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
    body
    {
      padding-top:2em;
    }
    form
    {
      border:0.1em solid #CCCCCC; /* 1/16 */
      padding:1em;
    }
    </style>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="row">
      <div class="container">
        <div class="col-md-12">
          <?php
          require_once 'bsformhelp.class.php';
          $fh = new bsformhelp;
          $input = $fh->input('text', $name = 'name', $label = 'Name', $value = NULL, $placeholder = 'Add your text');
          $fieldArray = array(
            $fh->input('text', $name = 'name', $label = 'Name', $value = NULL, $placeholder = 'Add your name'),
            $fh->input('text', $name = 'address', $label = 'Address', $value = NULL, $placeholder = 'Add your address')
          );
          // echo $fh->holder(NULL, NULL, $input, NULL, NULL);
          echo $fh->holder(NULL, NULL, $fieldArray, NULL, NULL);
          ?>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>