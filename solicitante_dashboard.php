<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGM - Painel do Solicitante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
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
                            <a class="nav-link text-white active" href="#">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Minhas Solicitações</a>
                        </li>
                    </ul>
                    
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar..." aria-label="Search">
                        <a href="api/logout.php" class="btn btn-outline-light">Sair</a>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main class="container my-5">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="text-dark border-bottom pb-2">Bem-vindo, Solicitante</h2>
            </div>
        </div>
<div class="card shadow-sm border-0">
    <div class="card-body">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="text-secondary fw-bold m-0">Minhas Solicitações</h3>
            <button class="btn btn-success fw-semibold px-3">
                <i class="bi bi-plus-lg"></i> Nova Solicitação
            </button>
        </div>

        <div class="table-responsive">
            <table class="table table-borderless align-middle">
                <thead class="border-bottom">
                    <tr class="text-dark">
                        <th class="py-3">ID</th>
                        <th class="py-3">Local</th>
                        <th class="py-3">Tipo</th>
                        <th class="py-3">Status</th>
                        <th class="py-3">Data</th>
                        <th class="py-3">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-bottom">
                        <td class="fw-bold py-3">#01</td>
                        <td>Bloco Administrativo - Recepção</td>
                        <td>Porta Quebrada</td>
                        <td>
                            <span class="badge rounded-pill px-3 py-2 text-dark" style="background-color: #22bc3eff;">Aberto</span>
                        </td>
                        <td>28/01/2026</td>
                        <td>
                            <button class="btn btn-outline-primary btn-sm px-3">Detalhes</button>
                        </td>
                    </tr>
                    <tr class="border-bottom">
                        <td class="fw-bold py-3">#02</td>
                        <td>Refeitório</td>
                        <td>Luz Qyeimada</td>
                        <td>
                            <span class="badge rounded-pill px-3 py-2 bg-danger">Fechado</span>
                        </td>
                        <td>20/01/2026</td>
                        <td>
                            <button class="btn btn-outline-secondary btn-sm px-4">Ver</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>