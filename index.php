<?php
    //comentarios
    /* comentarios de bloque */

   /*  $status = true; //boolean
    $name = "string"; //string
    $val = 1234; //number
 */
    require 'db.php';
    $data = $database->select("tb_recipe_category", "*");

?>
<!-- comentario -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- https://medoo.in -->
   <form action="response.php" method="post" enctype="multipart/form-data"> <!--atributo para enviar archivos desde el form-->

    <label for="recipe">Recipe</label>
    <input type="text" name="recipe">
    <label for="category">Category</label>
    <select name="category" id="">
        <?php
            $len = count($data);
            for($i=0; $i<$len; $i++){
                echo '<option value="'.$data[$i]
                ['id_recipe_category'].'">'.$data[$i]
                ['recipe_category'].'</option>';
            }

        ?>

    </select>
    <label for="time">Prep. time</label>
    <input type="text" name="time">

    <br>
    <label for="recipe_image">Imagen principal</label>
    <img id="preview" src="./images/preview.png" width="125" height="125" alt="Preview">
    <input id="recipe_image" type="file" name="recipe_image" onchange="readURL(this)">
    <br>
     
    <p>Ingredients</p>        
    <div id="ingredients">

    </div>    
    <button type="button" id="add-ingredient">Add ingredient</button>
    <br>
    <input type="submit" value="SUBMIT">
            <!-- <label for="ingredients">Ingredients</label>
            <input type="text" name="ingredients">
            <button>remove</button> -->
   </form>

   <script>
       function readURL(input) {
            if(input.files && input.files[0]){
                let reader = new FileReader();

                reader.onload = function(e) {
                    let preview = document.getElementById('preview').setAttribute('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        document.querySelector('#add-ingredient').addEventListener('click', function(){
            
            event.preventDefault();
            let ingredient = document.createElement("div");
            let id = "ingredient-"+Date.now();
            ingredient.id = id;
            document.querySelector('#ingredients').appendChild(ingredient);

            let label = document.createElement("label");
            label.innerText = "Ingredient";
            label. setAttribute('for', 'ingredient')
            document.querySelector('#'+id).appendChild(label);

            let input = document.createElement("input");
            input.type = "text";
            input.setAttribute('name', 'ingredients[]');
            document.querySelector('#'+id).appendChild(input);

            let btn = document.createElement("button");
            btn.innerText = "remove";
            btn.addEventListener("click", function(){
                document.querySelector('#'+id).remove();
            });
            document.querySelector('#'+id).appendChild(btn);

        });

   </script>

</body>
</html>