<html>
    <head>
        <title>Jobs</title>
       
        <link rel="stylesheet" type="text/css" href="./styles.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="icon" href="../../../../img/Logo.png">
        <link rel="stylesheet/less" type="text/css" href="styles.less" />

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap');
        </style>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script src="./jobs.js"></script>
    </head>

    <body>

        <div class="container-fluid">
            <!--Logo da navbar-->
            <div class="row justify-content-md-center">
                <div class="col col-lg-1">
                    <img id="logo" src="../../../../img/Logo.png">
                </div>
            </div>

            <!--Menu da navbar-->
            <div class="row justify-content-md-center">
                <div class="col-1"></div>
                <div class="col-1 MenuHover AlinharTexto">
                    <a href="../../../Home/index.html">Home</a>
                </div>
                <div class="col-1 MenuHover AlinharTexto">
                    <a href="../../../Usuarios/index.php">Usuários</a> 
                </div>
                <div class="col-1 MenuHover AlinharTexto">
                    <a href="../../../Vagas/index.php">Vagas</a> 
                </div>
                <div class="col-5 LinhaMenu"></div>
                <div class="col-1 MenuHover AlinharTexto">
                    <a href="../../../Login/index.html">Logout</a> 
                </div>
                <div class="col-1 MenuHover2 AlinharTexto">
                    <a href="#">Perfil</a> 
                </div>
                <div class="col-1"></div>
            </div>
        </div>

        <div class="container">
            <h1 id="Titulo">USUARIOS</h1>
        </div>

        <?php 
        session_start();
        include("../../../../Componentes/conexao.php");        
        
        $select = mysqli_query($conexao,"select * from pessoas order by id desc");
        
        while($linha=mysqli_fetch_assoc($select)){
            $ID = $linha['ID'];
            if($_SESSION['id'] == $ID){
                $ID = $linha['ID'];
                $nome = $linha['Nome'];
                $descricao = $linha['Descricao'];
                $perfil = $linha['Perfil'];
                $idade = $linha['Idade'];
                $sexo = $linha['Sexo'];
                $curso = $linha['Curso'];
                $faculdade = $linha['Faculdade'];
                $periodo = $linha['Periodo'];
                $tempo = $linha['Tempo'];
                $empresa = $linha['Empresa'];
                $cargo = $linha['Cargo'];
                $ramo = $linha['Ramo'];
                $tempoTrabalho = $linha['TempoTrabalho'];
                $telefone = $linha['Telefone'];
                $adicionais = $linha['Adicionais'];
                ?>
        <div id="Form">
            <form action="update.php" method="post">
                <!--Informações-->        
                <div class="row d-flex justify-content-center" >
                    <div class="col">
                        <input type="text" name="nome" id="Nome" class="CampoText" placeholder="Nome" value="<?=$nome?>">
                    </div>
                </div>
                <div class="row d-flex justify-content-center" >
                    <div class="col">
                        <input type="text" name="descricao" id="Descricao" class="CampoText" placeholder="Descrição" value="<?=$descricao?>">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <input type="text" name="perfil" id="Perfil" class="CampoText" placeholder="Perfil" value="<?=$perfil?>">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <p>O Perfil pode ser encontrado aqui: https://www.16personalities.com/br/teste-de-personalidade</p>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <input type="text" name="idade" id="Idade" class="CampoText" placeholder="Idade" value="<?=$idade?>">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <input type="text" name="sexo" id="Sexo" class="CampoText" placeholder="Sexo" value="<?=$sexo?>">
                    </div>
                </div>

                <!--Requisitos--> 
                <div class="row justify-content-md-center">
                    <div class="col">
                        <h1>Formação</h1>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <input type="text" name="curso" id="Curso" class="CampoText" placeholder="Curso" value="<?=$curso?>">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <input type="text" name="faculdade" id="Universidade" class="CampoText" placeholder="Universidade" value="<?=$faculdade?>">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <input type="text" name="periodo" id="Periodo" class="CampoText" placeholder="Periodo" value="<?=$periodo?>">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <input type="text" name="tempo" id="Tempo" class="CampoText" placeholder="Tempo (Ano inicio - Ano conclusão)" value="<?=$tempo?>">
                    </div>
                </div>
                <!--Beneficios--> 
                <div class="row justify-content-md-center">
                    <div class="col">
                        <h1>Experiencias</h1>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <input type="text" name="empresa" id="Empresa" class="CampoText" placeholder="Empresa" value="<?=$empresa?>">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <input type="text" name="cargo" id="Cargo" class="CampoText" placeholder="Cargo" value="<?=$cargo?>">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <input type="text" name="ramo" id="RamoEmpresa" class="CampoText" placeholder="Ramo Empresa" value="<?=$ramo?>">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <input type="text" name="tempoTrabalho" id="TempoTrabalho" class="CampoText" placeholder="Tempo de Trabalho" value="<?=$tempoTrabalho?>">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <input type="text" name="telefone" id="Telefone" class="CampoText" placeholder="Telefone" value="<?=$telefone?>">
                    </div>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col">
                        <h1>Portfólio</h1>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <input type="text" id="Link" class="CampoText" placeholder="Link do drive">
                    </div>
                </div>

                <div class="row justify-content-md-center">
                    <div class="col">
                        <h1>Adicionais</h1>
                    </div>
                </div>
                <div class="row d-flex justify-content-center" >
                    <div class="col">
                        <input type="text" name="adicionais" id="Descricao" class="CampoText" placeholder="Descrição" value="<?=$adicionais?>">
                    </div>
                </div>
                <!--Botao--> 
                <div class="row justify-content-md-center">
                    <div class="col">
                        <input type="submit" id="Botao" value="Salvar"></input>
                    </div>
                </div>
            </form>
        </div>
        <?php }}?>
    </body>
</html>