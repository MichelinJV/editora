<h1>Cadastrar Livro</h1>
<form action="?page=livro-salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-4">
    <label>Nome do Autor</label>
    <select name="id_autor" class="form-control">
        <option>-- Escolha o autor --</option>
        <?php
        $sql = "SELECT * FROM autores";
        $res = $conn->query($sql);
        $qtd = $res->num_rows;        
        if($qtd>0){             
            while($row = $res->fetch_object()){
                print "<option value='".$row->id."'>".$row->nome."</option>";
            }
        }else{
            print "<option>Não há autores cadastrados.</option>";
        }
        ?>
    </select>
    </div>
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-4">
        <label>Título do Livro</label>
        <input type="text" name="titulo" class="form-control">
    </div>
    <div class="mb-4">
        <label>Categoria</label>
        <input type="text" name="categoria" class="form-control">
    </div>
    <div class="mb-4">
        <label>Número de Páginas</label>
        <input type="text" name="paginas" class="form-control">
    </div>
    <div class="mb-4">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>