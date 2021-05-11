<!DOCTYPE html>
<?php

	function valorDado(){
		return rand(1,6);
	}
	
    $valorDado1P=valorDado();
    $valorDado2P=valorDado();
    $valorDado1C=valorDado();
    $valorDado2C=valorDado();
    
	$resultadoP=$valorDado1P + $valorDado2P;
    $resultadoC=$valorDado1C + $valorDado2C;
		
?>
<html lang = "pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lancamento de dados</title>
</head>
</style>
<body>
    <form action="" method="post">
        <h1>Player</h1>
		<br><img src="img/dado.gif" alt="dado vermelho rodando" style="width:10%;height:10%;" id ="dado1">
        <img src="img/dado.gif" style="width:10%;height:10%;" id="dado2">
		<br>
        <h1>Computador </h1>
        <br><img src="img/dado.gif" alt="dado vermelho rodando" style="width:10%;height:10%;" id ="dado3">
        <img src="img/dado.gif" style="width:10%;height:10%;" id="dado4">
		<br>
		<br>
		<br>
        <br>
        <input type="submit" value="Rolar os dados" name="rodar" id="rodar">
    </form>
    <br>
    <h2>
    Resultado:
	
	<br>
    </h2>   
	Total de pontos do Player: <?php echo   $resultadoP; ?>
    <br><img src="img/dado<?php echo $valorDado1P; ?>.png" style="width:100px;height:100px;" id="dado1P">
    <img src="img/dado<?php echo $valorDado2P; ?>.png" style="width:100px;height:100px;" id="dado2P">
    <br>
	<br>
    Total de pontos do Computador: <?php echo   $resultadoC; ?>
    <br><img src="img/dado<?php echo $valorDado1C; ?>.png" style="width:100px;height:100px;" id="dado1C">
    <img src="img/dado<?php echo $valorDado2C; ?>.png" style="width:100px;height:100px;" id="dado2C">
	<br>
	<h2>
	Resultado: 
        <?php
		if($resultadoP > $resultadoC)
            echo  "O player ganhou.";
        else if($resultadoP < $resultadoC)
            echo "O computador ganhou.";
        else 
            echo "Empate.";
		
		
        ?>

    </h2>

</body>
</html>