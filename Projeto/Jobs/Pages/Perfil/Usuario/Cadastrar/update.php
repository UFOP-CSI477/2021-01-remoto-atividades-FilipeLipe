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

    
    mysqli_query($conexao, "update `pessoas` SET `Nome`='$nome',`Descricao`='$descricao',`Perfil`='$perfil',`Idade`='$idade',`Sexo`='$sexo',`Curso`='$curso',`Faculdade`='$faculdade',`Periodo`='$periodo',`Tempo`='$tempo',`Empresa`='$empresa',`Cargo`='$cargo',`Ramo`='$ramo',`TempoTrabalho`='$tempoTrabalho',`Telefone`='$telefone',`Adicionais`='$adicionais' WHERE ID = '$id'");
    
    header("location:http://localhost/2021-01-remoto-atividades-FilipeLipe/projeto/jobs/pages/Perfil/Usuario/CriarUsuario/index.php");