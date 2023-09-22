<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main" style="background-color :lightBlue; width:50% ; border-radius: 10px; position:relative; align-item:center;margin:50px;" >

    <form action="process.php" method="post">

Size : <input type="text" name="number" placeholder="Enter the number"><br>


<fieldset >
<legend ><h3>Pick Your Pattern</h3> </legend>
    <input type="radio" id="html" name="design" value="1"><br>
   <label for="html">*<br>
**<br>
***<br>****</label><br>
<input type="radio" id="css" name="design" value="2"><br>

<label for="css">*****<br>*****<br>*****</label><br> 
</fieldset>


</form>
    </div>


</body>
</html>