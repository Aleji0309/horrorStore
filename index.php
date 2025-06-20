<?php
    include 'models/baseDatos.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/normalize.css">
        <link rel="stylesheet" href="styles/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Savate:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <title>Tienda de Horror</title>
</head>
<body>
    <header class="header" >
        <nav class="menu-list" >
            <a href="#"> <img src="assets/img/inicio.png" alt="Nosotros"> </a>
            <a href="#"> <img src="assets/img/nosotros.png" alt="Nosotros"> </a>
            <a href="#"> <img src="assets/img/contacto.png" alt="Contacto"> </a>
            <a href="#"> <img src="assets/img/productos.png" alt="Contacto"> </a>
        </nav>

        <div class="search-container">
            <input type="search" id="site-search" name="search-bar" placeholder="Buscar Producto" class="button" />
            <img src="assets/img/lupa2.png" alt="Lupa">
        </div>
    </header>

     <section class="banner">
            <div class="banner-content">

                <div class="img-banner-container">
                    <img  class="img-banner" src="assets/img/bruja.png" alt="Imagen Banner">
                </div>
                <div class="banner-description">
                    <h1 class="banner-title">Tu Tienda Maldita</h1>
                    <p class="banner-description-p">Cuando cae la noche y el viento susurra entre las páginas olvidadas, nuestra tienda despierta...
                    Aquí no vendemos simples objetos. Vendemos fragmentos de leyendas, ecos de rituales, y huellas de criaturas que nunca deberían haber existido
                    </p>
                    <button class="banner-description-button button" >Te atreves? </button>
                </div> 
            </div>
        </section>
        

    <main class="main-container">
       <a class="sections-title">Libros</a>
        <section class="section-books">
                <?php
                    //  Recorrer el objeto que devuelve query
                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc()){
                            echo "
                                <div class='book'>
                                    <div class='img-container'><img class='product-image' src='{$row['imagen']}' alt='Imagen del Producto'></div>
                                    <h2 class='product-name'>{$row['nombre_producto']}</h2>
                                    <p  class='product-description'>{$row['descripcion']} </p>
                                    <p class='product-price'>$ {$row['precio']}</p>
                                    <button class='product-agregar-btn' >Agregar al Carrito</button>
                                </div>
                            ";
                        }
                    } else {
                        echo "NO DATA"; 
                    }  
                ?>
            <!-- </div> -->
        </section>
        <a class="sections-title">Disfraces</a>
        <a class="sections-title">Máscaras</a>
           
    </main>
    <footer></footer>
</body>
</html>