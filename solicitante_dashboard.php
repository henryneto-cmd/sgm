<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGM - Painel do Solicitante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark shadow-sm mb-4" style="background-color: #2563eb;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-tools me-2"></i>SGM
            </a>
            <div class="d-flex align-items-center">
                <span class="text-white me-3 d-none d-sm-inline">Olá, Solicitante</span>
                <a href="api/logout.php" class="btn btn-outline-light btn-sm">Sair</a>
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="h4 fw-bold m-0 text-dark">Minhas Solicitações</h2>
            <a href="solicitante_abrir_chamado.php" class="btn btn-primary shadow-sm">
                <i class="bi bi-plus-lg me-1"></i> Nova Solicitação
            </a>
        </div>

        <div class="card border-0 shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="py-3 ps-4">ID</th>
                                <th class="py-3">Informações</th>
                                <th class="py-3">Status</th>
                                <th class="py-3">Data</th>
                                <th class="py-3 text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="ps-4 fw-bold text-muted">#05</td>
                                <td>
                                    <div class="fw-bold"><i class="bi bi-geo-alt me-1"></i>Sala 204</div>
                                    <div class="small text-secondary">Ar-condicionado pingando</div>
                                </td>
                                <td>
                                    <span class="badge bg-info text-dark">Em Aberto</span>
                                </td>
                                <td class="small text-muted">06/02/2026</td>
                                <td class="text-center">
                                    <button class="btn btn-outline-secondary btn-sm"><i class="bi bi-search"></i> Ver</button>
                                </td>
                            </tr>
                            
                            <tr>
                                <td class="ps-4 fw-bold text-muted">#04</td>
                                <td>
                                    <div class="fw-bold"><i class="bi bi-geo-alt