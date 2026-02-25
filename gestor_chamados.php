<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGM - Gerenciar Solicitação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        :root {
            --primary-blue: #2563eb;
            --sidebar-dark: #1e293b;
        }
        body { background-color: #f1f5f9; font-family: 'Segoe UI', system-ui, sans-serif; }
        
        /* Sidebar consistente com o Dashboard */
        .sidebar {
            background-color: var(--sidebar-dark);
            min-height: 100vh;
            position: fixed;
            padding: 1.5rem 1rem;
            z-index: 1000;
        }
        .brand-text { color: white; font-weight: 800; font-size: 1.2rem; text-transform: uppercase; }
        .nav-link { color: #94a3b8; border-radius: 10px; margin-bottom: 0.5rem; transition: 0.3s; }
        .nav-link:hover, .nav-link.active { background-color: var(--primary-blue); color: white; }

        /* Estilização dos detalhes */
        .card-details { border: none; border-radius: 15px; }
        .info-label { font-size: 0.75rem; text-transform: uppercase; font-weight: 700; color: #64748b; margin-bottom: 2px; }
        .info-value { font-weight: 600; color: #1e293b; font-size: 1rem; }
        
        .header-triagem {
            background-color: #ffc107;
            color: #451a03;
            font-weight: 800;
            border-radius: 12px 12px 0 0 !important;
            border: none;
        }

        .img-evidence {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 12px;
            cursor: pointer;
            transition: 0.2s;
        }
        .img-evidence:hover { opacity: 0.8; transform: scale(1.05); }

        @media (max-width: 768px) {
            .sidebar { position: static; min-height: auto; }
            .main-content { margin-left: 0 !important; }
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        
        <nav class="col-md-3 col-lg-2 sidebar">
            <div class="mb-5 px-2">
                <span class="brand-text">SGM | Gestão<br>Administrativa</span>
            </div>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a href="gestor_dashboard.php" class="nav-link">
                        <i class="bi bi-grid-fill me-2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a href="gestor_chamados.php" class="nav-link active">
                        <i class="bi bi-card-checklist me-2"></i> Gerenciar Chamados
                    </a>
                </li>
            </ul>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 py-4 main-content" style="margin-left: 16.66%;">
            
            <div class="d-flex justify-content-between align-items-center mb-4 pb-3 border-bottom">
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-1">
                            <li class="breadcrumb-item"><a href="gestor_chamados.php" class="text-decoration-none text-muted">Chamados</a></li>
                            <li class="breadcrumb-item active">Detalhes do Chamado #1024</li>
                        </ol>
                    </nav>
                    <h1 class="h3 fw-bold text-dark m-0">Visualizar Solicitação</h1>
                </div>
                <a href="gestor_chamados.php" class="btn btn-outline-secondary btn-sm rounded-pill px-3">
                    <i class="bi bi-arrow-left me-1"></i> Voltar
                </a>
            </div>

            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="card card-details shadow-sm">
                        <div class="card-header bg-white border-0 pt-4 px-4">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="fw-bold m-0">Informações do Chamado</h5>
                                <span class="badge rounded-pill bg-success-subtle text-success px-3 py-2 fw-bold border border-success">
                                    Concluído
                                </span>
                            </div>
                        </div>

                        <div class="card-body p-4">
                            <div class="row g-4">
                                <div class="col-md-12">
                                    <p class="info-label">Descrição do Problema</p>
                                    <p class="info-value">Ajuste na fiação do ar-condicionado</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="info-label">Localização</p>
                                    <p class="info-value"><i class="bi bi-geo-alt me-1"></i> Sala de Reuniões 02</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="info-label">Solicitante</p>
                                    <p class="info-value"><i class="bi bi-person me-1"></i> Marcos Oliveira</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="info-label">Data de Abertura</p>
                                    <p class="info-value"><i class="bi bi-calendar-event me-1"></i> 06/02/2026</p>
                                </div>
                            </div>

                            <hr class="my-4 opacity-25">

                            <div>
                                <p class="info-label mb-3">Evidências Enviadas</p>
                                <div class="d-flex gap-3">
                                    <img src="./images/ar-condicionado.jpg" class="img-evidence img-thumbnail shadow-sm" alt="Evidência 1">
                                    <img src="./images/luz.jpg" class="img-evidence img-thumbnail shadow-sm" alt="Evidência 2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="card card-details shadow-sm border-0">
                        <div class="card-header header-triagem p-3 text-center">
                            <i class="bi bi-person-gear me-2"></i>TRIAGEM E ATRIBUIÇÃO
                        </div>
                        <div class="card-body p-4">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label class="info-label">Técnico Responsável</label>
                                    <select class="form-select border-0 bg-light py-2 fw-semibold text-dark">
                                        <option value="charles">Charles Oliveira</option>
                                        <option value="alex" selected>Alex Pereira</option>
                                        <option value="jose">José Aldo</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label class="info-label">Nível de Prioridade</label>
                                    <select class="form-select border-0 bg-light py-2 fw-semibold text-dark">
                                        <option value="alta">Alta</option>
                                        <option value="média" selected>Média</option>
                                        <option value="baixa">Baixa</option>
                                    </select>
                                </div>
