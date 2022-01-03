<?php

    include("../../Componentes/conexao.php");

    $email = $_POST['email'];
    $password = $_POST['senha'];

    
    $select = mysqli_query($conexao,"select * from users order by id desc");
    
    while($linha=mysqli_fetch_array($select)){
        if($linha["Email"] == $email && $linha["Senha"] == $password){
            if($linha["Tipo"] == 1){
                header("location:http://localhost/2021-01-remoto-atividades-FilipeLipe/projeto/jobs/pages/perfil/empresa/criarvaga/index.php"); 
            }else{
                header("location:http://localhost/2021-01-remoto-atividades-FilipeLipe/projeto/jobs/pages/Perfil/Usuario/CriarUsuario/index.php"); 
            }
        }else{
            echo  "<script>alert('Email ou Senha errados !!');</script>";   
        }
    }