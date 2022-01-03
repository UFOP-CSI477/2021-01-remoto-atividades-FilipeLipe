<?php
    session_start();
    include("../../../../Componentes/conexao.php");

    $id = $_SESSION['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $salario = $_POST['salario'];
    $horas = $_POST['horas'];
    $empresa = $_POST['empresa'];
    $requisitos = $_POST['requisitos'];
    $beneficios = $_POST['beneficios'];

    
    mysqli_query($conexao, "update `empresa` SET `Nome`='$nome',`Descricao`='$descricao',`Salario`='$salario',`Horas`='$horas',`Empresa`='$empresa',`Requisitos`='$requisitos',`Beneficios`='$beneficios' WHERE ID = '$id'");
    
    header("location:http://localhost/2021-01-remoto-atividades-FilipeLipe/projeto/jobs/pages/Perfil/Empresa/CriarVaga/index.php");