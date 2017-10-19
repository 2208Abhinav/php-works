<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Form submitted</title>
  <link rel="stylesheet" type="text/css" href="../css/main.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<body>
  <div class="container">
    <h1>Submit a form</h1>

    <div id="form">
      <?php
        //var_dump($_POST);
        require "../php/calc.php";
      ?>
      <p>Form submitted successfully!</p>
      <button type="button" id="view-btn">View entered data</button>
      <div id="endata">
        <p>
          <?php echo "{$firstName}, {$relation} of {$fathersName}, belongs to the {$lastName} clan."; ?>
        </p>

        <p>
          <?php echo "{$prep} is {$age} years old noob, liked to be called as \"{$youAreA}\", besides which {$firstName} also likes:"; ?>
        </p>

        <ul>
          <?php foreach ($_POST["youlike"] as $like): ?>
            <li><?php echo "{$like}<br>"; ?></li>
          <?php endforeach; ?>
        </ul>

        <p><?php echo "{$firstName} currently resides in {$country} where ".strtolower($prep)." would really like to see a change, i.e,"; ?></p>

        <p><?php echo "\"{$changeToSee}\""; ?></p>

        <p><?php echo "You may contact this animal at {$email}."; ?></p>
      </div>
    </div>
  </div>

  <!-- Latest compiled and minified jQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="../js/main.js"></script>
</body>
</html>
