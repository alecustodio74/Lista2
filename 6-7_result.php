<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Respostas Temperaturas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h4>Resposta do exercício 6 e 7</h4>
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            try{
            $temp = $_POST['temp'];
            $opcao = $_POST['conversor'];
            switch ($opcao){
                case 1:
                    $nome = "Fahrenheit";
                    //Convertendo de Celsius para Farenheit
                    $converte = (($temp * 9)/5) + 32;
                    break;
                case 2:
                    $nome = "Celsius";
                    //Convertendo de Farenheit para Celsius
                    $converte = (5/9) * ($temp - 32);
                    break;
                default:
                    echo "nada a declarar!";
            }

        echo "A temperatura em $nome é  " . number_format($converte,2,',','.');
            
            } catch(Exception $e){
                echo $e->getMessage();
            }
        }
    ?>
    <div class="col mt-2">
         <button type="submit" class="btn btn-primary"><a href="6_temperatura.php" style="color: white; text-decoration: none;">Voltar</a></button>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>