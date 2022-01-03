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
            <h1 id="Titulo">VAGA</h1>
        </div>

        <?php 
            session_start();
            include("../../../../Componentes/conexao.php");        
            
            $select = mysqli_query($conexao,"select * from empresa order by id desc");
            
            while($linha=mysqli_fetch_assoc($select)){
                $ID = $linha['ID'];
                if($_SESSION['id'] == $ID){
                    $nome = $linha['Nome'];
                    $descricao = $linha['Descricao'];
                    $salario = $linha['Salario'];
                    $horas = $linha['Horas'];
                    $empresa = $linha['Empresa'];
                    $requisitos = $linha['Requisitos'];
                    $beneficios = $linha['Beneficios'];
                
                    
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
                        <input type="text" name="salario" id="Salario" class="CampoText" placeholder="Salario" value="<?=$salario?>">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <input type="text" name="horas" id="Horas" class="CampoText" placeholder="Horas" value="<?=$horas?>">
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col">
                        <input type="text" name="empresa" id="Empresa" class="CampoText" placeholder="Empresa" value="<?=$empresa?>">
                    </div>
                </div>

                <!--Requisitos--> 
                <div class="row justify-content-md-center">
                    <div class="col">
                        <h1>Requisitos</h1>
                    </div>
                </div>
                <div class="row d-flex justify-content-center" >
                    <div class="col">
                        <input type="text" name="requisitos" id="Requisitos" class="CampoText" placeholder="Requisitos" value="<?=$requisitos?>">
                    </div>
                </div>

                <!--Beneficios--> 
                <div class="row justify-content-md-center">
                    <div class="col">
                        <h1>Benefícios</h1>
                    </div>
                </div>
                <div class="row d-flex justify-content-center" >
                    <div class="col">
                        <input type="text" name="beneficios" id="Beneficios" class="CampoText" placeholder="Beneficios" value="<?=$beneficios?>">
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
        <?php }} ?>
    </body>
</html>