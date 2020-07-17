<?php include 'database.php' ?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>    
        <title>Cadastro de Li</title>
    </head>
    <body style="background-color: gainsboro">
    <div class="page-header" align="center" >
        <h1>Cadastro</h1>
    </div>
    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
        <div class="panel panel-primary">
            <br>
            <div class="panel-body">
                <form action="#" method="POST">      
                    <label>Nome</label><input type="text" name="nome" required class="form-control"/>          
                    <label>Descrição:</label><input type="text" name="descricao" required class="form-control"/>      
                    <br>
                    <input type="submit" name="salvar" value="Salvar" class="btn btn-primary"/>
                    <a class="btn btn-secondary" href="dados.php" role="button">Voltar</a>
                </form>
            </div>
    </body>
</html>

<?php 
    if (isset($_POST['salvar'])) {
        $nome = $_POST['nome'];
        $decricao = $_POST['descricao'];
        
        if (isset($conn)) {
            
            $insert = $conn->prepare("INSERT INTO linguagem (nome, descricao) VALUES (:nome, :decricao)");
            $insert->bindParam(':nome', $nome);
            $insert->bindParam(':decricao', $decricao);                        
            
            $insert->execute();
            
            $insert->closeCursor();
            
            $conn = null;

            header('Location: dados.php');
        }
    }
?>