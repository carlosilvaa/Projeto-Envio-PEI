<?php
session_start();
defined('CONTROL') or die('Acesso inválido')
?>
<div class="container" id="home-page">
    <h1 class="text-center my-2 text-dark" id="admin-title">Painel de Alunos</h1>

    <div class="d-flex justify-content-end mb-3">
        <button class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#addAlunoModal"><strong>+</strong> Aluno</button>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProfessorModal"><strong>+</strong> Professor</button>
    </div>

    <div class="accordion" id="alunosAccordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingAluno1">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAluno1" aria-expanded="false" aria-controls="collapseAluno1">
                    João Silva - Análise e Desenvolvimento de Sistemas
                </button>
            </h2>
            <div id="collapseAluno1" class="accordion-collapse collapse" aria-labelledby="headingAluno1" data-bs-parent="#alunosAccordion">
                <div class="accordion-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex">
                            Ana Souza - Desenvolvimento de Software
                            <button class="btn btn-outline-success btn-sm ms-auto" data-bs-toggle="modal" data-bs-target="#uploadDocumentModal" onclick="setStudentId('2')">
                                <i class="fas fa-paper-plane">&nbsp</i>Enviar PEI
                            </button>
                        </li>
                        <li class="list-group-item d-flex">
                            Carlos Andrade - Qualidade de Software
                            <button class="btn btn-outline-success btn-sm ms-auto" data-bs-toggle="modal" data-bs-target="#uploadDocumentModal" onclick="setStudentId('2')">
                                <i class="fas fa-paper-plane">&nbsp</i>Enviar PEI
                            </button>
                        </li>
                    </ul>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#uploadDocumentModal" onclick="setStudentId('id')">Anexar PEI</button>
                </div>
            </div>
        </div>

        <div class="accordion-item">
            <h2 class="accordion-header" id="headingAluno2">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAluno2" aria-expanded="false" aria-controls="collapseAluno2">
                    Maria Oliveira - Ciência da computação
                </button>
            </h2>
            <div id="collapseAluno2" class="accordion-collapse collapse" aria-labelledby="headingAluno2" data-bs-parent="#alunosAccordion">
                <div class="accordion-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex">
                            Beatriz Costa - Algorítmos
                            <button class="btn btn-outline-success btn-sm ms-auto" data-bs-toggle="modal" data-bs-target="#uploadDocumentModal" onclick="setStudentId('2')">
                                <i class="fas fa-paper-plane">&nbsp</i>Enviar PEI
                            </button>
                        </li>
                        <li class="list-group-item d-flex">
                            Ricardo Pereira - Desenvolvimento Web Cliente
                            <button class="btn btn-outline-success btn-sm ms-auto" data-bs-toggle="modal" data-bs-target="#uploadDocumentModal" onclick="setStudentId('2')">
                                <i class="fas fa-paper-plane">&nbsp</i>Enviar PEI
                            </button>
                        </li>
                    </ul>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#uploadDocumentModal" onclick="setStudentId('id')">Anexar PEI</button>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="addAlunoModal" tabindex="-1" aria-labelledby="addAlunoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addAlunoModalLabel">Adicionar Aluno</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="nomeAluno" class="form-label">Nome do Aluno</label>
                        <input type="text" class="form-control" id="nomeAluno" placeholder="Insira o nome do aluno">
                    </div>
                    <div class="mb-3">
                        <label for="materiaAluno" class="form-label">Disciplinas</label>
                        <input type="text" class="form-control" id="materiaAluno" placeholder="Insira as matérias">
                    </div>
                    <button type="submit" class="btn btn-warning">Adicionar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addProfessorModal" tabindex="-1" aria-labelledby="addProfessorModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProfessorModalLabel">Adicionar Professor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="nomeProfessor" class="form-label">Nome do Professor</label>
                        <input type="text" class="form-control" id="nomeProfessor" placeholder="Insira o nome do professor">
                    </div>
                    <div class="mb-3">
                        <label for="emailProfessor" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailProfessor" placeholder="Insira o e-mail">
                    </div>
                    <div class="mb-3">
                        <label for="materiaProfessor" class="form-label">Disciplinas</label>
                        <input type="text" class="form-control" id="materiaProfessor" placeholder="Insira a disciplina">
                    </div>
                    <button type="submit" class="btn btn-warning">Adicionar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="uploadDocumentModal" tabindex="-1" aria-labelledby="uploadDocumentLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadDocumentLabel">Anexar PEI ao Aluno</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="uploadForm" action="upload.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="studentId" class="form-label d-none">ID do Aluno</label>
                        <input type="text" class="form-control d-none" id="studentId" name="studentId" required readonly>
                    </div>
                    <div class="mb-3">
                        <label for="document" class="form-label">Selecione o documento (PDF)</label>
                        <input type="file" class="form-control" id="document" name="document" accept=".pdf" required>
                    </div>
                    <button type="submit" class="btn btn-warning">Anexar Documento</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function setStudentId(id) {
        document.getElementById('studentId').value = id;
    }
</script>