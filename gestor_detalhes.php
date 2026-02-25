<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    

<!-- <main class="container mt-4">
    <div class="row"> <section class="col-md-6 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-header bg-white border-bottom-0 pt-3">
                    <h5 class="card-title fw-bold">Status de solicitação</h5>
                </div>

                <div class="card-body pt-0">
                    <div class="mb-3">
                        <p class="text-secondary small mb-1">Status</p>
                        <span class="badge rounded-pill bg-success px-3 py-2 fw-bold">
                            Concluído
                        </span>
                    </div>

                    <div class="mb-3">
                        <p class="text-secondary small mb-1">Descrição</p>
                        <p class="fw-semibold mb-0">Ajuste na fiação do ar-condicionado</p>
                    </div>

                    <div class="mb-3">
                        <p class="text-secondary small mb-1">Local</p>
                        <p class="fw-semibold mb-0">Sala de Reuniões 02</p>
                    </div>

                    <div class="mb-3">
                        <p class="text-secondary small mb-1">Solicitante</p>
                        <p class="fw-semibold mb-0">Marcos Oliveira</p>
                    </div>

                    <div class="mb-3">
                        <p class="text-secondary small mb-1">Abertura</p>
                        <p class="fw-semibold mb-0">06/02/2026</p>
                    </div>

                    

                    <hr class="text-muted">

                    <div class="mt-3">
                        <p class="text-secondary small mb-2">Evidências (imagens)</p>
                        <div class="d-flex gap-2">
                            <img src="https://via.placeholder.com/80" class="img-thumbnail rounded" alt="Evidência 1">
                            <img src="https://via.placeholder.com/80" class="img-thumbnail rounded" alt="Evidência 2">
                        </div>
                    </div> -->

<button type="button" class="btn btn-outline-secondary">Secondary</button>


<section class="col-md-6 mb-4">
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-white fw-bold">Dados da Solicitação</div>
        <div id="detalhesChamado" class="card-body">Carregando...</div>
    </div>
    </div>
</section>
            <!-- <li class="list-group-item p-0 border-0 mt-3">
    <button class="btn btn-primary w-100 py-2" type="submit">
        Receber Chamado
    </button>
</li> -->

        </section>

        

        <section class="col-md-6 mb-4"> 
            <ul class="list-group shadow-sm">
                <li class="list-group-item bg-primary text-dark fw-bold border-warning" aria-current="true">
                    Triagem e Atribuição
                </li>
                <li class="list-group-item">
                    <p class="mb-1 fw-bold">Técnico Responsável</p>
                    <select id="tecnico" name="tecnico" class="form-select">
                        <option value="charles">Charles Oliveira</option>
                        <option value="alex" selected>Alex Pereira</option>
                        <option value="jose">José Aldo</option>
                    </select>
                </li>
                <li class="list-group-item">
                    <p class="mb-1 fw-bold">Prioridade</p>
                    <select name="priority" id="priority" class="form-select">
                         <option value="Urgente">Urgente</option>
                        <option value="Alta">Alta</option>
                        <option value="Media">Média</option>
                        <option value="Baixa">Baixa</option>
                    </select>
                </li>
                <li class="list-group-item">
                    <label for="data-prevista" class="fw-bold mb-1">Data Prevista</label>
                    <input type="date" id="data-prevista" name="data-prevista" class="form-control">
                </li>
                <div>
                        <button type="date" id="data_prevista" class="form-control" required></button>
                    </div> 
            </ul>
        </section>

    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<script>
        function verFoto(url) {
            document.getElementById('imgModal').src = url;
            new bootstrap.Modal(document.getElementById('modalFoto')).show();
        }

        async function carregarDados() {
            // Carrega Técnicos
            const resTec = await fetch('api/usuarios.php');
            const tecnicos = await resTec.json();
            const select = document.getElementById('selectTecnico');
            select.innerHTML = '<option value="">Selecione um técnico...</option>';
            tecnicos.forEach(t => select.innerHTML += `<option value="${t.id_usuario}">${t.nome}</option>`);

            // Carrega Chamado
            const c = await (await fetch(`api/chamados.php?id=<?= $id ?>`)).json();
            document.getElementById('detalhesChamado').innerHTML = `
                <p><strong>Status:</strong> <span class="badge bg-secondary">${c.status.toUpperCase()}</span></p>
                <p><strong>Descrição:</strong> ${c.descricao_problema}</p>
                <p><strong>Local:</strong> ${c.bloco_nome} - ${c.ambiente_nome}</p>
                <p><strong>Solicitante:</strong> ${c.solicitante_nome}</p>
                <p><strong>Abertura:</strong> ${new Date(c.data_abertura).toLocaleString()}</p>
                <div id="fotosContainer"></div>
            `;

            if(c.id_tecnico) document.getElementById('selectTecnico').value = c.id_tecnico;
            if(c.prioridade) document.getElementById('prioridade').value = c.prioridade;
            if(c.data_previsao_conclusao) document.getElementById('data_prevista').value = c.data_previsao_conclusao;

            // Carrega Fotos
            const anexos = await (await fetch(`api/anexos.php?id_chamado=<?= $id ?>`)).json();
            if(anexos.length > 0) {
                let htmlFotos = '<hr><h6>Evidências:</h6><div class="row">';
                anexos.forEach(arq => {
                    htmlFotos += `
                        <div class="col-4 text-center mb-2">
                            <img src="${arq.caminho_arquivo}" class="thumb-img" onclick="verFoto('${arq.caminho_arquivo}')">
                            <small class="text-muted">${arq.tipo_anexo === 'abertura' ? 'Abertura' : 'Conclusão'}</small>
                        </div>`;
                });
                document.getElementById('fotosContainer').innerHTML = htmlFotos + '</div>';
            }

            // Botões de Status
            const area = document.getElementById('areaFechamento');
            if (c.status === 'concluido') {
                area.innerHTML = `<div class="alert alert-success">
                    <h6>Técnico finalizou:</h6><p>${c.solucao_tecnica || 'Sem descrição'}</p>
                    <button onclick="alterarStatusOS(<?= $id ?>, 'fechar')" class="btn btn-success w-100">Fechar O.S.</button>
                </div>`;
            } else if (c.status === 'fechado') {
                area.innerHTML = `<button onclick="alterarStatusOS(<?= $id ?>, 'reabrir')" class="btn btn-warning w-100">Reabrir Chamado</button>`;
            }
        }

        async function alterarStatusOS(id, acao) {
            if(!confirm("Confirmar alteração de status?")) return;
            const res = await fetch('api/gestor_acoes.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify({ id_chamado: id, acao: acao })
            });
            if((await res.json()).success) location.reload();
        }

        document.getElementById('formAtribuir').onsubmit = async (e) => {
            e.preventDefault();
            const res = await fetch('api/atribuir_chamado.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify({
                    id_chamado: <?= $id ?>,
                    id_tecnico: document.getElementById('selectTecnico').value,
                    prioridade: document.getElementById('prioridade').value,
                    data_prevista: document.getElementById('data_prevista').value
                })
            });
            if((await res.json()).success) window.location.href = 'gestor_chamados.php';
        };

        carregarDados();
    </script>
