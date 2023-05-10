$(document).ready(main);
    let $menu = $('.bo');
    let $com=$('.button.fit.c');
    let $com1=$('.button.fit.d');
    var contador=0;
    var cont=0;
    var body=document.getElementById('body');

    var cardNumber=$('#nt');
    var cvv=$('#cvv');
    var cad=$('#ca');
    
function main(){

  $menu.click(function(){
    if (contador==0)
    {
    $('.navm').animate({left:'0'});
    body.classList.add('body');
    contador=1;
    }
    else
    {
      $('.navm').animate({left:'-100%'});
      contador=0;
      body.classList.remove('body');
    }
  });
$com.click(function(){
    if (cont==0)
    {
    $('.mdp').animate({top:'0'});
    body.classList.add('body');
    cont=1;
    }
    else
    {
      $('.mdp').animate({top:'-100%'});
      cont=0;
      body.classList.remove('body');
    }
  });
  $com1.click(function(){
    window.location.href="login.php";
  });
 
    cardNumber.payform('formatCardNumber');
    cvv.payform('formatCardCVC');
    cad.payform('formatCardExpiry'); 
}
function validatefor(){
  let mp=document.forms["atf"]["mp"].value;
  let cc=document.forms["atf"]["nt"].value;
  let ca=document.forms["atf"]["ca"].value;
  let cv=document.forms["atf"]["cvv"].value;
  let email=document.forms["atf"]["email"].value;
  let pass=document.forms["atf"]["pass"].value;
  
  if (mp==""){ 
    alert("ingresar metodo de pago");
    return false;
  }
  else if ((mp=="tarjeta" && cc.length==16 && ca.length==9 && cv.length==4) || (mp=="paypal" && email!="" && pass!=""))
  {
    return true;
  }
  else{
    alert("complete todos los campos");
    return false;
  }
  };

