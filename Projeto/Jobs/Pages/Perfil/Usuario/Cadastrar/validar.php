<?php
    session_start();
    include("../../../../Componentes/conexao.php");

    $id = $_SESSION['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $perfil = $_POST['perfil'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $curso = $_POST['curso'];
    $faculdade = $_POST['faculdade'];
    $periodo = $_POST['periodo'];
    $tempo = $_POST['tempo'];
    $empresa = $_POST['empresa'];
    $cargo = $_POST['cargo'];
    $ramo = $_POST['ramo'];
    $tempoTrabalho = $_POST['tempoTrabalho'];
    $telefone = $_POST['telefone'];
    $adicionais = $_POST['adicionais'];

    
    mysqli_query($conexao, "insert into pessoas(ID, Nome, Descricao, Perfil, Idade, Sexo, Curso, Faculdade, Periodo, Tempo, Empresa, Cargo, Ramo, TempoTrabalho, Telefone, Adicionais) VALUES ('$id','$nome','$descricao', '$perfil', '$idade', '$sexo', '$curso', '$faculdade', '$periodo', '$tempo', '$empresa', '$cargo', '$ramo', '$tempoTrabalho', '$telefone', '$adicionais')");
    
    header("location:http://localhost/2021-01-remoto-atividades-FilipeLipe/projeto/jobs/pages/Perfil/Usuario/CriarUsuario/index.php");