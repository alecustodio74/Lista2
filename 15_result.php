<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Respostas Cálculo do IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h4>Resposta do exercício 15</h4>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            try{
            $peso = $_POST['peso'];
            $altura = $_POST['altura'];
            $imc = $peso / pow($altura,2);
            echo "O IMC é " . number_format($imc,2,',','.');
            echo "<br>Classificação: ";
            if ($imc < 18.5)
                echo "Abaixo do peso";
            else if ($imc >= 18.5 && $imc < 25)
                echo "Peso normal";
            else if ($imc >= 25 && $imc < 30)
                echo "Sobrepeso";
            else if ($imc >= 30 && $imc < 35)
                echo "Obesidade grau I";
            else if ($imc >= 35 && $imc < 40)
                echo "Obesidade grau II";
            else if ($imc >= 40) 
                echo "Obesidade grau III";

            } catch(Exception $e){
                echo $e->getMessage();
            }
        }
    ?>
    <div class="col mt-2">
         <button type="submit" class="btn btn-primary"><a href="15_imc.php" style="color: white; text-decoration: none;">Voltar</a></button>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>