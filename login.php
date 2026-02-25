<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>SGM - Login Profissional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        :root {
            --primary-color: #2563ebff;
            --accent-gradient: linear-gradient(135deg, #2563eb 0%, #7c3aed 100%);
        }

        body { 
            background-color: #ffffff; 
            height: 100vh; 
            margin: 0;
            overflow: hidden;
        }

        .login-container { height: 100vh; }

        /* Lado Esquerdo - Visual */
        .login-visual {
            background: var(--accent-gradient);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            padding: 3rem;
        }

        /* Lado Direito - Formulário */
        .login-form-section {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .form-wrapper { width: 100%; max-width: 360px; }

        .form-control {
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #e5e7eb;
            background-color: #f9fafb;
        }

        .form-control:focus {
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
            border-color: var(--primary-color);
        }

        .btn-login {
            background: var(--accent-gradient);
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-weight: 600;
            transition: transform 0.2s;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            opacity: 0.9;
        }

        .brand-logo {
            font-size: 2.5rem;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 1rem;
        }

        @media (max-width: 768px) {
            .login-visual { display: none; }
        }
    </style>
</head>
<body>

    <div class="container-fluid p-0">
        <div class="row g-0 login-container">
            <div class="col-md-6 col-lg-7 login-visual">
                <div class="text-center">
                    <i class="bi bi-shield-lock-fill" style="font-size: 4rem;"></i>
                    <h1 class="brand-logo">SGM</h1>
                    <p class="fs-5 opacity-75">Sistema de Gestão de Manutenção</p>
                    <div class="mt-4 pt-4 border-top border-white border-opacity-25">
                        <small>Eficiência e controle na palma da sua mão.</small>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-5 login-form-section">
                <div class="form-wrapper">
                    <div class="mb-5">
                        <h2 class="fw-bold text-dark">Bem-vindo de volta</h2>
                        <p class="text-muted">Insira seus dados para acessar o painel.</p>
                    </div>

                    <form id="formLogin">
                        <div class="mb-4">
                            <label class="form-label fw-semibold small text-uppercase">E-mail Corporativo</label>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent border-end-0"><i class="bi bi-envelope text-muted"></i></span>
                                <input type="email" id="email" class="form-control border-start-0" placeholder="nome@empresa.com" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="d-flex justify-content-between">
                                <label class="form-label fw-semibold small text-uppercase">Senha</label>
                                <a href="#" class="text-decoration-none small fw-bold">Esqueceu?</a>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text bg-transparent border-end-0"><i class="bi bi-lock text-muted"></i></span>
                                <input type="password" id="senha" class="form-control border-start-0" placeholder="••••••••" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-login w-100 mb-3">
                            Entrar no Sistema
                        </button>
                        
                        <div id="mensagem" class="text-center text-danger small fw-bold"></div>
                    </form>

                    <footer class="mt-5 text-center">
                        <p class="small text-muted">&copy; 2026 SGM Tech. Todos os direitos reservados.</p>
                    </footer>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>