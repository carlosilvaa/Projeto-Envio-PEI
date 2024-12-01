<?php
defined('CONTROL') or die('Acesso inválido');
?>

<div class="container mt-4" id="gerenciar-page">
    <h1 class="text-center text-dark mb-4" id="admin-title">Gerenciar Cadastros</h1>
    <div class="inner-container">
        <ul class="nav nav-pills justify-content-center" id="gerenciarTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="professor-tab" data-bs-toggle="pill" href="#professor" role="tab" aria-controls="professor" aria-selected="true">
                    <i class="bi bi-person-bounding-box"></i> Professor
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="aluno-tab" data-bs-toggle="pill" href="#aluno" role="tab" aria-controls="aluno" aria-selected="false">
                    <i class="bi bi-person-lines-fill"></i> Aluno
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="materia-tab" data-bs-toggle="pill" href="#materia" role="tab" aria-controls="materia" aria-selected="false">
                    <i class="bi bi-book"></i> Matéria
                </a>
            </li>
        </ul>

        <div class="tab-content mt-2 " id="gerenciarTabsContent">
            <div class="tab-pane fade show active" id="professor" role="tabpanel" aria-labelledby="professor-tab">
                <h4 class="">Professores Cadastrados</h4>
                <ul class="list-group list-group-flush" id="listaProfessores">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        João Silva
                        <div class="btn-group" role="group">
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editarProfessorModal" onclick="editarProfessor(1)">
                                <i class="bi bi-pencil"></i> Editar
                            </button>
                            <button class="btn btn-danger btn-sm" onclick="deletarItem('professor', 1)">
                                <i class="bi bi-trash"></i> Excluir
                            </button>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Maria Souza
                        <div class="btn-group" role="group">
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editarProfessorModal" onclick="editarProfessor(2)">
                                <i class="bi bi-pencil"></i> Editar
                            </button>
                            <button class="btn btn-danger btn-sm" onclick="deletarItem('professor', 2)">
                                <i class="bi bi-trash"></i> Excluir
                            </button>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="tab-pane fade" id="aluno" role="tabpanel" aria-labelledby="aluno-tab">
                <h4 class="mb-3">Alunos Cadastrados</h4>
                <ul class="list-group list-group-flush" id="listaAlunos">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Lucas Pereira
                        <div class="btn-group" role="group">
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editarAlunoModal" onclick="editarAluno(1)">
                                <i class="bi bi-pencil"></i> Editar
                            </button>
                            <button class="btn btn-danger btn-sm" onclick="deletarItem('aluno', 1)">
                                <i class="bi bi-trash"></i> Excluir
                            </button>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Ana Oliveira
                        <div class="btn-group" role="group">
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editarAlunoModal" onclick="editarAluno(2)">
                                <i class="bi bi-pencil"></i> Editar
                            </button>
                            <button class="btn btn-danger btn-sm" onclick="deletarItem('aluno', 2)">
                                <i class="bi bi-trash"></i> Excluir
                            </button>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="tab-pane fade" id="materia" role="tabpanel" aria-labelledby="materia-tab">
                <h4 class="mb-3">Matérias Cadastradas</h4>
                <ul class="list-group list-group-flush" id="listaMaterias">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Matemática
                        <div class="btn-group" role="group">
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editarMateriaModal" onclick="editarMateria(1)">
                                <i class="bi bi-pencil"></i> Editar
                            </button>
                            <button class="btn btn-danger btn-sm" onclick="deletarItem('materia', 1)">
                                <i class="bi bi-trash"></i> Excluir
                            </button>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        História
                        <div class="btn-group" role="group">
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editarMateriaModal" onclick="editarMateria(2)">
                                <i class="bi bi-pencil"></i> Editar
                            </button>
                            <button class="btn btn-danger btn-sm" onclick="deletarItem('materia', 2)">
                                <i class="bi bi-trash"></i> Excluir
                            </button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editarProfessorModal" tabindex="-1" aria-labelledby="editarProfessorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarProfessorModalLabel">Editar Professor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <form id="editarProfessorForm">
                    <div class="mb-3">
                        <label for="professorNome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="professorNome" required>
                    </div>
                    <div class="mb-3">
                        <label for="professorEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="professorEmail" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editarAlunoModal" tabindex="-1" aria-labelledby="editarAlunoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarAlunoModalLabel">Editar Aluno</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <form id="editarAlunoForm">
                    <div class="mb-3">
                        <label for="alunoNome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="alunoNome" required>
                    </div>
                    <div class="mb-3">
                        <label for="alunoEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="alunoEmail" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editarMateriaModal" tabindex="-1" aria-labelledby="editarMateriaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarMateriaModalLabel">Editar Matéria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <form id="editarMateriaForm">
                    <div class="mb-3">
                        <label for="materiaNome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="materiaNome" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<style>
    body {
        background-color: #fff;
    }

    .inner-container {
        background-color: white;
        padding: 6px 10px;
        border-radius: 6px;
    }

    .nav-pills .nav-link.active {
        background-color: #f0ad4e !important;
        border-color: #f0ad4e !important;
    }

    .nav-link {
        color: #333;
    }

    .list-group-item {
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .btn-warning {
        background-color: #f0ad4e;
        border-color: #f0ad4e;
    }

    .btn-warning:hover {
        background-color: #ec971f;
        border-color: #d58512;
    }
</style>
<script>

function editarProfessor(id) {
    // Preencher os campos do modal com os dados do professor (dados estáticos aqui)
    if (id === 1) {
        document.getElementById('professorNome').value = 'João Silva';
        document.getElementById('professorEmail').value = 'joao@exemplo.com';
    } else {
        document.getElementById('professorNome').value = 'Maria Souza';
        document.getElementById('professorEmail').value = 'maria@exemplo.com';
    }
}

function editarAluno(id) {
    // Preencher os campos do modal com os dados do aluno
    if (id === 1) {
        document.getElementById('alunoNome').value = 'Lucas Pereira';
        document.getElementById('alunoEmail').value = 'lucas@exemplo.com';
    } else {
        document.getElementById('alunoNome').value = 'Ana Oliveira';
        document.getElementById('alunoEmail').value = 'ana@exemplo.com';
    }
}

function editarMateria(id) {
    // Preencher os campos do modal com os dados da matéria
    if (id === 1) {
        document.getElementById('materiaNome').value = 'Matemática';
    } else {
        document.getElementById('materiaNome').value = 'História';
    }
}

function deletarItem(tipo, id) {
    // Confirmar a exclusão do item e simular a exclusão
    if (confirm(`Tem certeza de que deseja excluir este ${tipo}?`)) {
        // Simular exclusão no front-end
        alert(`${tipo} ${id} excluído com sucesso!`);
        // Aqui você poderia remover o item da lista com JS
    }
}

</script>
