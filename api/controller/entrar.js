//entrar dentro do sistema

function display(form){

    if (form.username.value=="admin") { 
    if (form.password.value=="admin") 
      {              
       location="api/home.html"
      } 
       else {
       alert("Usuário Inválido")
      }
    } else {  alert("Invalid Username")
  }
}

 //mostrar ou ocultar senha                           

 function mostrarOcultarSenha(){
  var senha=document.getElementById("floatingPassword");
  if(senha.type=="password"){
          senha.type="text";
      }else{
          senha.type="password";
  }     
} 
