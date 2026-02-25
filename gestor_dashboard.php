<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGM - Gestão Administrativa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        :root {
            --primary-blue: #8d8d8d7e;
            --sidebar-dark: #2563ebff; /* Tom de azul escuro profundo para a sidebar */
        }
        body { background-color: #f1f5f9; font-family: 'Segoe UI', system-ui, sans-serif; }
        
        /* Sidebar inspirada na imagem */
        .sidebar {
            background-color: var(--sidebar-dark);
            min-height: 100vh;
            position: fixed;
            padding: 1.5rem 1rem;
            z-index: 1000;
        }
        
        .brand-text {
            color: white;
            font-weight: 800;
            font-size: 1.2rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .nav-link {
            color: #94a3b8;
            font-weight: 500;
            border-radius: 10px;
            margin-bottom: 0.5rem;
            transition: all 0.3s;
        }

        .nav-link:hover { background-color: rgba(255,255,255,0.05); color: white; }
        
        /* Estilo do item ativo conforme imagem */
        .nav-link.active {
            background-color: var(--primary-blue) !important;
            color: white !important;
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.3);
        }

        /* Cards Estilizados */
        .card-custom {
            border: none;
            border-radius: 15px;
            color: white;
            transition: transform 0.3s ease;
        }
        .card-custom:hover { transform: translateY(-8px); }
        
        /* Cores vibrantes conforme a imagem do usuário */
        .bg-blue-modern { background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%); }
        .bg-yellow-modern { background: linear-gradient(135deg, #ffc107 0%, #eab308 100%); color: #451a03; }
        .bg-red-modern { background: linear-gradient(135deg, #dc3545 0%, #b91c1c 100%); }

        .stat-number { font-size: 3.5rem; font-weight: 800; }
        .stat-label { font-size: 0.85rem; letter-spacing: 1px; opacity: 0.9; }

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
                    <a href="gestor_chamados.php" class="nav-link active">
                        <i class="bi bi-grid-fill me-2"></i> Gerenciar Chamados
                    </a>
                </li>
            </ul>

            <div style="margin-top: auto; padding-top: 2rem;">
                <hr class="text-white opacity-25">
                <a href="api/logout.php" class="nav-link text-danger fw-bold">
                    <i class="bi bi-box-arrow-right me-2"></i> Sair
                </a>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-5 py-4 main-content" style="margin-left: 16.66%;">
            
            <div class="d-flex justify-content-between align-items-center mb-5 pb-3 border-bottom">
                <h1 class="h2 fw-bold text-secondary">Dashboard de Manutenção</h1>
                <div class="text-muted small fw-bold">25 de Fevereiro, 2026</div>
            </div>

            <div class="row g-4">
                
<div class="row g-4">
    
    <div class="col-12 col-md-3">
        <div class="card card-custom bg-blue-modern shadow py-4">
            <div class="card-body text-center">
                <h6 class="stat-label fw-bold text-uppercase">Novas Solicitações</h6>
                <p class="stat-number mb-0">0</p>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-3">
        <div class="card card-custom bg-yellow-modern shadow py-4">
            <div class="card-body text-center">
                <h6 class="stat-label fw-bold text-uppercase">Em Andamento</h6>
                <p class="stat-number mb-0">0</p>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-3">
        <div class="card card-custom bg-red-modern shadow py-4">
            <div class="card-body text-center">
                <h6 class="stat-label fw-bold text-uppercase">Críticos / Urgentes</h6>
                <p class="stat-number mb-0">0</p>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-3">
        <div class="card card-custom shadow py-4" style="background: linear-gradient(135deg, #198754 0%, #146c43ff 100%);">
            <div class="card-body text-center text-white">
                <h6 class="stat-label fw-bold text-uppercase">Concluídas</h6>
                <p class="stat-number mb-0">0</p>
            </div>
        </div>
    </div>

</div>
                    </div>
                </div>