<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $sql = "INSERT INTO livros 
                        (id_autor, titulo, categoria, paginas) 
                VALUES 
                        ('".$_POST['id_autor']."','".$_POST['titulo']."', '".$_POST['categoria']."', '".$_POST['paginas']."') ";
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastro com Sucesso!')</script>";
            print "<script>location.href='?page=livro-listar'</script>";
        }else{
            print "<script>alert('Não foi possível cadastrar!')</script>";
            print "<script>location.href='?page=livro-listar'</script>";
        }
        break;

    case 'editar':
            $sql = "UPDATE livros SET 
                                    titulo ='".$_POST['titulo']."',
                                    categoria ='".$_POST['categoria']."',
                                    paginas = '".$_POST['paginas']."' 
                    WHERE 
                        id_livro =".$_POST['id_livro'];
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editou com Sucesso!')</script>";
                print "<script>location.href='?page=livro-listar'</script>";
            }else{
                print "<script>alert('Não foi possível editar!')</script>";
                print "<script>location.href='?page=livro-listar'</script>";
            }
        break;
    case 'excluir':
            $sql = "DELETE FROM livros WHERE id_livro=".$_REQUEST['id_livro'];
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluiu com Sucesso!')</script>";
                print "<script>location.href='?page=livro-listar'</script>";
            }else{
                print "<script>alert('Não foi possível excluir!')</script>";
                print "<script>location.href='?page=livro-listar'</script>";
            }
         break;

}
?>