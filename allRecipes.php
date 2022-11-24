<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>allRecipes</title>
    <link rel="icon" type="image/x-icon" href="./imgs/favicon.ico">
    

      <!--Icon Line-->
      <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
      <!--Bootstrap-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
      
  
   
     
     <!-- Styles-->
      <link rel="stylesheet" href="./css/main.css">
      <!--SWiper-->
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
      <script src="https://kit.fontawesome.com/f664eca71c.js" crossorigin="anonymous"></script>

      
<!-- Librerias de Sliders
  Carousel https://splidejs.com/guides/getting-started/
https://swiperjs.com/get-started
https://flickity.metafizzy.co/
-->

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
              <li><a class="dropdown-item" href="todasRecetas.html">Todas</a></li>
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
              <li><a class="dropdown-item" href="todasRecetas.html">Todas</a></li>
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
              <li><a class="dropdown-item" href="todasRecetas.html">Todas</a></li>
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
          <a href="login.html" class="btn btn-outline-success me-2">Iniciar Sesión</a>
          <a href="login.html" class="btn btn-sm btn-outline-secondary">Registrarse</a>
             
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

<!--Top10 starts-->

<section class="mt-5" style="background-color: #f8be53;">
  <div class="sec-wp">
      <div class="container">
          <div class="row">
              <div class="col-lg-12">
                  <div class="sec-title text-left">
                      
                      <h2 class="h2-title mt-3 mb-3 font-color">Top 10 más votadas</h2>
                     
                  </div>
              </div>
          </div>
          <div class="container text-center">
              <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                <div class="col-md">
                  <div>
                      <div class="card shadow p-1 mb-5 bg-body rounded" >
                          <img src="./imgs/menu-1.jpg" class="rounded float-start" alt="menu1">
                          <div class="card-body">
                    
                            <span class="badge rounded-pill text-bg-info mb-2">Postre</span>
                              <h6><a class="card-title" href="recipeDetails.html">Hobi Cookies</a></h6>
                                <a href="#" class="btn btn-card">Votar</a>
                            <small class="text-muted">Votos: 613</small>
                          </div>
                        </div>
                  </div>
                  
                </div>

                <div class="col-md">
                  <div>
                      <div class="card shadow p-1 mb-5 bg-body rounded" >
                          <img src="./imgs/menu-3.jpg" class="rounded float-start" alt="menu3">
                          <div class="card-body">
                    
                            <span class="badge rounded-pill text-bg-info mb-2">Postre</span>
                              <h6><a class="card-title" href="recipeDetails.html"> Seven Drinks</a></h6>
                                <a href="likes.php?id_recipe=1" class="btn btn-card">Votar</a>
                            <small class="text-muted">Votos: 613</small>
                          </div>
                        </div>
                  </div>
                  
                </div>

                <div class="col-md">
                  <div>
                      <div class="card shadow p-1 mb-5 bg-body rounded" >
                          <img src="./imgs/menu-4.jpg" class="rounded float-start" alt="menu4">
                          <div class="card-body">
                    
                            <span class="badge rounded-pill text-bg-info mb-2">Postre</span>
                              <h6><a class="card-title" href="recipeDetails.html">Corn Ice Cream</a></h6>
                                <a href="#" class="btn btn-card">Votar</a>
                            <small class="text-muted">Votos: 613</small>
                          </div>
                        </div>
                  </div>
                  
                </div>

                <div class="col-md">
                  <div>
                      <div class="card shadow p-1 mb-5 bg-body rounded" >
                         <img src="./imgs/menu-5.jpg" class="rounded float-start" alt="menu5">
                          <div class="card-body">
                    
                            <span class="badge rounded-pill text-bg-info mb-2">Postre</span>
                              <h6><a class="card-title" href="recipeDetails.html">Mini chocolates</a></h6>
                                <a href="#" class="btn btn-card">Votar</a>
                            <small class="text-muted">Votos: 613</small>
                          </div>
                        </div>
                  </div>
                  
                </div>


                <div class="col-md">
                  <div>
                      <div class="card shadow p-1 mb-5 bg-body rounded" >
                         <img src="./imgs/menu-6.jpg" class="rounded float-start" alt="menu6">
                          <div class="card-body">
                    
                            <span class="badge rounded-pill text-bg-info mb-2">Postre</span>
                              <h6><a class="card-title" href="recipeDetails.html">Hopes Croffle</a></h6>
                                <a href="#" class="btn btn-card">Votar</a>
                            <small class="text-muted">Votos: 613</small>
                          </div>
                        </div>
                  </div>
                  
                </div>
                
              </div>
              <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                <div class="col-md">
                  <div>
                      <div class="card shadow p-1 mb-5 bg-body rounded" >
                         <img src="./imgs/menu-7.jpg" class="rounded float-start" alt="menu7">
                          <div class="card-body">
                    
                            <span class="badge rounded-pill text-bg-info mb-2">Postre</span>
                              <h6><a class="card-title" href="recipeDetails.html">Hopes Croffle</a></h6>
                                <a href="#" class="btn btn-card">Votar</a>
                            <small class="text-muted">Votos: 613</small>
                          </div>
                        </div>
                  </div>
                  
                </div>

                <div class="col-md">
                  <div>
                      <div class="card shadow p-1 mb-5 bg-body rounded" >
                         <img src="./imgs/menu-8.jpg" class="rounded float-start" alt="menu8">
                          <div class="card-body">
                    
                            <span class="badge rounded-pill text-bg-info mb-2">Postre</span>
                              <h6><a class="card-title" href="recipeDetails.html">Bora Cake</a></h6>
                                <a href="#" class="btn btn-card">Votar</a>
                            <small class="text-muted">Votos: 613</small>
                          </div>
                        </div>
                  </div>
                  
                </div>

                <div class="col-md">
                  <div>
                      <div class="card shadow p-1 mb-5 bg-body rounded" >
                         <img src="./imgs/menu-9.jpg" class="rounded float-start" alt="menu9">
                          <div class="card-body">
                    
                            <span class="badge rounded-pill text-bg-info mb-2">Postre</span>
                              <h6><a class="card-title" href="recipeDetails.html">Star Candy</a></h6>
                                <a href="#" class="btn btn-card">Votar</a>
                            <small class="text-muted">Votos: 613</small>
                          </div>
                        </div>
                  </div>
                  
                </div>

                <div class="col-md">
                  <div>
                      <div class="card shadow p-1 mb-5 bg-body rounded" >
                         <img src="./imgs/menu-1.jpg" class="rounded float-start" alt="menu1">
                          <div class="card-body">
                    
                            <span class="badge rounded-pill text-bg-info mb-2">Postre</span>
                              <h6><a class="card-title" href="recipeDetails.html">Jin Ramen</a></h6>
                                <a href="#" class="btn btn-card">Votar</a>
                            <small class="text-muted">Votos: 613</small>
                          </div>
                        </div>
                  </div>
                  
                </div>


                <div class="col-md">
                  <div>
                      <div class="card shadow p-1 mb-5 bg-body rounded" >
                         <img src="./imgs/menu-5.jpg" class="rounded float-start" alt="menu5">
                          <div class="card-body">
                    
                            <span class="badge rounded-pill text-bg-info mb-2">Postre</span>
                              <h6><a class="card-title" href="recipeDetails.html">Cheese Cake</a></h6>
                                <a href="#" class="btn btn-card">Votar</a>
                            <small class="text-muted">Votos: 613</small>
                          </div>
                        </div>
                  </div>
                  
                </div>
                
              </div>
              
       
          </div>  
      </div>      
  </div>
</section>


<!--Top10 ends-->


<!-- Por Categorias starts  -->
<section  class="mt-3">

  
  <div class="sec-wp container-fluid mt-3 ">
      <div class="container-sm ">
          <div class="row">
              <div class="col-lg-12">
                  <div class="sec-title text-left">
                      
                      
                      <h2 >    
                          <a class="h2-title mt-3" href="recipeDetails.html">Por Categorías</a>
                      </h2>
                     
                  </div>
              </div>
          </div>
          <div class="container-sm text-left">
              <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-1">
                <div class="col">
                   <div class="p-2">
                        <div class="card shadow p-0.5 mb-5 bg-body rounded" >
                            <img src="./imgs/menu-1.jpg" class="rounded float-start" alt="menu"> 
                             <div class="card-body">
                                 <h6 class="card-title">Desayuno</h6>
                            
                            
                              </div>
                        </div>
                   </div>
                </div>
                  
                <div class="col">
                  <div class="p-2 ">
                       <div class="card shadow p-0.5 mb-5 bg-body rounded" >
                           <img src="./imgs/menu-5.jpg" class="rounded float-start" alt="menu"> 
                            <div class="card-body">
                                <h6 class="card-title">Bebidas</h6>
                           
                           
                             </div>
                       </div>
                  </div>
               </div>
               <div class="col">
                  <div class="p-2 ">
                       <div class="card shadow p-0.5 mb-5 bg-body rounded" >
                           <img src="./imgs/menu-3.jpg" class="rounded float-start" alt="menu"> 
                            <div class="card-body">
                                <h6 class="card-title">Entradas</h6>
                           
                           
                             </div>
                       </div>
                  </div>
               </div>
             

               
              </div>
               
              
              
          </div>  


          <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-1">
              <div class="col">
                 <div class="p-4 ">
                      <div class="card shadow p-0.5 mb-5 bg-body rounded">
                          <img src="./imgs/menu-6.jpg" class="rounded float-start" alt="menu"> 
                           <div class="card-body">
                               <h6 class="card-title">Almuerzo</h6>
                          
                          
                            </div>
                      </div>
                 </div>
              </div>
                
              <div class="col">
                <div class="p-4 ">
                     <div class="card shadow p-0.5 mb-5 bg-body rounded" >
                         <img src="./imgs/menu-7.jpg" class="rounded float-start" alt="menu"> 
                          <div class="card-body">
                              <h6 class="card-title">Postres</h6>
                         
                         
                           </div>
                     </div>
                </div>
             </div>
             <div class="col">
                <div class="p-4 ">
                     <div class="card shadow p-0.5 mb-5 bg-body rounded" >
                         <img src="./imgs/menu-8.jpg" class="rounded float-start" alt="menu"> 
                          <div class="card-body">
                              <h6 class="card-title">Sopas</h6>
                         
                         
                           </div>
                     </div>
                </div>
             </div>
           

             
            </div>
             
            
            
        </div>  
      </div>      
</section>
<!-- categorias ends -->



<!-- Por ocasiones starts  -->
<section style="background-color: #f8be53;" >
    <div class="sec-wp container-fluid  ">
        <div class="container-sm mb-2 ">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sec-title text-left mb-20 ">
                        
                        
                        <h2 >    
                            <a class="h2-title font-color" href="recipes.html">Por Ocasiones</a>
                        </h2>
                       
                    </div>
                </div>
            </div>
            <div class="container-sm text-left">
                <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-1">
                  <div class="col">
                     <div class="p-2 ">
                          <div class="card shadow p-0.5 mb-5 bg-body rounded" >
                              <img src="./imgs/menu-1.jpg" class="rounded float-start" alt="menu"> 
                               <div class="card-body">
                                <h6><a class="card-title" href="recipes.html">Todas</a></h6>
                                
                              
                              
                                </div>
                          </div>
                     </div>
                  </div>
                    
                  <div class="col">
                    <div class="p-2 ">
                         <div class="card shadow p-0.5 mb-5 bg-body rounded" >
                             <img src="./imgs/menu-5.jpg" class="rounded float-start" alt="menu"> 
                              <div class="card-body">
                                  <h6 class="card-title">Cumpleaños</h6>
                             
                             
                               </div>
                         </div>
                    </div>
                 </div>
                 <div class="col">
                    <div class="p-2 ">
                         <div class="card shadow p-0.5 mb-5 bg-body rounded" >
                             <img src="./imgs/menu-3.jpg" class="rounded float-start" alt="menu"> 
                              <div class="card-body">
                                  <h6 class="card-title">Día del Padre</h6>
                             
                             
                               </div>
                         </div>
                    </div>
                 </div>
                <div class="col">
                    <div class="p-2 ">
                         <div class="card shadow p-0.5 mb-5 bg-body rounded" >
                             <img src="./imgs/menu-4.jpg" class="rounded float-start" alt="menu"> 
                              <div class="card-body">
                                  <h6 class="card-title">Día de la Madre</h6>
                             
                             
                               </div>
                         </div>
                    </div>
                 </div>

                 
                </div>
                 
                
                
            </div>  


            <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-1">
                <div class="col">
                   <div class="p-4 ">
                        <div class="card shadow p-0.5 mb-5 bg-body rounded" >
                            <img src="./imgs/menu-6.jpg" class="rounded float-start" alt="menu"> 
                             <div class="card-body">
                                 <h6 class="card-title">Día del Niño</h6>
                            
                            
                              </div>
                        </div>
                   </div>
                </div>
                  
                <div class="col">
                  <div class="p-4 ">
                       <div class="card shadow p-0.5 mb-5 bg-body rounded" >
                           <img src="./imgs/menu-7.jpg" class="rounded float-start" alt="menu"> 
                            <div class="card-body">
                                <h6 class="card-title">Navidad</h6>
                           
                           
                             </div>
                       </div>
                  </div>
               </div>
               <div class="col">
                  <div class="p-4 ">
                       <div class="card shadow p-0.5 mb-5 bg-body rounded" >
                           <img src="./imgs/menu-8.jpg" class="rounded float-start" alt="menu"> 
                            <div class="card-body">
                                <h6 class="card-title">Semana Santa</h6>
                           
                           
                             </div>
                       </div>
                  </div>
               </div>
              <div class="col">
                  <div class="p-4 ">
                       <div class="card shadow p-0.5 mb-5 bg-body rounded" >
                           <img src="./imgs/menu-9.jpg" class="rounded float-start" alt="menu"> 
                            <div class="card-body">
                                <h6 class="card-title">Verano</h6>
                           
                           
                             </div>
                       </div>
                  </div>
               </div>

               
              </div>
               
              
              
          </div>  
        </div>      
    
</section>
<!-- Ocasiones ends -->



<!-- Por dificultad starts  -->
<section>
   <div class="sec-wp container-fluid  ">
      <div class="container-sm">
          <div class="row">
              <div class="col-lg-12">
                  <div class="sec-title text-left mb-20 ">¿
                      <h2 >    
                          <a class="h2-title"  href="registeredRecipes.html">Por Dificultad</a>
                      </h2>
                     
                  </div>
              </div>
          </div>
          <div class="container-sm text-left">
              <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-1">
                <div class="col">
                   <div class="p-2 ">
                        <div class="card shadow p-0.5 mb-5 bg-body rounded" >
                            <img src="./imgs/menu-1.jpg" class="rounded float-start" alt="menu"> 
                             <div class="card-body">
                                 <a href="registeredRecipes.html"><h6 class="card-title">Fácil</h6></a>
                            
                            
                              </div>
                        </div>
                   </div>
                </div>
                  
                <div class="col">
                  <div class="p-2 ">
                       <div class="card shadow p-0.5 mb-5 bg-body rounded" >
                           <img src="./imgs/menu-5.jpg" class="rounded float-start" alt="menu"> 
                            <div class="card-body">
                                <h6 class="card-title">Intermedio</h6>
                           
                           
                             </div>
                       </div>
                  </div>
               </div>
               <div class="col">
                  <div class="p-2 ">
                       <div class="card shadow p-0.5 mb-5 bg-body rounded" >
                           <img src="./imgs/menu-3.jpg" class="rounded float-start" alt="menu"> 
                            <div class="card-body">
                                <h6 class="card-title">Difícil</h6>
                             </div>
                       </div>
                  </div>
               </div>
              
            
            
             
            
            
        </div>  
      </div>      
  </div>
</div>
</section>
<!-- Por dificultad ends -->




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