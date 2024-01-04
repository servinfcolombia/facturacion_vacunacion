<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registro de Usuarios</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <form acction="send.php" method="post">
    <img src="vacunate_solo_imagen_pequeña.png" width="100">
    <br>
    <br>
    <h2><span style="color:blue">IPS VACUNATE SAS </span></h2>
    <h3><span style="color:blue">Nit:901657616-5</span></h3>
    <br>
    <h4>Inicio de Sesion</h4>
    <br>
    <div class="input-group">
    <div class="input-container">
            <input type="text" name="Id" placeholder="Identificacion">
            <i class="fa-solid fa-user"></i>
    </div>
    <br>
        <div class="input-container">
            <input type="text" name="nombre" placeholder="Nombres">
            <i class="fa-solid fa-user"></i>
    </div>  
    <br>
    <div class="input-container">
            <input type="password" name="contraseña" placeholder="contraseña">
            <i class="fa-solid fa-lock"></i>
    </div>  
    <br>
    <div class="input-container">
            <input type="email" name="email" placeholder="Email">
            <i class="fa-solid fa-envelope"></i>
    </div>  
    <br>
    <div class="input-container">
         <input type="phone" name="telefono" placeholder="Telefono">
         <i class="fa-solid fa-phone"></i>  
    </div>
    <br>
    
    <a href="#">Terminos y condiciones</a>
    <input type="submit" name="send" class="btn" value="Enviar">

</div>  
</form>

        
</body>
</html>

