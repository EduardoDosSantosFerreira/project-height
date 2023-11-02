<!DOCTYPE html>
<html>
<head>
    		<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Peso Ideal</title>
</head>
<body>
    <h1>Cálculo de Peso Ideal</h1>
    
    <form action="" method="POST">
        Altura (em metros): <input type="number" step="0.01" name="altura" required><br>
        Sexo:
        <input type="radio" name="sexo" value="homem" required> Homem
        <input type="radio" name="sexo" value="mulher"> Mulher<br>
        <input type="submit" value="Calcular">
    </form>
    
    <?php
    // Verifica se a altura e o sexo foram enviados através do formulário
    if (isset($_POST['altura']) && isset($_POST['sexo'])) {
        // Obtém os valores do formulário
        $altura = floatval($_POST['altura']);
        $sexo = $_POST['sexo'];
        
        // Calcula o peso ideal de acordo com o sexo
        if ($sexo === "homem") {
            $pesoIdeal = (72.7 * $altura) - 58;
        } else {
            $pesoIdeal = (62.1 * $altura) - 44.7;
        }
        
        // Exibe o resultado na tela
        echo "<p>Seu peso ideal é: " . number_format($pesoIdeal, 2, ',', '.') . " kg</p>";
    }
    ?>
</body>
</html>
