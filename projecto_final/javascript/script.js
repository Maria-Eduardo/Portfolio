

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

  


