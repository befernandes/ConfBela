<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel ="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/css.css">
    
    

    <title>ConfiBela</title>
</head>

<body>
    <header>
        <nav class="menu">
            <ul>

                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="galeria.php">Galeria</a></li>
                <li><a href="contato.php">Contato</a></li>

            

            </ul>
        </nav>
    </header> 

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="img/blfrutas.jpg">

                </div>
                <div class="details">
                    <h3>Bolo de Frutas<br><span>ConfBela</span></h3>

                </div>

            </div>


            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="img/bolomickey.jpg">

                </div>
                <div class="details">
                    <h3>Bolo Mickey<br><span>ConfBela</span></h3>

                </div>

            </div>



        <div class="swiper-slide">
                <div class="imgBx">
                    <img src="img/bolostyle.jpg">

                </div>
                <div class="details">
                    <h3>Bolo Style<br><span>ConfBela</span></h3>

                </div>

                </div>  
                
        <div class="swiper-slide">
                <div class="imgBx">
                    <img src="img/bolinho2.jpg">

                </div>
                <div class="details">
                    <h3>Bolinho<br><span>ConfBela</span></h3>

                </div>

            </div>   
            
            <div class="swiper-slide">
                <div class="imgBx">
                    <img src="img/bolo_bailarina.jpg">

                </div>
                <div class="details">
                    <h3>Bolo Bailarina<br><span>ConfBela</span></h3>

                </div>

                </div>  

                
                <div class="swiper-slide">
                <div class="imgBx">
                    <img src="img/salgado.jpg">

                </div>
                <div class="details">
                    <h3>Salgados<br><span>ConfBela</span></h3>

                </div>

                </div>  
                
                <div class="swiper-slide">
                <div class="imgBx">
                    <img src="img/noivado.jpg">

                </div>
                <div class="details">
                    <h3>Bolo Noivos<br><span>ConfBela</span></h3>

                </div>

                </div>  
                
                <div class="swiper-slide">
                <div class="imgBx">
                    <img src="img/bolopatrulha.jpg">

                </div>
                <div class="details">
                    <h3>Bolo Patrulha<br><span>ConfBela</span></h3>

                </div>

                </div>  
                
        </div>
        <div class="swiper-pagination"></div>

    </div>

    <script type="text/javascript" src="js/swiper.min.js"></script>

 <!-- Initialize Swiper -->
 <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      loop: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 60,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>

  <div class="div">

<section class="confbela" id="confbela">
        <h2>Nossos Serviços</h2>

        <div class="grid">
            
            <figure>

            <a href="doces.php"><img class="img-confbela" src="./img/doce.jpg" alt="Doces"></a>
                <figcaption>Doces</figcaption>
            </figure>
            <figure>
            <a href="salgados.php"> <img class="img-confbela" src="./img/salgado.jpg" alt=">Salgados"></a>
                <figcaption>Salgados</figcaption>
            </figure>
            <figure>
            <a href="bolos.php"> <img class="img-confbela" src="./img/bolo_moda.jpg" alt="Bolos" ></a>
                <figcaption>Bolos</figcaption>
            </figure>
            
        </div>
    </section>
        
    </div>

    <section  class="contato" id="contato">

        <h2>Redes Sociais</h2>
              

    </section>
    <footer class= "rodape" id ="rodape">
    
        <ul style="list-style: none;">
            <li><a href="https://www.facebook.com/ConfBela-101546444949618/?modal=admin_todo_tour"><img src="icons/facebook.png"></a></li>
        </ul> 

        <ul style="list-style: none;">
            <li><a href="https://www.instagram.com/confbela/"><img src="icons/instagram.png"></a></li>
        </ul> 

    </footer>
</body>
</html>