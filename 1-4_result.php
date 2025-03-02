<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Respostas calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Resposta do exercício 1 ao 4</h1>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            try{
            $valor1 = $_POST['numero1'];
            $valor2 = $_POST['numero2'];
            $operador = $_POST['operador'];
            if ($operador == "1")
                $resultado = $valor1 + $valor2;
            elseif ($operador == "2")
                $resultado = $valor1 - $valor2;
            elseif ($operador == "3")
                $resultado = $valor1 * $valor2;
            elseif ($operador == "4")
                $resultado = $valor1 / $valor2;
            
            echo "O resultado é $resultado";
            
            } catch(Exception $e){
                echo $e->getMessage();
            }
        }
    ?>
    <div class="col mt-2">
         <button type="submit" class="btn btn-primary"><a href="1-4_calcular.php" style="color: white; text-decoration: none;">Voltar</a></button>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>