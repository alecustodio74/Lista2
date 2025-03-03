<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alexandre Ricardo Custódio de Souza">
    <title>Médias das notas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h4>5 - Médias</h4>
    <form method="post" action="5_result.php"> <!-- action vai para outra página -->
    <div class="col-3">
            <div class="mb-3">
                <label for="nota1" class="form-label">Primeira nota</label>
                <input type="number" id="nota1" name="nota1" class="form-control" required="">
            </div>
        
            <div class="mb-3">
                <label for="nota2" class="form-label">Segunda nota</label>
                <input type="number" id="nota2" name="nota2" class="form-control" required="">
            </div>

            <div class="mb-3">
                <label for="nota3" class="form-label">Terceira nota</label>
                <input type="number" id="nota3" name="nota3" class="form-control" required="">
            </div>
        
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>