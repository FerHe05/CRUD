<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></head>  
    <link href= "estilo.css" rel="stylesheet"/>
<body>
 
    <center>
        <h3>SisArray - TDS08</h3>
    </center>
    <hr />
    <br />
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center" >
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm" >
                <div class="card-header py-3">
                    <h4 class="bg-success p-2 text-dark bg-opacity-50" class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
  <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
</svg>&nbsp;<b>Reclame Aqui</b></h4>
                </div>
                <div class="card-body text-start">
                    <form action="index.php" method="POST">
                        <label class="form-label">Nome</label><br />
                        <input type="text" name="nome" class="form-control" placeholder="Digite o seu nome" required /><br />
                        <label class="form-label">Idade</label><br />
                        <input type="number" name="idade" class="form-control" placeholder="Digite a sua idade" required /><br />
                        <label clorm-laass="fbel">Email</label><br />
                        <input type="email" name="email" class="form-control" placeholder="Digite seu Email" required /><br />
                        <label clorm-laass="fbel">Reclamação</label><br />
                        <input type="text" name="reclamacao" class="form-control" placeholder="Digite sua reclamação" required /><br />
                        <button type="submit"  class="btn btn-outline-success" name="btgravar">ENVIAR</button>
                    </form>
                    <?php
                    if (isset($_POST['btgravar'])){
                        $nome = $_POST['nome'];
                        $idade = $_POST['idade'];
                        $email = $_POST['email'];
                        $reclamacao = $_POST['reclamacao'];

                        $arquivo = 'dados.txt';
                        $texto = $nome . ";" . $idade . ";" . $email . ";" .$reclamacao . ";";
                        $file = fopen($arquivo, 'a');
                        fwrite($file, $texto);
                        fclose($file);
                    } else {
                        echo "";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="bg-success p-2 text-dark bg-opacity-50" class="my-0 fw-normal"> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="40" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>&nbsp;<b>Seus Dados</b></h4></div>
                <div class="card-body opacity 0">
                    <table  class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Idade</th>
                                <th scope="col">Email</th>
                                <th scope="col">Reclamação</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $arquivo = fopen("dados.txt", "r");
                            while (!feof($arquivo)) {
                                $linha = fgets($arquivo);
                            }
                            $dados = explode(";", $linha);
                            fclose($arquivo);
                            echo '<br/><br/>';
                            $conta = count($dados) - 3;
                            for ($i = 0; $i <= $conta; $i++) {
                                $posicao = $i;
                                echo '<tr>';
                                echo '<td>' . $dados[$i] . '</td>';
                                $i++;
                                echo '<td>' . $dados[$i] . '</td>';
                                $i++;                                                             
                                echo '<td>' . $dados[$i] . '</td>';
                                $i++;                                                             
                                echo '<td>' . $dados[$i] . '</td>';                                                                                           
                                echo '<td><a href="editar.php?pos=' . $posicao . '"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                              </svg>Editar</a> | <a href="excluir.php?pos=' . $posicao . '"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-trash-fill" viewBox="0 0 16 16">
                              <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>Excluir</a></td>';
                                echo '</tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
