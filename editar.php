<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>
        <link href= "estilo.css" rel="stylesheet"/>
    </head>
    <body>

    <?php

        $pos = $_GET['pos'];
        $pos2 = $pos + 1;
        $pos3 = $pos2 + 1;
        $pos4 = $pos3 + 1;
        $arquivo = fopen("dados.txt","r");
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
    }
    $dados = explode(";",$linha);
    fclose($arquivo);

    ?>
     <center>
        <h3>SisArray - TDS08</h3>
    </center>
    <hr />
    <br />
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="bg-success p-2 text-dark bg-opacity-50" class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
                        </svg>&nbsp;&nbsp;<b>Edite Seus Dados</b></h4>
                </div>
                <div class="card-body text-start">
                    <form action="edita.php?pos=<?php echo $pos;?>" method="POST">
                        <label class="form-label">Nome</label><br />
                        <input type="text" name="nome" class="form-control" value="<?php echo $dados[$pos];?>" required /><br />
                        <label class="form-label">Idade</label><br />
                        <input type="number" name="idade" class="form-control" value="<?php echo $dados[$pos2];?>" required /><br />
                        <label class="form-label">Email</label><br />
                        <input type="email" name="email" class="form-control" value="<?php echo $dados[$pos3];?>" required /><br />
                        <label class="form-label">Reclamação</label><br />
                        <input type="text" name="reclamacao" class="form-control" value="<?php echo $dados[$pos4];?>" required /><br />
                        <button type="submit"  class="btn btn-outline-success" name="bteditar">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </body>
</html>