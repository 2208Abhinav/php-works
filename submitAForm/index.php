<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Form submission</title>

  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<body>
  <div class="container">
    <h1>Submit a form</h1>

    <form action="php/success.php" method="post" id="form">
      <!--name&UserEnteredString pair or name&UserSelectedValue pair-->

      <label for="fname">First name</label>
      <input type="text" id="fname" name="fname" autofocus required placeholder="Jane" size="15" minlength="3" maxlength="15">
      <br><br>

      <label for="lname">Last name</label>
      <input type="text" id="lname" name="lname" required placeholder="Doe" size="15" minlength="3" maxlength="15">
      <br><br>

      <label for="ftname">Father's first name</label>
      <input type="text" id="ftname" name="ftname" required placeholder="John" size="15" minlength="3" maxlength="15">

      <p>Gender</p>
      <input type="radio" id="r1choice1" name="gender" value="Male" required>
      <label for="r1choice1">Male</label>
      <input type="radio" id="r1choice2" name="gender" value="Female" required>
      <label for="r1choice2">Female</label>
      <br><br>

      <label for="email">Email address</label>
      <input type="text" id="email" name="email" placeholder="jane@example.com" size="30" minlength="10" maxlength="30" required>
      <br><br>

      <label for="bdate">Birthdate</label>
      <input type="date" id="bdate" name="bdate" required>
      <br><br>

      <label for="country">Country of current residence</label>
      <input type="text" id="country" name="country" placeholder="The United Kingdom of Great Britain and Northern Ireland" size="50" minlength="4" maxlength="50" required>

      <p>You like</p>
      <input type="checkbox" id="chchoice1" name="youlike[]" value="Listening to music">
      <label for="chchoice1">Listening to music</label>
      <br>
      <input type="checkbox" id="chchoice2" name="youlike[]" value="Hiking up a mountain">
      <label for="chchoice2">Hiking up a mountain</label>
      <br>
      <input type="checkbox" id="chchoice3" name="youlike[]" value="Travelling to new places">
      <label for="chchoice3">Travelling to new places</label>
      <br>
      <input type="checkbox" id="chchoice4" name="youlike[]" value="Reading books">
      <label for="chchoice4">Reading books</label>
      <br>
      <input type="checkbox" id="chchoice5" name="youlike[]" value="Surfing the web">
      <label for="chchoice5">Surfing the web</label>
      <br>
      <input type="checkbox" id="chchoice6" name="youlike[]" value="Making memes">
      <label for="chchoice6">Making memes</label>
      <br>
      <input type="checkbox" id="chchoice7" name="youlike[]" value="None of the above" checked>
      <label for="chchoice7">None of the above</label>

      <p>You are</p>
      <input type="radio" id="r2choice1" name="youre" value="an enthusiast of all sorts" required>
      <label for="r2choice1">An enthusiast of all sorts</label>
      <br>
      <input type="radio" id="r2choice2" name="youre" value="a versatile specialist" required>
      <label for="r2choice2">A versatile specialist</label>
      <br>
      <input type="radio" id="r3choice3" name="youre" value="a pretentious person" required>
      <label for="r2choice3">[insert] A catchy Quora-like intro</label>
      <br><br>

      <label for="changeToSee">Write below a change that you would like to see in your country at the moment.</label>
      <br><br>
      <textarea id="changeToSee" name="changeToSee" cols="35" rows="5" minlength="20" maxlength="140" required></textarea>
      <br><br>

      <button type="submit">Submit</button>
    </form>
  </div>

  <!-- Latest compiled and minified jQuery-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
