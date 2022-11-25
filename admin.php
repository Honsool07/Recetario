<?php
    require 'db.php';

    //session_start();
    //if(isset($_SESSION["isLoggedIn"])){

      
    $data= $database->select("tb_recipes",[//inner
        "[>]tb_recipe_category"=>["id_recipe_category" => "id_recipe_category"]//[>]join
    ],[
        "tb_recipes.id_recipe",
        "tb_recipes.recipe_name",
        "tb_recipes.recipe_prep_time",
        "tb_recipes.recipe_cook_time",
        "tb_recipes.recipe_total_time",
        "tb_recipes.recipe_portions",
        "tb_recipes.recipe_description",

        "tb_recipes.recipe_image",
        "tb_recipes.recipe_likes",
        "tb_recipe_category.recipe_category",
        "tb_recipe_category.recipe_complex",
        "tb_recipe_category.recipe_occasions"
    ]);

   // }else{
    //    header("Location: login.php");
    //}

    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
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
          <a href="login.php" class="btn btn-outline-success me-2">Iniciar Sesión</a>
          <a href="login.php" class="btn btn-sm btn-outline-secondary">Registrarse</a>
             
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
    <a class="nav-link active" aria-current="page" href="admin.php">Recetas Registradas</a>
    <a class="nav-link" href="agregarReceta.php">Agregar Receta</a>
    
  </nav>
</section>
<section class="container mt-5">

  <div>
  <table class="table table-bordered border-pink table-hover title-regular text-center">
                <!--<thead class="title-regular text-white text-center">-->
               <tr class="badge-pink"> <!-- tr=fila th=cabecera th=atributo scope=indica celdas afectadas-->
                    <td>Imagen</td>
                    <td>Nombre receta</td> 
                    <td>Categoría</td>
                    <td>Tiempo prep</td>
                    <td>Tiempo cocción</td>
                    <td>Tiempo total</td>
                    <td>Porciones</td>
                    <td>Complejidad</td>
                    <td>Ocasión</td>
                    <td>Descripción</td>
                    <td>Likes</td>
                    <td>Opciones</td>
                </tr>
                <!--</thead>-->

                <?php

                    $len = count($data);
                    
                    for($i=0; $i<$len; $i++){
                            echo "<tr>";
                            echo "<td><img src='./imgs/".$data[$i]["recipe_image"]."'class='thumb img-25'></td>";
                            echo "<td>".$data[$i]["recipe_name"]."</td>";
                            echo "<td>".$data[$i]["recipe_category"]."</td>";
                            echo "<td>".$data[$i]["recipe_prep_time"]."</td>";
                            echo "<td>".$data[$i]["recipe_cook_time"]."</td>";
                            echo "<td>".$data[$i]["recipe_total_time"]."</td>";
                            echo "<td>".$data[$i]["recipe_portions"]."</td>";
                            echo "<td>".$data[$i]["is_featured"]."</td>";
                            echo "<td>".$data[$i]["recipe_complex"]."</td>";
                            echo "<td>".$data[$i]["recipe_occasion"]."</td>";
                            echo "<td>".$data[$i]["recipe_description"]."</td>";
                            echo "<td>".$data[$i]["recipe_ingredients"]."</td>";
                            echo "<td>".$data[$i]["recipe_steps"]."</td>";
                            echo "<td>".$data[$i]["recipe_likes"]."</td>";
                            echo "<td><a href='edit.php?id=".$data[$i]["id_recipe"]."'>Edit</a>
                            <a href='delete.php?id=".$data[$i]["id_recipe"]."'>Delete</a> <a href='likes.php?id=".$data[$i]["id_recipe"]."'>Likes</a></td>";
                            echo "</tr>";
                            
                        }

                ?>
                
            </table>

  </div>

</section>
  

  
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="./js/script.js"></script>
  
</body>
</html>