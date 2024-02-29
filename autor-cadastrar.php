<h1>Cadastrar Autores</h1>
<form action="?page=autor-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-4">
        <label>Nome do Autor</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-4">
        <label>E-Mail</label>
        <input type="text" name="email" class="form-control">
    </div>
    <div class="mb-4">
        <label>Telefone</label>
        <input type="text" name="telefone" class="form-control">
    </div>
    <div class="mb-4">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>