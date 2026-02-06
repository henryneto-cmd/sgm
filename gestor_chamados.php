<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGM - Painel do Solicitante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-success shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#conteudoNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="conteudoNavbar">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white active" href="#">SGM Admin</a>
                        </li>
                    </ul>
                    <button type="button" class="btn text-white">Chamados</button>
                    <button type="button" class="btn text-white">Locais</button>
                        <a href="api/logout.php" class="btn text-white">Sair</a>
                    </form>
                </div>
            </div>
        </nav>
    </header>


    <main class="container my-5">
        <div class="row mb-4">
            <div class="col-12">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="text-secondary fw-bold m-0">Todos Os Chamados</h3>
        </div>

<div>

<button type="button" class="btn btn-outline-secondary">Todos</button>
<button type="button" class="btn btn-outline-primary">Abrtos</button>
<button type="button" class="btn btn-outline-warning">Em Execução</button>
<button type="button" class="btn btn-outline-success">Concluídos</button>

</div>


        <div class="table-responsive">
            <table class="table table-borderless align-middle">
                <thead class="border-bottom">
                    <tr class="text-dark">
                        <th class="py-3">ID</th>
                        <th class="py-3">Solicitante</th>
                        <th class="py-3">Tipo</th>
                        <th class="py-3">Prioridade</th>
                        <th class="py-3">Técnico</th>
                        <th class="py-3">Status</th>
                        <th class="py-3">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-bottom">
                        <td class="fw-bold py-3">#01</td>
                        <td>Maria Joaquina</td>
                        <td>Porta Quebrada</td>
                        <td>
                            <span class="badge rounded-pill px-3 py-2 text-dark" style="background-color: #bc2222ff;">Alta</span>
                        </td>
                        <td>João Costa</td>
                        <td>
                            <button class="btn bg-secondary btn-sm px-3">Fechado</button>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-sm px-3" ><i class="bi bi-eye-fill"></i> Gerenciar</button>
                        </td>
                    </tr>
                    <tr class="border-bottom">
                        <td class="fw-bold py-3">#02</td>
                        <td>Cirilo</td>
                        <td>Luz Qyeimada</td>
                        <td>
                            <span class="badge rounded-pill px-3 py-2 bg-secondary">Fechado</span>
                        </td>
                        <td>João Costa</td>
                        <td>
                            <button class="btn bg-secondary btn-sm px-3">Fechado</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>