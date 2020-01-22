<html>
<body>
Hi <?php echo $_POST["nombre"]; ?> </br>
your register is complete
</body>
</html>

<?php
$f=fopen ('registro.txt','a');
fwrite ($f,$_POST['nombre']."\r\n");
fwrite ($f,$_POST['email']."\r\n");
fwrite ($f,$_POST['Tarjeta']."\r\n");
fclose ($f)
?>