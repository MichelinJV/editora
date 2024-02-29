<h1>Editar Autor</h1>
<?php
$sql = "SELECT * FROM autores WHERE id=".$_REQUEST['id'];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=autor-salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id;?>">
    <div class="mb-4">
        <label>Nome do Autor</label>
        <input type="text" name="nome" value="<?php print $row->nome;?>" class="form-control">
    </div>
    <div class="mb-4">
        <label>E-Mail</label>
        <input type="text" name="email" value="<?php print $row->email;?>" class="form-control">
    </div>
    <div class="mb-4">
        <label>Telefone</label>
        <input type="text" name="telefone" value="<?php print $row->telefone;?>" class="form-control">
    </div>
    <div class="mb-4">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>