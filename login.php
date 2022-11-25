<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="icon" type="image/x-icon" href="./imgs/favicon.ico">

</head>
<body>
  



  <body style="background-image: url(imgs/menu-bg2.png);">
    <link rel="stylesheet" href="./css/base/loginStyle.css">
  </bodylog>
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
  
  <!--Navbar-->
  
  
  <div class="container" id="container">
  <div class="form-container sign-up-container">
    <form action="#">
      <h1 class="text-cr" style="font-size: 35;">Crear Cuenta</h1>
      
      
      <input type="text" placeholder="Nombre" />
      <input type="email" placeholder="Email" />
      <input type="password" placeholder="Password" />
      <button class="btnLog">Registrarse</button>
    </form>
  </div>
  <div class="form-container sign-in-container">
    <form action="admin.php">
      <h1 class="text-cr" style="font-size: 35;">Iniciar Sesión</h1>
      
      
      <input type="email" placeholder="Email" />
      <input type="password" placeholder="Password" />
      <a href="forgotPassword.php">Olvidaste tu contrasena?</a>
      <button class="btnLog">Iniciar Sesión</button>
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1>Bienvenido!</h1>
        <p>Para acceder a tu recetario, por favor digita tus datos personales</p>
        <button class="btnLog ghost" id="signIn">Iniciar Sesión</button>
      </div>
      <div class="overlay-panel overlay-right">
        <h1>Hola!</h1>
        <p>Digite sus datos personales e inicia a explorar tus recetas favoritas!</p>
        <button class="btnLog ghost" id="signUp">Registrarse</button>
      </div>
    </div>
  </div>
  </div>
  <script src="./js/jsLo"></script>
  
  


</body>
</html>
