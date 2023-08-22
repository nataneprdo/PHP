<!--CSS-->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<!--VARIAVEL DO  TIPO POST:
//Geralmente utilizado para pegar informações via formulário-->

<div class="container">
<h1>Contato</h1>
<form action=""  method="POST">
    <label>Nome:</label>
    <input type="text" name="nome" placeholder="Digite o seu nome" class="form-control">
    <label>Assunto:</label>
    <input type="text" name="assunto" placeholder="Digite o assunto" class="form-control">
    <label>Mensagem:</label>
    <textarea name="mensagem" placeholder="Digite a mensagem" class="form-control"></textarea>
    <input type="submit" name="submit" value="Enviar" class="btn-btn-sucess">
</form>

<?php 

if(isset($_POST['submit'])){
    $nome = $_POST['nome'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    echo "NOME:  $nome<br>";
    echo "ASSUNTO: $assunto<br>";
    echo "MENSAGEM: $mensagem<br>";
}
?>
</div>