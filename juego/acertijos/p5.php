<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
    <link rel="icon" type="image/png" sizes="16x16"  href="../img/favicons/favicon-16x16.png">
    <title>ACERTIJO 5</title>
</head>
<body class="p5">
<div class="mdp">
		<div class="header">
			<h4 style="font-weight: bolder;">FINALIZAR COMPRA</h4>
            <?php
            session_start();
            ?>
			<a href=""><img style="height:30px;width:30px;" src="../../images/cruzar.png" alt=""></a>
		</div>
		
		<div class="at">
			<div>
			<h4 style="padding-left:40px;">seleccionar metodo de pago</h4>
			</div>

			<form class="atf" name="atf" id="atf" action="../../comp.php" method="POST" onsubmit="return validatefor()">
			<div id="bordert">
			<div id="tarjeta"><label onclick="mp()"><input type="radio"  value="tarjeta" name="mp">TARJETA</label></div>
			<div id="tarjeta1">
			<h4 style="width: 100%;padding-left:50px">datos de la tarjeta</h4>
			<div id="formt">
				<input style="width:100%;" type="text" name="nt" id="nt" placeholder="Numero de tarjeta">
				<div style="width:100%;display:flex;gap:5%;">
				<input style="width:100%;" type="text" name="ca" id="ca" placeholder="Caducidad">
				<input style="width:100%" type="text" name="cvv" id="cvv" placeholder="CVV">
				</div>
			</div>
			</div>
			</div>
			<div id="borderp">
			<div id="paypal" ><label onclick="pp()"><input type="radio" value="paypal" name="mp">PAYPAL</label></div>
			<div id="paypal1">
			<h4 style="width: 100%;padding-left:50px">datos de la cuenta</h4>
			<div id="formt" >
				<input style="width:100%;" type="email" name="email" id="e" placeholder="Email">
				<input style="width:100%;" type="password" name="pass" id="p" placeholder="Contraseña">
				
			</div>
			</div>
			</div>
			<script type="text/javascript">
			let pay=document.getElementById("paypal");
			let pay1=document.getElementById("paypal1");  
			let tar1=document.getElementById("tarjeta1"); 
			let tar=document.getElementById("tarjeta"); 
			let bort=document.getElementById("bordert"); 
			let borp=document.getElementById("borderp"); 
    		function mp(){
				
				tar1.style.display="flex";
				
				tar.style.borderBottomLeftRadius="0"
				tar.style.borderBottomRightRadius="0"
				pay.style.borderBottomLeftRadius=""
				pay.style.borderBottomRightRadius=""
				pay1.style.display="";
				bort.style.border="solid blue 1px";
				borp.style.border="";
			};
			function pp(){
				pay1.style.display="flex";
				pay.style.borderBottomLeftRadius="0"
				pay.style.borderBottomRightRadius="0"
				tar.style.borderBottomLeftRadius=""
				tar.style.borderBottomRightRadius=""
				tar1.style.display="";
				borp.style.border="solid blue 1px";
				bort.style.border="";
     		};
			</script>
		</div>
		<div class="conf">
            <input type="hidden" name="t" value="pista">
			<input style="height:60px;" type="submit" id="conf" value="pagar">
            <div style="width:36% ; display:flex; flex-wrap:wrap; gap:10px; align-items:center; margin-bottom:10px">
            <h4 style="margin-top:15px;font-weight:normal">CANTIDAD:</h4>
            <input type="number" style="width: 15%; height:30px; padding-left:3px" value="1" name="cant" min="1" max="99" onchange="c()">
            <input type="hidden" name="pre" value="2">
            <input type="hidden" name="pag" value="5">
			<h4 style="margin-top:15px;font-weight:normal; margin-left:10px">TOTAL: $</h4><h4 style="margin-top:15px;font-weight:normal; margin-left:-10px" id="t">2</h4></div>
            <script>
                function c(){
                    var tot=document.atf.cant.value*2;
                    document.getElementById("t").innerHTML=tot;
                };
                
            </script>
			</div>
			</form>
		</div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <div id="w">
        <?php
        include("../../conexion.php");
        $q="SELECT * FROM carrito WHERE tipo='juego'";
        $r=mysqli_query($conexion,$q);
        while($f=mysqli_fetch_array($r))
        {
            if (!empty($_SESSION["idusuario"]) and $f["idusuario"]==$_SESSION["idusuario"] )
            {
                $id=$f["idusuario"];
            }
        }
        if (empty($id) || empty($_SESSION["idusuario"]))
        {
        ?>
        <script>
            window.location.href="../../index2.php";
        </script>
        <?php
        }
        $query="SELECT pistas FROM usuario WHERE id=$_SESSION[idusuario]";
        $res=mysqli_query($conexion, $query);
        while($fila=mysqli_fetch_array($res))
        {
            $p=$fila["pistas"];
            ?><form name="pi">
                <input type="hidden" name="p" value="<?php echo $p; ?>">
            </form> 
            <h3 id="cantp">
            <?php
            echo $p;?></h3><?php
        }
        mysqli_close($conexion);
        ?>
        <form action="../pista.php" name="res" method="POST">
            <input type="hidden" name="val">
            <input type="hidden" name="id" value="<?php echo $_SESSION['idusuario']; ?>">
            <input type="hidden" name="pag">
        </form>
        <a id="p" onclick="comprobarp()"><img src="../img/focoof.png" id="foco"></a>
        <div id="pista" class="hint">
            <div class="hint-content" id="pist">
            <a href="">X</a>
            <h2>AYUDA</h2>
            <p>Mmm... Ya te lo dijimos antes... ¡RECORDA!</p>
        </div>  
    </div>
    <div class="div1">
        <p> Turing fue conocido como un gran... <br>
            <br>a. Militar
            <br>b. Médico
            <br>c. Traidor Nazi
            <br>d. Computador
        </p>
    </div>
    <div class="hint-content f" id="comp">    
                <a href="">X</a>
                <h2>AYUDA</h2>
                <p>no tienes pistas</p>
                <a class="button fit c" style="position:relative; margin-left:20px; margin-top:-30px">comprar</a>
                </div>    
    <div class="div2">
        <form action="#" name="f1">
            <div id="f1">Solución: <input autocomplete="off" type="text" name="respuesta" maxlength="20" ><input type="button" name="comprobar" value="Comprobar" onClick="comprobarClave5()"></div> 
            <h1 id="incorrecta">La solucion no es correcta</h1><h1 id="correcta">La solucion es correcta</h1>
        </form>
    </div>
    <div class="div3">
        
    </div>
    <script src="../js/java.js"></script>
    <script src="../../assets/js/js.js"></script>
    <script src="../../assets/js/jquery.payform.min.js" charset="utf-8"></script>
</body>
</html>