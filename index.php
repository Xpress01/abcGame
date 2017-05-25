<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div>
  <label for="rebel">Light Side</label>
  <input type="radio" name="alliance" id="rebel" onclick="validateAlliance()"/>
  <label for="rebel">Dark Side</label>
  <input type="radio" name="alliance" id="sith" onclick="validateAlliance()"/>
</div>

<div id="loadAlliance">

</div>


<script>
function validateAlliance(){
    if(document.getElementById("rebel").checked){
      $("#loadAlliance").load("rebel-list.html");
    } else if (document.getElementById("sith").checked) {
      $("#loadAlliance").load("sith-list.html");
    }
}
</script>
</body>
</html>
