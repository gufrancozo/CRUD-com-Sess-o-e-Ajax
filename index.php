<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho PHP</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav-bar">
        <a class="navbar-brand" href="#">CRUD com Sessão e Ajax</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Editar</a>
                </li>
            </ul>
        </div>
    </nav>
    <form id="positionForm">
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationDefault01">Primeiro nome</label>
                <input type="text" class="form-control" id="validationDefault01" placeholder="Nome" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefault02">Sobrenome</label>
                <input type="text" class="form-control" id="validationDefault02" placeholder="Sobrenome" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationDefaultUsername">Usuário</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    </div>
                    <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Usuário" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label for="validationDefault03">Cidade</label>
                <input type="text" class="form-control" id="validationDefault03" placeholder="Cidade" required>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationDefault04">Estado</label>
                <input type="text" class="form-control" id="validationDefault04" placeholder="Estado" required>
            </div>
            <div class="col-md-3 mb-3">
                <label for="validationDefault05">CEP</label>
                <input type="text" class="form-control" id="validationDefault05" placeholder="CEP" required>
            </div>
        </div>
        <div class="form-group">
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>