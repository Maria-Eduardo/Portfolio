

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barber Shop</title>
    <link rel="icon" href ="images/logo_rb.png"  type="image/jpg"></icon>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css" >
</head>
<body>

    <header>
        <container class="container">
             <!--responsive menu-->
            <nav class="navbar navbar-expand-lg bg-body-primary" style="display: flex; flex: 1;"  >
                <div class="container-fluid ">
                <div class="logo">
                    <a class="navbar-brand" href="#"><img  src="../images/logo_rb.png" width="110px" alt="logo_img"></a>
                </div>    
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <div class="menu">
                    <ul class="navbar-nav" >
                        <li class="nav-item" >
                            <a class="nav-link " aria-current="page" href="../index.php#home">Home</a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link " aria-current="page" href="#">Insert</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="list.php">List</a>
                        </li> 
                    </ul>   
                </div>   
                </div>
                </div>
            </nav>
        </container>    
    </header>
    <div class="geral">
            
        <form  method="post"  action="inserir_action.php" >
            <label for="nome"> Nome:* </label>
                <input type="text" name="nome" placeholder="Digite o seu nome" required>
                
            <label for="email"> Email:* </label>
            <input type="email" name="email" placeholder="email@exemplo.com" required>
            
            <label for="telefone">Telefone:</label>
                <input type="tel" name="telefone" placeholder="exemplo: +351 555555" >
            
            <label for="morada">Morada 1: </label>
                <input type="text" name ="morada1">
            
            <label for="morada">Morada 2: </label>
                <input type="text" name ="morada2">
            <br>      
            <label for="serviços"> Serviços: </label>
                
                <select name ="serviços">
                    <option>Corte</option>
                    <option>Barboterapia</option>
                    <option>Preenchimento de barba</option>
                    <option>Camuflagem</option>
                </select>
            </br>
            <label for="data"> Escolha a data:</label>
                <input type="datetime-local" name="data"  >
                <br>
            
            <button type="submit" class="btn " style=" margin-bottom: 2px;" value="inserir"> Inserir</button>
                                        
        </form>
    </div>    
      
</body>
</html>
