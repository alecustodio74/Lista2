<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Alexandre Ricardo Custódio de Souza">
    <title>Juros simples e composto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h4>17-18 - Juros simples e composto</h4>
    <form method="post" action="17-18_result.php"> <!-- action vai para outra página -->
            <div class="col-3">
            <div class="mb-3">
                <label for="preco" class="form-label">Digite o Preço</label>
                <input type="float" id="preco" name="preco" class="form-control" required="">
            </div>
        
            <div class="mb-3">
                <label for="juros" class="form-label">Digite a taxa de juros %</label>
                <input type="float" id="juros" name="juros" class="form-control" required="">
            </div>

            <div class="mb-3">
                <label for="periodo" class="form-label">Digite o período em dias</label>
                <input type="number" id="periodo" name="periodo" class="form-control" min="1" required="">
            </div>
        
            <div class="mb-3">
                <label for="operador" class="form-label">Tipo de juros</label>
                <select id="operador" name="operador" class="form-select" required="">
                    <option value="" id="">Escolha uma opção</option>
                    <option value="1" id="simples">Simples</option>
                    <option value="2" id="composto">Composto</option>
                </select>
            </div>
        
        <button type="submit" class="btn btn-primary">Calcular</button>
    </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>