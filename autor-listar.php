<h1>Listar Autores</h1>
<?php
$sql = "SELECT * FROM autores";
$res = $conn->query($sql);
$qtd = $res->num_rows;

if($qtd>0){
    print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<tr>";
        print "<td>#</td>";
        print "<td>Nome</td>";
        print "<td>E-Mail</td>";
        print "<td>Telefone</td>"; 
        print "<td></td>"; 
        print "</tr>"; 
    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>".$row->id."</td>";
        print "<td>".$row->nome."</td>";
        print "<td>".$row->email."</td>";
        print "<td>".$row->telefone."</td>"; 
        print "<td>
                <button onclick=\"location.href='?page=autor-editar&id=".$row->id."';\" class='btn btn-primary'>Editar</button> 
                <button onclick=\"if(confirm('Quer mesmo excluir?')){location.href='?page=autor-salvar&acao=excluir&id=".$row->id."';}
                else{false;}\" class='btn btn-danger'>Excluir</button> 
            </td>"; 
        print "</tr>"; 
    }
    print "</table>";
}else{
    print "Não foi encontrado NENHUM resultado";
}



?>