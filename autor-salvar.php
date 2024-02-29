<?php
switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $sql = "INSERT INTO autores 
                        (nome, email, telefone) 
                VALUES 
                        ('".$_POST['nome']."','".$_POST['email']."', '".$_POST['telefone']."') ";
        $res = $conn->query($sql);

        if($res==true){
            print "<script>alert('Cadastro com Sucesso!')</script>";
            print "<script>location.href='?page=autor-listar'</script>";
        }else{
            print "<script>alert('Não foi possível cadastrar!')</script>";
            print "<script>location.href='?page=autor-listar'</script>";
        }
        break;

    case 'editar':
            $sql = "UPDATE autores SET nome ='".$_POST['nome']."',
                                    email ='".$_POST['email']."',
                                    telefone = '".$_POST['telefone']."' 
                    WHERE 
                        id =".$_POST['id'];
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Editou com Sucesso!')</script>";
                print "<script>location.href='?page=autor-listar'</script>";
            }else{
                print "<script>alert('Não foi possível editar!')</script>";
                print "<script>location.href='?page=autor-listar'</script>";
            }
        break;
    case 'excluir':
            $sql = "DELETE FROM autores WHERE id=".$_REQUEST['id'];
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluiu com Sucesso!')</script>";
                print "<script>location.href='?page=autor-listar'</script>";
            }else{
                print "<script>alert('Não foi possível excluir!')</script>";
                print "<script>location.href='?page=autor-listar'</script>";
            }
         break;

}
?>