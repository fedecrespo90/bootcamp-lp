<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="es" xml:lang="es">    
<head>
    <title>Transportes</title>
    <meta charset="UTF-8">
    <link href="css/estilo.css" rel="stylesheet">
</head>
<body>
    <div id="header">
        <h1>Transportes</h1>
    </div>
    <div id="cuerpo">
        <form action="controller/index.php" method="post">
            <input type="radio"  name="transport" value="bike"  required>Bike<br>
            <input type="radio"  name="transport" value="car"   required>Car<br>
            <input type="radio"  name="transport" value="plane" required>Plane<br>
            <input type="number" name="passengers" required><br>
            <input type="submit" value="Travel!">
        </form>
        <div id="message"><?php if(isset($_GET["error"])){echo($_GET["error"]);}?></div>
    </div>
</body>
</html>