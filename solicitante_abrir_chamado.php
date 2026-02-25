<?php
session_start();
// Removido o erro de sintaxe do if original para garantir o funcionamento
if(!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGM - Nova Solicitação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark shadow-sm mb-4" style="background-color: #2563eb;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="solicitante_dashboard.php">
                <i class="bi bi-tools me-2"></i>SGM
            </a>
            <a href="solicitante_dashboard.php" class="btn btn-outline-light btn-sm">
                <i class="bi bi-arrow-left me-1"></i> Voltar
            </a>
        </div>
    </nav>

    <main class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                
                <div class="mb-4">
                    <h2 class="h4 fw-bold text-dark m-0">Abrir Novo Chamado</h2>
                    <p class="text-muted small">Preencha os detalhes abaixo para solicitar manutenção.</p>
                </div>

                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <form id="formChamado">
                            
                            <div class="mb-3">
                                <label for="selectBloco" class="form-label fw-bold small text-uppercase text-secondary">Bloco</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light text-muted"><i class="bi bi-building"></i></span>
                                    <select id="selectBloco" class="form-select" required onchange="carregarAmbientes(this.value)">
                                        <option value="">Selecione o Bloco..</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="selectAmbiente" class="form-label fw-bold small text-uppercase text-secondary">Ambiente / Sala</label>