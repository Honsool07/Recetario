<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recipeDetails</title>
    <link rel="icon" type="image/x-icon" href="./imgs/favicon.ico">

      

    
      <!--Bootstrap-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
      
  
     
     <!-- Styles-->
      <link rel="stylesheet" href="./css/main.css">
      <!--SWiper-->
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
      <!--Icon Line-->
      <script src="https://kit.fontawesome.com/f664eca71c.js" crossorigin="anonymous"></script>

      


</head>


<body>
   <!--Navbar Starts-->    
   <section class="container">

    <nav class="navbar navbar-expand-lg navbar-white bg-white" >
      
        
      <div class="container-fluid " >
         <a class="navbar-brand main-title" href="#" >
            <img src="./imgs/logo_web.png " alt="Logo"  width="64" height="74">
            Gustus
          </a> 
  
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
        <div class="collapse navbar-collapse justify-content-between " id="navbarSupportedContent">
         <ul class="navbar-nav ms-auto mb-2 mb-lg-0" > 
          
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorías
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="allRecipes.php">Todas</a></li>
              <li><a class="dropdown-item" href="#">Desayuno</a></li>
              <li><a class="dropdown-item" href="#">Bebidas</a></li>
              <li><a class="dropdown-item" href="#">Entradas</a></li>
              <li><a class="dropdown-item" href="#">Almuerzo</a></li>
              <li><a class="dropdown-item" href="#">Postres</a></li>
              <li><a class="dropdown-item" href="#">Sopas</a></li>
              
            </ul>
          </li>
  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Ocasiones
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="allRecipes.php">Todas</a></li>
              <li><a class="dropdown-item" href="#">Cumpleaños</a></li>
              <li><a class="dropdown-item" href="#">Día del padre</a></li>
              <li><a class="dropdown-item" href="#">Día de la madre</a></li>
              <li><a class="dropdown-item" href="#">Día del niño</a></li>
              <li><a class="dropdown-item" href="#">Navidad</a></li>
              <li><a class="dropdown-item" href="#">Semana Santa</a></li>
              <li><a class="dropdown-item" href="#">Verano</a></li>
              
            </ul>
          </li>
  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dificultades
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="allRecipes.php">Todas</a></li>
              <li><a class="dropdown-item" href="#">Fácil</a></li>
              <li><a class="dropdown-item" href="#">Intermedio</a></li>
              <li><a class="dropdown-item" href="#">Difícil</a></li>
              
            </ul>
          </li>
          
  
         </ul>
  
         <ul class="navbar-nav ms-auto">
  
          <li class="list-inline-item ">
             <a href="#"><i class="fa-solid fa-magnifying-glass  m-2 " ></i></a>
          </li>
         </ul>
     
         <form class="me-2" >
          <a href="login.php" class="btn btn-outline-success me-2">Iniciar Sesión</a>
          <a href="login.php" class="btn btn-sm btn-outline-secondary">Registrarse</a>
             
         </form>
        <ul>
          <li class="list-inline-item">
            <a href="#"><i class="fa-solid fa-user m-2"></i></a>
         </li>
        </ul>
       </div>
       
      </div>
    </nav>
   </section>

<!--Navbar ends-->

<!--Photo Description starts-->

<section style="background-color: #f8be53;" >
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        
        <img src="./imgs/yogurt.jpg" class="img-fluid"   alt="">

      </div>
      <div class="col-lg-4 offset-lg-1">
        <span class=" imp-recipe badge text-bg-light mb-5"><i class="fa-solid fa-star m-2"></i>Receta Destacada</span>
        <h1 class=" recipe-title mt-2">Yogurt Bowl</h1>
        <div class="line"></div>
        <p class="p-recipe mb-4 mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur aliquam provident repellat impedit quasi velit ipsam? Eius, blanditiis expedita dolorem ea consectetur reiciendis excepturi quas omnis repudiandae, ab, facilis corporis!</p>
        <a href="#" class="btn-header">Votar</a>
      </div>

    </div>

  </div>

</section>
<!--Photo /Description ends-->

<!--List starts-->

<div class="container">
  <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
      <li class="breadcrumb-item"><a href="allRecipes.php">Postres</a></li>
      <li class="breadcrumb-item active" aria-current="page">Yogurt Bowl</li>
    </ol>
  </nav>
</div>



<section class="container mt-5">

  <ul class="list-group">
    <li class="list-group-item m-2 imp-recipe" style="color:#ff5d07;"><i class="fa-solid fa-thumbs-up  fa-xl m-2"></i>Votos totales:
      <span class="txt-recipe">613</span>
    </li>
    <li class="list-group-item m-2 imp-recipe "><i class="fa-solid fa-utensils fa-xl m-2 " ></i>Categorias:
      <span class="txt-recipe">Desayuno</span>
    </li>
    
    <li class="list-group-item m-2 imp-recipe"><i class="fa-solid fa-champagne-glasses fa-xl m-2 "></i>Ocasiones:
       <span class="txt-recipe">Cumpleaños</span>
      </li>
    <li class="list-group-item m-2 imp-recipe"><i class="fa-solid fa-chart-simple fa-xl m-2 "></i>Dificultad:
      <span class="txt-recipe">Fácil</span>
    </li>
    <li class="list-group-item m-2 imp-recipe"><i class="fa-solid fa-bowl-food fa-xl m-2"></i>Porciones: 
      <span class="txt-recipe">5</span>
    </li>
    <li class="list-group-item m-2 imp-recipe"><i class="fa-regular fa-clock fa-xl m-2"></i>Tiempo Total:
      <span class="txt-recipe">20 min</span>
    </li>
  </ul>

</section>
<!--List ends-->

<!--Ingredients starts-->

<section class="container-sm mt-5" style="background-color: #f8be53;">
  
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="prep-titles m-2 text-white" >Ingredientes</h1>
          <span class="badge rounded-pill text-bg-light md-font">Tiempo de preparacion:10min</span><br>
          <div class="line"></div>
          <p class="p-instr mb-4 mt-3 lh-lg">
            1 Taza de fruta picadita a elección <br>
            1/4 Taza de miel <br>
            1 Cucharada de agua <br>
            Ralladura de 1 limón  <br>
            2 Tazas de yogurt del sabor de tu preferencia <br>
            1/4 Taza Cereal BTS®
          </p>
          
        </div>
        
      </div>
    </div>
    
</section>

<!--Ingredients ends-->

<!--Instructions starts-->

<section class="container-sm mt-5">
  
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class=" prep-titles m-2">Instrucciones</h1>
        <span class="badge rounded-pill text-bg-warning md-font">Tiempo de cocción:10min</span><br>
        <div class="line"></div>
        <p class="p-instr mb-4 mt-3 lh-lg" >
         <span style="text-decoration: underline; font-weight:900;">Paso 1: </span><br>
         Lleva la taza de fruta, la miel, el agua y la ralladura de limón a una olla pequeña y calienta durante 5 minutos. Retira y deja enfriar
        </p>
        <p class="p-instr mb-4 mt-3 lh-lg" >
          <span style="text-decoration: underline; font-weight:900;">Paso 2: </span><br>
          Toma un vaso o frasco y vierte la mitad del yogurt. Luego añade la fruta y vierte el resto del yogurt. Añade el Cereal Fitness y sirve
         </p>

        
      </div>
      
    </div>
  </div>
  
</section>

<!--Instructions ends-->


<!--Recomended starts-->
<section  class="mt-3" style="background-color: #f8be53;" >
  <div class="sec-wp container-fluid  ">
      <div class="container-sm mb-2 ">
          <div class="row">
              <div class="col-lg-12">
                  <div class="sec-title text-left">
                      
                  
                      <h2 >    
                          <a class=" h2-title text-white"  href="recipeDetails.php">Recetas Recomendadas</a>
                      </h2>
                     
                  </div>
              </div>
          </div>
          <div class="container-sm text-left">
              <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-1">
                <div class="col">
                   <div class="p-2 ">
                        <div class="card shadow p-0.5 mb-5 bg-body rounded " >
                            <img src="./imgs/ice-cream.jpg" class="rounded float-start card-img-top" alt="food"> 
                             <div class="card-body">
                              <span class="badge rounded-pill text-bg-info mb-2">Postre</span>
                                  
                                 <h6 class="card-title">Bora Ice Cream </h6>
                                 <a href="#" class="btn btn-card">Votar</a>
                            
                            
                              </div>
                        </div>
                   </div>
                </div>
                  
                <div class="col">
                  <div class="p-2 ">
                       <div class="card shadow p-0.5 mb-5 bg-body rounded" >
                           <img src="./imgs/menu-5.jpg" class="rounded float-start  card-img-top" alt="food"> 
                            <div class="card-body">
                              <span class="badge rounded-pill text-bg-info mb-2">Postre</span>
                                <h6 class="card-title">Suga Cake</h6>
                                <a href="#" class="btn btn-card">Votar</a>
                           
                           
                             </div>
                       </div>
                  </div>
               </div>
               <div class="col">
                  <div class="p-2 ">
                       <div class="card shadow p-0.5 mb-5 bg-body rounded" >
                           <img src="./imgs/menu-3.jpg" class="rounded float-start  card-img-top" alt="food"> 
                            <div class="card-body">
                              <span class="badge rounded-pill text-bg-info mb-2">Postre</span>
                                <h6 class="card-title">RMs Hotteoks</h6>
                                <a href="#" class="btn btn-card">Votar</a>
                           
                           
                             </div>
                       </div>
                  </div>
               </div>
              <div class="col">
                  <div class="p-2 ">
                       <div class="card shadow p-0.5 mb-5 bg-body rounded" >
                           <img src="./imgs/menu-4.jpg" class="rounded float-start  card-img-top" alt="food"> 
                            <div class="card-body">
                              <span class="badge rounded-pill text-bg-info mb-2">Postre</span>
                              <h6><a class="card-title" href="recipeDetails.php">Hopes Croffle</a></h6>
                                <a href="#" class="btn btn-card">Votar</a>
                           
                           
                             </div>
                       </div>
                  </div>
               </div>

               
              </div>
          
            
             
            
            
        </div>  
      </div>      
  </div>
</section>
<!---recomended ends-->




<!--Footer starts-->

<footer class="bg-dark text-white pt-5 pb-4">
 
    <div class="container text-left text-md-left">
       <div class="row text-left text-md-left">
         <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h5 class=" mb-4 font weight-bold text-warning main-title" >Gustus</h5>
              <p class="md-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores modi maxime ullam perferendis! Quidem deserunt eaque, vero eligendi </p>
  
         </div>
         <div class="col-mmd-2 col-lg-2 col-xl-2 mx-auto mt-3" >
                 <h5 class=" txt-footer text-uppercase mb-4 font-weight-bold text-warning">Categorias</h5>
                 <p>
                  <a href="#" class="text-white" style="text-decoration:none  ;"> Almuerzo</a>
                 </p>
  
                 <p>
                  <a href="#" class="text-white" style="text-decoration:none ;"> Desayuno</a>
                 </p>
                 <p>
                  <a href="#" class="text-white" style="text-decoration:none ;"> Postres</a>
                 </p>
  
                 <p>
                  <a href="#" class="text-white" style="text-decoration:none ;"> BTS</a>
                 </p>
  
         </div>
             <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">  
               <h5 class=" txt-footer text-uppercase mb-4 font-weight-bold text-warning"> Links</h5>
               
               <p>
                <a href="#" class="text-white" style="text-decoration:none ;"> Tu Cuenta</a>
               </p>
  
               <p>
                <a href="#" class="text-white" style="text-decoration:none ;"> Registrarse</a>
               </p>
               <p>
                <a href="#" class="text-white" style="text-decoration:none ;"> Todas las Recetas</a>
               </p>
  
               <p>
                <a href="#" class="text-white" style="text-decoration:none ;"> BTS</a>
               </p>
  
             </div >    
             <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                   
              <h5 class=" txt-footer text-uppercase mb-4 font-weight-bold text-warning">Contacto</h5>
              <p>
                <i class="fas fa-home mr-3"></i> Esparza, EP 0613, CR
  
              </p>
  
              <p>
                <i class="fas fa-envelope mr-3"></i> gustus@gmail.com
              </p>
              <p>
                <i class="fas fa-phone mr-3"></i> +07 144340
              </p>
  
              <p>
                <i class="fas fa-print mr-3"></i> +13 06132013
              </p>
             </div>      
  
           </div>
  
             <hr class="mb-4">
             <div class="row align-items-center">
               <div class="col-md-7 col-lg-8">
                  <p>Copyright ©2022 All rights reserved by:
                     <a href="#" style="text-decoration:none">
                        <strong class="text-warning">Gustus</strong>
  
                    </a></p>
               </div>
               <div class="col-md-5 col-lg-4">
                        <div class="text-center text-md-right">
                            <ul  class=" list-unstyled list-inline">
                              <li class="list-inline-item">
                                <a href="#" class=" txt-footer2 btn-floating btn-sm text-white" ><i class="fab fa-facebook fa-sm" ></i></a>
                              </li>
                                  
                              <li class="list-inline-item">
                                <a href="#" class=" txt-footer2 btn-floating btn-sm text-white" ><i class="fab fa-twitter fa-sm" ></i></a>
                              </li>
  
                              <li class="list-inline-item">
                                <a href="#" class=" txt-footer2 btn-floating btn-sm text-white"><i class="fab fa-google-plus fa-sm" ></i></a>
                              </li>
  
                              <li class="list-inline-item">
                                <a href="#" class="txt-footer2 btn-floating btn-sm text-white" ><i class="fab fa-linkedin fa-sm" ></i></a>
                              </li>
  
                              <li class="list-inline-item">
                                <a href="#" class="txt-footer2 btn-floating btn-sm text-white" ><i class="fab fa-youtube fa-sm" ></i></a>
                              </li>
  
  
  
  
                            </ul>
                           
                        </div>
               </div>
            </div>
  
    </div>
  
  
  </footer>
  
  <!--Footer ends-->
  
  
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="./js/script.js"></script>
  
</body>
</html>