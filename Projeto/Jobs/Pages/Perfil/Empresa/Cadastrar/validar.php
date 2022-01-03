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

    
    mysqli_query($conexao, "insert INTO `empresa`(`ID`, `Nome`, `Descricao`, `Salario`, `Horas`, `Empresa`, `Requisitos`, `Beneficios`) VALUES ('$id','$nome','$descricao','$salario','$horas','$empresa','$requisitos','$beneficios')");
    
    header("location:http://localhost/2021-01-remoto-atividades-FilipeLipe/projeto/jobs/pages/Perfil/Empresa/CriarVaga/index.php");