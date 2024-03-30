<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barber Shop</title>
    <link rel="icon" href ="images/logo_rb.png"  type="image/jpg"></icon><!--link do ícon do site-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
     <link rel="stylesheet" href="./css/style.css" >

</head>
<body>
    <header>
        <container class="container">
             <!--responsive menu-->
            <nav class="navbar navbar-expand-lg bg-body-primary" style="display: flex; flex: 1;"  >
                <div class="container-fluid ">
                <div class="logo">
                    <a class="navbar-brand" href="#"><img  src="./images/logo_rb.png" width="110px" alt="logo_img"></a>
                </div>    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <div class="menu">
                    <ul class="navbar-nav" >
                        <li class="nav-item" >
                            <a class="nav-link " aria-current="page" href="#sobre-nos">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#serviços">Serviços</a>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="#galeria">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contactos">contactos</a>
                        </li>  
                        <li class="nav-item">
                            <a class="nav-link" href="./login.php">Admin</a>
                        </li>
                        <button ><a href="agendar.php" target="_self">AGENDE </a></button>  
                    </ul>   
                </div>   
                </div>
                </div>
            </nav>
        </container>    
    </header>
    <section>
          <!--Caroussel image section-->
     <div class="container">
        <div id="carouselExampleCaptions" class="carousel slide" >
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="background-color: #B28756;  border-radius: 20px; height: 10px; width: 50px;"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" style="background-color: #B28756; border-radius: 20px; height: 10px; width: 50px; " ></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" style="background-color: #B28756;  border-radius: 20px; height: 10px; width: 50px;"></button>
            </div>
            <div class="carousel-inner" data-bs-ride="carousel" data-bs-interval="8000">
              <div class="carousel-item active">
                <img src="./images/img1.webp" width="250px" height="auto" class="d-block w-100" alt="image_barber" >
                <div class="carousel-caption d-none d-md-block">
                  <h5 style="color: #fff;">Está na cara,<br> a diferença<br> entre <strong style="background-color:#B28756 ;">HOMENS e MENINOS.</strong></h5>  
                </div>
              </div>
              <div class="carousel-item">
                <img src="./images/imagesbh-removebg-preview.png"  class="d-block w-100" alt="image_man">
                <div class="carousel-caption d-none d-md-block">
                  <h5 style="color: #fff;"> Preocupe-se com o negócio, <br> <strong style="background-color: #B28756;">deixe o estilo connosco</strong></h5>
                 </div>
              </div>
              <div class="carousel-item">
                <img src="./images/img2.webp" width="250px" height="auto" class="d-block w-100" alt="image_young">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Estilo, elegância e profissionalismo,<br> num só sítio</h5>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" >
              <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true" ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div> 
    </section>
    <!--about section-->
    <section>
        <div class="container">
            <div class="about" id="sobre-nos">
                <h5 class="title">Sobre Nós</h5>
                <div class="about-image">
                    <img src="./images/card2.jpg" alt="...">
                    <img src="./images/sobre.jpg" alt="...">
                    <img src="./images/images-removebg-preview.png" alt="..."> 
                </div>
                <hr>
                <div class="about-body">
                  <p class="about-text" style="margin-left: 10px;">A melhor barbearia sempre perto.<br>

                    Criamos a Barbearia para homens de bom gosto que prezam por estilo, elegância e bom atendimento.
                    
                    Acreditamos que os homens merecem satisfação total com seu cabelo e barba, e se não for para deixar impecável a gente nem faz!.</p>
                 <div class="button" style="margin-bottom: 10px;">
                    <a href="#contactos" class="btn">Saiba mais</a>
                 </div> 
                </div>
              </div>
        </div>
    </section>
      <!--card section-->
    <section>
        <h5 class="title" style="margin-left: 150px;" id="serviços">Serviços</h5>
        
        <div class="container">
            
            <div class="card-container">
                <div class="card" style="width: 16rem;">
                    <img src="./images/cortedegrade.webp" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Corte</h5>
                      <p class="card-text" style="color: #fff;">A satisfação ao sair com um visual renovado muda não somente nossa aparência, mas a auto estima também! Todos os cortes incluem lavagem, secagem e finalização </p>
                    </div>
                    <div class="card-body" style="display: flex; flex: 1;">
                      <div class="button"><a href="#contactos" >Saiba mais</a></div>
                      <div class="button"><a href="./agendar.php" >Agendar</a></div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="./images/card8.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Barboterapia</h5>
                      <p class="card-text" style="color: #fff;">O mais perfeito visual de barbear.<br> Tradicional toalha quente, massagem facial, navalha, óleo perfumado, aplicação da balm e pós barba </p>
                    </div>
                    <div class="card-body" style="display: flex; flex: 1;">
                      <div class="button"><a href="#contactos" >Saiba mais</a></div>
                      <div class="button"><a href="./agendar.php" >Agendar</a></div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="./images/card2-removebg-preview.png" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Preenchimento de barba</h5>
                      <p class="card-text" style="color: #fff;">Massagem facial relaxante feito pelo barbeiro com massageador eéctrico Oster. Acompanha massagem eléctrica na cadeira</p>
                    </div>
                    <div class="card-body" style="display: flex; flex: 1;">
                      <div class="button"><a href="#contactos" >Saiba mais</a></div>
                      <div class="button"><a href="./agendar.php" >Agendar</a></div>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="./images/card7.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Camuflagem</h5>
                      <p class="card-text" style="color: #fff;">Disfarce até 70% dos fios brancos, obtendo um resultado natural com aparência elegante e jovem. Pode ser feito no cabelo ou na barba. </p>
                    </div>
                    <div class="card-body" style="display: flex; flex: 1;">
                      <div class="button"><a href="#contactos" >Saiba mais</a></div>
                      <div class="button"><a href="./agendar.php" >Agendar</a></div>
                    </div>
                </div>
            </div>       
        </diiv>
    </section>

    <!--Galery section-->

    <section class="brown" id="galeria">
        <h5 class="title" style="color: #fff; margin-left: 100px; display: inline; max-width: 1200px;">Galeria de fotos</h5>
        <div class="container">
            <div class="galery-container">
                <img src="./images/card10.jpg" alt="">
                <img src="./images/card5.jpg" alt="">
                <img src="./images/imagesbh.jpg" alt="">
                <img src="./images/card4.jpg" alt="">
                <img src="./images/cortedegrade.webp" alt="">
                <img src="./images/card2.jpg" alt="">
                <img src="./images/card6.jpg" alt="">
                <img src="./images/card7.jpg" alt="">
                <img src="./images/card8.jpg" alt="">
                <img src="./images/card9.jpg" alt="">
                <img src="./images/corte-risca-de-navalha.webp" alt="">
                <img src="./images/card7.jpg" alt="">
            </div>
        </div>
    </section>
    <!--contact section-->

    <section class="contact" id="contactos">
        <div class="container">
            <center>
                <span><h5 style="margin: auto;"  class="title">Contactos</h5> </span>
            <div class="contact-area">
                <div class="contact-area-left">
                    <div class="left">
                        <div id="tel">Tel: +351 999 999</div>
                        <div class="mail">Email:<a href="mailto:barbershop@gmail.com">barbershop@gmail.com</a></div>
                    </div>
                </div>
                <div class="contact-area-right">

                    <form  action="" method="post" >
        
                        <fieldset>
                            <legend>Contacta-nos</legend>
                            <label>
                                Nome:(*) <br>
                                <input type="text" name="FNOME" placeholder="Digite o seu nome" required>
                            </label>
                            <label>
                                Email:(*) <br>
                                <input type="email" name="EMAIL" placeholder="email@exemplo.com" required>
                            </label>
                            <label>
                                Telefone: <br>
                                <input type="tel" name="TELEFONE" placeholder="exemplo: +351 555555" >
                            </label>
                            <label>
                                Assunto: <br>
                                <input type="text" name="ASSUNTO" placeholder="Digite aqui o Assunto" >
                            </label>
                            <label>
                                Mensagem: <br>
                                <textarea name="MENSAGEM" placeholder="Escreva a sua mensagem"></textarea>
                            </label>
                             <button type="submit" class="btn " style=" margin-bottom: 2px;">Submit</button>
                        </fieldset>                             
                    </form>
                </div>
            </div>
            </center>
        </div>
    </section>

    <!--footer section-->

    <footer>
        <div class="footer">Barbershop &copy; 2024. Todos os direitos reservados.<br> Desenvolvido por: <a href="www.marianelembe.com" >Maria Nelembe</a> </div>
         
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
     
</body>
</html>