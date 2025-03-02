<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alexandre Ricardo Custódio de Souza">
    <title>Formulários Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h4>6 e 7 - Conversor de temperaturas</h4>
    <form method="post" action="6-7_result.php"> <!-- action vai para outra página -->
            
        
        <div class="mb-3">
            <label for="conversor" class="form-label">Qual temperatura deseja converter</label>
            <select id="conversor" name="conversor" class="form-select" required="">
                <option value="" id="">Escolha uma opção</option>
                <option value="1" id="celsius">De Celsius para Fahrenheit</option>
                <option value="2" id="faren">De Fahrenheit para Celsius</option>
            </select>
        </div>
        
        <div class="mb-3">
            <label for="temp" class="form-label">Digite a temperatura</label>
            <input type="number" id="temp" name="temp" class="form-control" min="" required="" placeholder="Apenas números">
        </div>

        <button type="submit" class="btn btn-primary">Converter</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>