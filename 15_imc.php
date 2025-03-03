<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alexandre Ricardo Custódio de Souza">
    <title>Cálculo do IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h4>15 - Calcular o IMC</h4>
    <form method="post" action="15_result.php"> <!-- action vai para outra página -->
            <div class="col-3">
            <div class="mb-3">
                <label for="peso" class="form-label">Digite o peso</label>
                <input type="float" id="peso" name="peso" class="form-control" required="">
            </div>
        
            <div class="mb-3">
                <label for="altura" class="form-label">Digite a altura</label>
                <input type="float" id="altura" name="altura" class="form-control" required="">
            </div>
        
        <button type="submit" class="btn btn-primary">Calcular</button>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>