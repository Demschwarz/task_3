<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css"/>
        <title>Third Task</title>
    </head>
    <body>
<form action="" method="POST">
  <input name="fio" placeholder="Your name"/><br>
  
  <input name="email" placeholder="Your email"/><br>
  <span>Birth year</span>
  <select name="year">
  <?php for($i = 1900; $i < 2020; $i++) {?>
  <option value="<?php print($i);?>"><?php print($i);?></option>
  <?php }?>
  </select>
  
  <div class = "row">
  <input type="radio" id="male"
           name="gender" value="1">
  <label for="male">Male</label>
  <input type="radio" id="female"
           name="gender" value="0">
  <label for="female">Female</label>
  </div>
  
  <div class="row">
  <span>Count of lungs:</span><br>
  <input type="radio" id="zero"
           name="lungs" value="0">
  <label for="zero">No lungs</label>
  <input type="radio" id="more"
           name="lungs" value="1">
  <label for="more">One or more lung</label>
  </div>
  
  <span>Superpowers</span><br>
  <select name="abilities[]" multiple>
  <option value="immortality">Immortality</option>
  <option value="wallhack">Wallhack</option>
  <option value="levitation">Levitation</option>
  </select>
  
  Biography:<br>
  <textarea name="biography">
	  
  </textarea><br>
  
  <input type="checkbox" checked="checked" name="check">
		  I do agree with all the conditionss
  <br>
  <input type="submit" value="ok" />
</form>
</body>
</html>