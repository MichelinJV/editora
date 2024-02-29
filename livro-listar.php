<h1>Listar Livros</h1>
<?php
$sql = "SELECT * FROM livros AS li
        INNER JOIN autores AS au
        ON li.id_autor = au.id";

$res = $conn->query($sql);
$qtd = $res->num_rows;

if($qtd>0){
    print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>";
        print "<td>#_Livro</td>";
        print "<td>#_Autor</td>";
        print "<td>Título do Livro</td>";
        print "<td>Categoria</td>"; 
        print "<td>Número de Páginas</td>"; 
        print "<td></td>";
        print "</tr>"; 
    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->id_livro."</td>";
        print "<td>".$row->nome."</td>";
        print "<td>".$row->titulo."</td>";
        print "<td>".$row->categoria."</td>";
        print "<td>".$row->paginas."</td>"; 
        print "<td>
                <button onclick=\"location.href='?page=livro-editar&id_livro=".$row->id_livro."';\" class='btn btn-primary'>Editar</button> 
                <button onclick=\"if(confirm('Quer mesmo excluir?')){location.href='?page=livro-salvar&acao=excluir&id_livro=".$row->id_livro."';}
                else{false;}\" class='btn btn-danger'>Excluir</button> 
            </td>"; 
        print "</tr>"; 
    }
    print "</table>";
}else{
    print "Não foi encontrado NENHUM resultado";
}
?>