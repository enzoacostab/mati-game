
document.f1.respuesta.focus();
const clavemaster="1";
var a="";
const puerta = new Audio('../sounds/metal.mp3');
const error = new Audio('../sounds/error.mp3');
var input = document.f1.respuesta;
input.addEventListener("keypress", function(event) {
  document.f1.respuesta.value= document.f1.respuesta.value.toLowerCase();
  if (event.keyCode === 13) {
   event.preventDefault();
   document.f1.comprobar.click();
  }
});
function comprobarp()
{
let p=document.pi.p.value;
let pista=document.getElementById("pist");
let comp=document.getElementById("comp");
if (p==0 || p=="")
{
  pista.style.display="none";
  comp.style.display="block";
  window.location.href=window.location.href+"#pista";
}
else{
  pista.style.display="block";
  comp.style.display="none";
  document.res.pag.value=window.location.href;
  document.res.val.value=p;
  document.res.submit();
}
}



function comprobarClave1(){
    respuesta = document.f1.respuesta.value.toLowerCase();
    solucion ="c";//----
    if (respuesta == solucion||respuesta==clavemaster){
      document.f1.respuesta.style.display='none';
      document.f1.comprobar.style.display='none';
      puerta.play();
      document.getElementById('incorrecta').style.display='none';
      document.getElementById('foco').style.display='none';
      document.getElementById('cantp').style.display='none';
      document.getElementById('correcta').style.display='block';
      setTimeout(() => {
       alert("Tu numero es 4. ¡Anotalo!"); //
        window.location.href=("p2.php");//----
      }, 3000)   
    }else{
      document.f1.respuesta.value=a;
      error.play();
       document.getElementById('incorrecta').style.display='block'
       document.getElementById('foco').style.display='none'
       document.getElementById('cantp').style.display='none';
       setTimeout(() => {
        document.getElementById('incorrecta').style.display='none'
        document.getElementById('foco').style.display='block'
        document.getElementById('cantp').style.display='block';
      }, 3000)    
    }
}
function comprobarClave2(){
    respuesta = document.f1.respuesta.value
    solucion ="enigma"//----
    if (respuesta == solucion||respuesta==clavemaster){
      document.f1.respuesta.style.display='none'
      document.f1.comprobar.style.display='none'
      puerta.play();
      document.getElementById('incorrecta').style.display='none'
      document.getElementById('foco').style.display='none'
      document.getElementById('cantp').style.display='none';
      document.getElementById('correcta').style.display='block'
      setTimeout(() => {
        window.location.href=("p3.php")//----
      }, 3000)    
    }else{
      document.f1.respuesta.value=a;
      error.play();
        document.getElementById('incorrecta').style.display='block'
        document.getElementById('foco').style.display='none'
        document.getElementById('cantp').style.display='none';
        setTimeout(() => {
            document.getElementById('incorrecta').style.display='none'
            document.getElementById('foco').style.display='block'
            document.getElementById('cantp').style.display='block';
          }, 3000)      
    }
}

function comprobarClave3(){
  respuesta = document.f1.respuesta.value
  solucion ="a"//----
  if (respuesta == solucion||respuesta==clavemaster){
    document.f1.respuesta.style.display='none'
    document.f1.comprobar.style.display='none'
    puerta.play();
    document.getElementById('incorrecta').style.display='none'
    document.getElementById('foco').style.display='none'
    document.getElementById('cantp').style.display='none';
    document.getElementById('correcta').style.display='block'
    setTimeout(() => {
      alert("Tu numero es 20. ¡Anotalo!");
      window.location.href=("p4.php")//----
    }, 3000)    
  }else{
    document.f1.respuesta.value=a;
    error.play();
      document.getElementById('incorrecta').style.display='block'
      document.getElementById('foco').style.display='none'
      document.getElementById('cantp').style.display='none';
      setTimeout(() => {
          document.getElementById('incorrecta').style.display='none'
          document.getElementById('foco').style.display='block'
          document.getElementById('cantp').style.display='block';
        }, 3000)      
  }
}

function comprobarClave4(){
  respuesta = document.f1.respuesta.value
  solucion ="alan turing"//----
  if (respuesta == solucion||respuesta==clavemaster){
    document.f1.respuesta.style.display='none'
    document.f1.comprobar.style.display='none'
    puerta.play();
    document.getElementById('incorrecta').style.display='none'
    document.getElementById('foco').style.display='none'
    document.getElementById('cantp').style.display='none';
    document.getElementById('correcta').style.display='block'
    setTimeout(() => {
      window.location.href=("p5.php")//----
    }, 3000)    
  }else{
    document.f1.respuesta.value=a;
    error.play();
      document.getElementById('incorrecta').style.display='block'
      document.getElementById('foco').style.display='none'
      document.getElementById('cantp').style.display='none';
      setTimeout(() => {
          document.getElementById('incorrecta').style.display='none'
          document.getElementById('foco').style.display='block'
          document.getElementById('cantp').style.display='block';
        }, 3000)      
  }
}

function comprobarClave5(){
  respuesta = document.f1.respuesta.value
  solucion ="d"//----
  if (respuesta == solucion||respuesta==clavemaster){
    document.f1.respuesta.style.display='none'
    document.f1.comprobar.style.display='none'
    puerta.play();
    document.getElementById('incorrecta').style.display='none'
    document.getElementById('foco').style.display='none'
    document.getElementById('cantp').style.display='none';
    document.getElementById('correcta').style.display='block'
    setTimeout(() => {
    window.location.href=("p6.php")//----
    }, 3000)    
  }else{
    document.f1.respuesta.value=a;
    error.play();
      document.getElementById('incorrecta').style.display='block'
      document.getElementById('foco').style.display='none'
      document.getElementById('cantp').style.display='none';
      setTimeout(() => {
          document.getElementById('incorrecta').style.display='none'
          document.getElementById('foco').style.display='block'
          document.getElementById('cantp').style.display='block';
        }, 3000)      
  }
}

function comprobarClave6(){
  respuesta = document.f1.respuesta.value
  solucion ="felicitaciones has ayudado a mati a escapar"//----
  if (respuesta == solucion || respuesta==clavemaster){
    document.f1.respuesta.style.display='none'
    document.f1.comprobar.style.display='none'
    puerta.play();
    document.getElementById('incorrecta').style.display='none'
    document.getElementById('foco').style.display='none'
    document.getElementById('cantp').style.display='none'
    document.getElementById('correcta').style.display='block'
    setTimeout(() => {
      window.location.href=("fin.html")//----
    }, 3000)    
  }else{
    document.f1.respuesta.value=a;
    error.play();
      document.getElementById('incorrecta').style.display='block'
      document.getElementById('foco').style.display='none'
      document.getElementById('cantp').style.display='none'
      setTimeout(() => {
          document.getElementById('incorrecta').style.display='none'
          document.getElementById('foco').style.display='block'
          document.getElementById('cantp').style.display='block'
        }, 3000)      
  }
}