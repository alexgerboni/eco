<?php 

    $active='Home';
    include("includes/header.php");

?>

<link rel="stylesheet" href="animate.css">
   

             <section class="vborda" style="text-align: center">
             <div class="container"> 
             <div class="row">

          

            <div class="col-md-12 d-flex">
            <div class="align-self-center   wow animated fadeInLeft bordadaimagem">
            <h3 style="font-family: arial">Aproveite as Oferta</h3>
            <hr>
            <p> PARA COMPRAR, VÁ A UMA DE NOSSAS LOJAS!
        As Lojas exemplo vendem exclusivamente nas lojas e, por isso, nossos preços são sempre os melhores!
        Então veja qual a loja mais próxima e encontre estas e muitas outras ofertas.
        As entregas e a montagem dos móveis nós fazemos de presente pra você. Vai lá!
        ( Consulte as regiões de entrega disponíveis com nossos vendedores )
                    </p>
                    <br>
             
            </div>
            </div>

            
            
            </div>   
            </div>
            </section>
   <div class="container">
       
       <div class="col-md-12">
           
           <div class="carousel slide" id="myCarousel" data-ride="carousel">
               
               <ol class="carousel-indicators">
                   
                   <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                   <li data-target="#myCarousel" data-slide-to="1"></li>
                   <li data-target="#myCarousel" data-slide-to="2"></li>
                   <li data-target="#myCarousel" data-slide-to="3"></li>
                   
               </ol>

               
               
               <div class="carousel-inner">
                  
                  <?php 
                   
                   $get_slides = "select * from slide LIMIT 0,1";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];
                       
                       echo "
                       
                       <div class='item active'>
                       
                       <img src='admin_area/slides_images/$slide_image'>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   $get_slides = "select * from slide LIMIT 1,3";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];
                       
                       echo "
                       
                       <div class='item'>
                       
                       <img src='admin_area/slides_images/$slide_image'>
                       
                       </div>
                       
                       ";
                       
                   }
                   
                   ?>
                   
               </div>
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a>
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next">
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a>
               
           </div>
           
       </div>
       
   </div>
   
   <div id="advantages">
       
       <div class="container">
           
           <div class="same-height-row">
               
               <div class="col-sm-4">
                   
                   <div class="box same-height">
                       
                       <div class="icon">
                           
                           <i class="fa fa-heart"></i>
                           
                       </div>                       
                       <h3 style="color: blue">Controle de visualização</h3>
                       
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                       
                   </div>
                   
               </div>
               
              
           </div>
           
       </div>
       
   </div>
   
   <div id="hot">
       
       <div class="box">
           
           <div class="container">
               
               <div class="col-md-12">
                   
                   <h2>
                      Produtos adicionados
                   </h2>
                   <p>Apos inserir Produto, atualize sua pagina</p>
                   
               </div>
               
           </div>
           
       </div>
       
   </div>
   <div id="content" class="container">
       
       <div class="row"><!-- row Begin -->
          
          <?php 
           
           getPro();
           
           ?>
           
       </div><!-- row Finish -->
       
   </div><!-- container Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>


    <script type="text/javascript" src="js/full.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>

    <script>
        new WOW().init();
    </script>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>