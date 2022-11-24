
<?php 
require 'db.php';
$complex = $database->select ("tb_recipe_complex","*");
$category = $database->select ("tb_recipe_category","*");
$occasions = $database->select ("tb_recipe_occasions","*");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agregarReceta</title>

    <link rel="icon" type="image/x-icon" href="./imgs/favicon.ico">
    

      <!--Icon Line-->
      <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
      <!--Bootstrap-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
     <!-- Styles-->
      <link rel="stylesheet" href="./css/main.css">
     


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
    </nav>
   </section>
  

<!--Navbar ends-->

<section class="container mt-5">
  <nav class="nav nav-pills nav-justified">
    <a class="nav-link"  href="admin.html">Recetas Registradas</a>
    <a class="nav-link active" aria-current="page" href="agregarReceta.html">Agregar Receta</a>
    
  </nav>
</section>


<form action="response.php" method="post" enctype="multipart/form-data">
<section class="container mt-5">

    <div class="row">
      <div class="col">
        <label for="formFile" class="form-label imp-recipe" >Imagen de la Receta</label>
        <input class="form-control" type="file" id="formFile">
      </div>
      <div class="col">
        <label for="nombre-receta" class="form-label imp-recipe">Nombre de la Receta</label>
        <input type="text" class="form-control" id="nombre-receta" required>
      </div>
    </div>
    
    <div class="row">
      <div class="col">
        <label for="descripcion" class="form-label imp-recipe" >Descripcion</label>
      <textarea class="form-control" id="descripcion"></textarea>
      </div>
      <div class="col">
        <label for="validationTextarea02" class="form-label imp-recipe" >Ingredientes</label>
      <textarea class="form-control" id="validationTextarea02" ></textarea>
      </div>
    </div>
    

    <div class="row">
      <div class="col">
        <label for="tiempo-preparacion" class="form-label imp-recipe" >Tiempo de preparacion</label>
      <input type="text" class="form-control" id="tiempo-preparacion" required>
      </div>
      <div class="col">
        <label for="validationTextarea03" class="form-label imp-recipe">Instrucciones</label>
        <textarea class="form-control" id="validationTextarea03"></textarea>
      </div>
    </div>


    <div class="row">
      <div class="col">
        <label for="tiempo-coccion" class="form-label imp-recipe" >Tiempo de Cocción</label>
      <input type="text" class="form-control" id="tiempo-coccion" required>
      </div>
      <div class="col">
        <label for="categoria" class="form-label imp-recipe">Categorias</label>
        <select name="categoria" class="form-select" id="categoria" required>
          
        <?php 

         $len = count($category);  
         for($i=0; $i < $len; $i++) {       
            echo '<option value="'.$category[$i]       
            ['id_recipe_category'].'">'.$category[$i]
            ['recipe_category'].'</option>';
         }
         ?>

        </select>
  
       </div>
     
        <div class="col">
          <label for="porciones" class="form-label imp-recipe">Porciones</label>
          <input type="text" class="form-control" id="porciones" required>
        </div>
        
    </div>


    <div class="row">
      <div class="col">
        <label for="ocasiones" class="form-label imp-recipe">Ocasiones</label>
        <select name="ocasiones" class="form-select" id="ocasiones" required>

        <?php 

         $len = count($occasions);  
         for($i=0; $i < $len; $i++) {       
            echo '<option value="'.$occasions[$i]       
            ['id_recipe_occasions'].'">'.$occasions[$i]
            ['recipe_occasions'].'</option>';
         }
         ?>

      </select>
      </div>
      <div class="col">
        <label for="dificultad" class="form-label imp-recipe">Dificultad</label>
       <select name="dificultad" class="form-select" id="dificultad" required>

       <?php 

         $len = count($complex);  
         for($i=0; $i < $len; $i++) {       
            echo '<option value="'.$complex[$i]       
            ['id_recipe_complex'].'">'.$complex[$i]
            ['recipe_complex'].'</option>';
         }
         ?>


       </select>
      </div>

      <div class="col">
        <label for="validationCustom10" class="form-label imp-recipe" >Cantidad de Votos</label>
        <input type="number" class="form-control" id="validationCustom10" required>
      </div>

    </div>


    <div class="row">
      <div class="col">
        <label for="tiempo-total" class="form-label imp-recipe"  >Tiempo Total</label>
        <input type="text" class="form-control" id="tiempo-total" required>

      </div>
      <div class="col">
        <label for="is_featured" class="form-label  imp-recipe" >Receta Destacada?</label>
        <select name="is_featured" class="form-select" id="is_featured" required>
          <option selected disabled value="">Elegir...</option>
          <option value="1">SI</option>
          <option value="0">NO</option>
     
        </select>
      </div>
    </div>  

     
    <div class="col-12m m-5">
      <input type="submit" value="Agregar receta">
      
     

    </div>
   
 </section>
 </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="./js/script.js"></script>
  

  

<script>     
     function click(event) {    
      event.preventDefault();     
      }     
     function readURL(input) {       
     if(input.files && input.files[0]){     
       let reader = new FileReader();       
  
       reader.onload = function(e) {

      let preview = document.getElementById('preview').setAttribute('src', e.target.result);
                }

      reader.readAsDataURL(input.files[0]);
            }
        }
    </script>




 </body>
</html>

