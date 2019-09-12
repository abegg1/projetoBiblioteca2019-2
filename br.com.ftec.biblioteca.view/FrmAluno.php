<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body>
                <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="FrmEfetuarEmprestimo.php">Emprestimo</a></li>
                    <li><a href="FrmTrocaSolidária.php">Troca</a></li>
                    <li><a href="FrmListaLivros.php">Lista Livros</a></li>
                    <li><a href="FrmListaDoacoesDisponiveis.php">Lista Doações</a></li>
                    <li><a href="FrmAluno.php">Cadastro Alunos</a></li>
                    <li><a href="FrmAutores.php">Cadastro Autores</a></li>
                    <li><a href="FrmCategorias.php">Cadastro Categorias</a></li>
                    <li><a href="FrmColaborador.php">Cadastro Colaboradores</a></li>
                    <li><a href="FrmEditora.php">Cadastro Editoras</a></li>
                    <li><a href="Frmlivros.php">Cadastro Livros</a></li>
                    <li><a href="FrmListaLivros.php">Lista Livros</a></li>
                    <li><a href="FrmListaPendenciasPorPessoa.php">Lista Pendências</a></li>



                </ul>
            </div>
        </nav>
        
                <h1> Cadastro de Alunos</h1>



        <div class="container">
            <h2>Vertical (basic) form</h2>
            <form action="/action_page.php">
                
                  <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="nome" class="form-control" id="email" placeholder="Informe nome" name="nome">
                </div>
                
                  <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="telefone" class="form-control" id="email" placeholder="Informe telefone" name="telefone">
                </div>
                
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Informe email" name="email">
                </div>
                
                  <div class="form-group">
                    <label for="matricula">Matricula:</label>
                    <input type="matricula" class="form-control" id="email" placeholder="Informe matricula" name="matricula">
                </div>
                
                  <div class="form-group">
                    <label for="curso">Curso:</label>
                    <input type="curso" class="form-control" id="email" placeholder="Informe curso" name="curso">
                </div>
            
                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>

    </body>
</html>
