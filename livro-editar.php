<h1>Editar Livro</h1>
<?php
$sql_1 = "SELECT * FROM livros WHERE id_livro=".$_REQUEST['id_livro'];
$res_1 = $conn->query($sql_1);
$row_1 = $res_1->fetch_object();
?>

<form action="?page=livro-salvar" method="POST">
<input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_livro" value="<?php print $row_1->id_livro;?>">
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
                if($row_1->id_autor == $row->id){
                print "<option value='".$row->id."' selected>".$row->nome."</option>";
                }else{
                    print "<option value='".$row->id."'>".$row->nome."</option>";
                }            }
        }else{
            print "<option>Não há autores cadastrados.</option>";
        }
        ?>
    </select>
    </div>    
    <div class="mb-4">
        <label>Título do Livro</label>
        <input type="text" name="titulo" value="<?php print $row_1->titulo;?>" class="form-control">
    </div>
    <div class="mb-4">
        <label>Categoria</label>
        <input type="text" name="categoria" value="<?php print $row_1->categoria;?>" class="form-control">
    </div>
    <div class="mb-4">
        <label>Número de Páginas</label>
        <input type="text" name="paginas" value="<?php print $row_1->paginas;?>" class="form-control">
    </div>
    <div class="mb-4">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>