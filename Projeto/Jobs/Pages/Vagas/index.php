<html>
    <head>
        <title>Jobs</title>
       
        <link rel="stylesheet" type="text/css" href="./styles.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="icon" href="../../img/Logo.png">
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
                    <img id="logo" src="../../img/Logo.png">
                </div>
            </div>

            <!--Menu da navbar-->
            <div class="row justify-content-md-center">
                <div class="col-1"></div>
                <div class="col-1 MenuHover AlinharTexto">
                    <a href="../Home/index.html">Home</a>
                </div>
                <div class="col-1 MenuHover AlinharTexto">
                    <a href="../Usuarios/index.php">Usuários</a> 
                </div>
                <div class="col-1 MenuHover2 AlinharTexto">
                    <a href="#">Vagas</a> 
                </div>
                <div class="col-5 LinhaMenu"></div>
                <div class="col-1 MenuHover AlinharTexto">
                    <a href="../Cadastro/index.html">Cadastro</a> 
                </div>
                <div class="col-1 MenuHover AlinharTexto">
                    <a href="../Login/index.html">Login</a> 
                </div>
                <div class="col-1"></div>
            </div>
        </div>

        <div class="container">
            <h1 class="Titulo">VAGAS</h1>
        </div>
        <?php 
        session_start();
        include("../../Componentes/conexao.php");        
        
        $select = mysqli_query($conexao,"select * from empresa order by id desc");
        
        while($linha=mysqli_fetch_assoc($select)){
            
            $nome = $linha['Nome'];
            $descricao = $linha['Descricao'];
            $salario = $linha['Salario'];
            $horas = $linha['Horas'];
            $empresa = $linha['Empresa'];
            
        ?>
        <div class="container">
            <div action="">
                <div id="Elemento">

                    <div class="row">
                        <div class="col-4">
                            <h2><?=$nome?></h2>   
                        </div>
                        <div class="col"></div>
                        <div class="col">
                            <div class="row">
                                <h5>Salario</h5>
                            </div>
                            <div class="row">
                                <p><?=$salario?></p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <h5>Horas</h5>
                            </div>
                            <div class="row">
                                <p><?=$horas?></p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <h5>Empresa</h5>
                            </div>
                            <div class="row">
                                <p><?=$empresa?></p>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
                    <div class="row">
                        <p class="Descricao"><?=$descricao?></p>
                    </div>

                </div>
            </div>
        </div>
        <?php }?>
    </body>
</html>