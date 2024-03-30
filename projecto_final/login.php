<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barber Shop</title>
    <link rel="icon" href ="images/logo_rb.png"  type="image/jpg"></icon>
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
                    <a class="navbar-brand" href="index.php#home"><img  src="./images/logo_rb.png" width="110px" alt="logo_img"></a>
                </div>    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <div class="menu">
                    <ul class="navbar-nav" >
                        <li class="nav-item" >
                            <a class="nav-link " aria-current="page" href="index.php#home">Home</a>
                        </li>  
                    </ul>   
                </div>   
                </div>
                </div>
            </nav>
        </container>    
    </header>
   
    <center>
        <div class="container_admin" style= "height:100vh">
            <h1 class="h1" style="background-color: #fff;">Faça login para entrar na área do Administrador.</h1>

            <form style="width: 400px; background-color: #ccc;" >
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
                </div>      
                <button type="submit" class="btn " onclick="validarUsuario(); return false">Login</button>
                
            </form>
        </div>    

    </center>
    <footer style ="margin-top:-100px">
        <div class="footer">Barbershop &copy; 2024. Todos os direitos reservados.<br> Desenvolvido por:  <a href="www.marianelembe.com"> Maria Nelembe</a></div>
         
    </footer>
    

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      <!--<script src="./javascript/script.js"></script>-->
      <script>
                
        // Função para validar o  usuário
        function validarUsuario() {

        let email = document.getElementById("email").value
        let senha = document.getElementById("password").value 
        
        if(email =="admin@gmail.com" && senha =="lucia10" ){
            alert("Acesso concedido" )
            // Redirecionar para a página PHP desejada
            window.location.href = 'admin.php';


        }else{
            alert("email ou palavra passe errado! Tente de novo.")
        }  

        }

      </script>



    
</body>
</html> 