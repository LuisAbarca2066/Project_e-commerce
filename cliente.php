<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
  <title>Prueba</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: chocolate;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: chocolate;
  color: white;
}

.topnav-right {
  float: right;
}
</style>
    <!-- enlaces -->
    <div class="topnav">
  <a class="active" href="#ofertas">Tienda</a>
  <a href="#liquidaciones">Liquidaciones</a>
  <a href="carrito.php">Carrito</a>
  <div class="topnav-right">
    <a href="#cuenta">Cuenta</a>
    <a href="index.php">Salir</a>
  </div>
</div>
    <!-- enlaces -->
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light">


    <div class="container">
        <br>
     
    

        <div class="row">
       
            <div class="col-3">
                <div class=" card">
                    <img
                    title="Titulo producto"
                    alt="Titulo"
                    Class="Card-img-top"
                    src="https://cdn.shopify.com/s/files/1/1023/7433/products/JPmusical_356CE_Taylor1_600x.png?v=1569370299"
                    > 
                    <div>
                    <form action="cliente.php" method="POST">
                        <span>GUITARRA TAYLOR 356CE</span>
                        <h5>$25000</h5> 
                        <p>  ELECTROACUSTICA</p> 
                            <input type="hidden" name="title" value="GUITARRA ELECTROACUSTICA TAYLOR">
                            <input type="hidden" name="price" value="25000">
                            <button style="background-color:chocolate; border-color:chocolate" class="btn btn-primary" 
                            name="btnAccion" 
                            value="Agregar" 
                            type="submit"
                            >
                            Agregar al carrito
                            </button>
                             <input type="number" name="cant" value=" " style="width:50px;"><br>
                        </form>
                        
                    </div>       
                </div>     
            </div>
            <div class="col-3">
                <div class=" card">
                    <img
                    title="Titulo producto"
                    alt="Titulo"
                    Class="Card-img-top"
                    src="https://cdn.shopify.com/s/files/1/1023/7433/products/Taylor_250ce-BLK_DLX_Front_360x.png?v=1658445745"
                    > 
                    <div>
                    <form action="cliente.php" method="POST">
                        <span>GUITARRA EPHIFHONE 250CEB</span>
                        <h5>$32057</h5> 
                        <p> ACUSTICA</p> 
                            <input type="hidden" name="title" value="GUITARRA EPHIFHONE 250CEB">
                            <input type="hidden" name="price" value="32057">
                            <button style="background-color:chocolate; border-color:chocolate" class="btn btn-primary" 
                            name="btnAccion" 
                            value="Agregar" 
                            type="submit"
                            >
                            Agregar al carrito
                            </button>
                             <input type="number" name="cant" value=" " style="width:50px;"><br>
                        </form>
                        
                    </div>       
                </div>     
            </div>
            <div class="col-3">
                <div class=" card">
                    <img
                    title="Titulo producto"
                    alt="Titulo"
                    Class="Card-img-top"
                    src="https://cdn.shopify.com/s/files/1/1023/7433/products/FENDER_3_c2f14359-5287-422b-9b19-4fdeaf08fd14_300x.png?v=1655133437"
                    > 
                    <div>
                    <form action="cliente.php" method="POST">
                        <span>GUITARRA FENDER 0972313259</span>
                        <h5>$45000</h5> 
                        <p> ELECTROACUSTICA</p> 
                            <input type="hidden" name="title" value=" GUITARRA FENDER 0972313259">
                            <input type="hidden" name="price" value="45000">
                            <button style="background-color:chocolate; border-color:chocolate" class="btn btn-primary" 
                            name="btnAccion" 
                            value="Agregar" 
                            type="submit"
                            >
                            Agregar al carrito
                            </button>
                             <input type="number" name="cant" value=" " style="width:50px;"><br>
                        </form>
                        
                    </div>       
                </div>     
            </div>
            <div class="col-3">
                <div class=" card">
                    <img
                    title="Titulo producto"
                    alt="Titulo"
                    Class="Card-img-top"
                    src="https://cdn.shopify.com/s/files/1/1023/7433/products/Fender_FA-15_3-4Scale_WalnutFingerboard-Green_Front_2ae1163a-9b76-4267-b063-ae3c9a02aa39_300x.png?v=1662216452"
                    > 
                    <div>
                    <form action="cliente.php" method="POST">
                        <span>GUITARRA FENDER 0971170192</span>
                        <h5>$8500</h5> 
                        <p> ACUSTICA</p> 
                            <input type="hidden" name="title" value="GUITARRA FENDER 0971170192">
                            <input type="hidden" name="price" value="8500">
                            <button style="background-color:chocolate; border-color:chocolate" class="btn btn-primary" 
                            name="btnAccion" 
                            value="Agregar" 
                            type="submit"
                            >
                            Agregar al carrito
                            </button>
                             <input type="number" name="cant" value=" " style="width:50px;"><br>
                        </form>
                        
                    </div>       
                </div>     
            </div>
        </div>
        
    </div>
    <?php
    if(isset($_REQUEST["btnAccion"])){
        $producto = $_REQUEST["title"];
        $cantidad = $_REQUEST["cant"];
        $precio = $_REQUEST["price"];

       

        
        $_SESSION["carrito"][$producto]["cant"] = $cantidad;
        $_SESSION["carrito"][$producto]["precio"] = $precio;

        echo "<script>alert('Producto $producto agregado con exito al carrito de compras');</script>";
    }
    ?>

</body>
</html>