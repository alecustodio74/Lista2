<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alexandre Ricardo Custódio de Souza">
    <title>Velocidade média</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h4>20 - Calcular velocidade média</h4>
    <form method="post" action="20_result.php"> <!-- action vai para outra página -->
    <div class="col-3">        
            <div class="mb-3">
                <label for="distancia" class="form-label">Distância em Km</label>
                <input type="number" id="distancia" name="distancia" class="form-control" required="">
            </div>

            <div class="mb-3">
                <label for="tempo" class="form-label">Tempo em horas</label>
                <input type="float" id="tempo" name="tempo" class="form-control" min="1" required="">
            </div>
        
        
        <button type="submit" class="btn btn-primary">Converter</button>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>