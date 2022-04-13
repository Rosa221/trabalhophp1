<?php
include_once 'topo.php';


$id = base64_decode($_GET ["id"]);

$sql = "delete from produto where idproduto =".$id;


include_once 'conexao.php';

if(mysqli_query($con,$sql)){
    $msg = "Produto excluido com sucesso!";
}else{
    $msg = "Erro ao excluir!";
}
mysqli_close($con);
echo "<script>alert('".$msg."');location.href = 'consulta.php';
    
</script>";
include_once 'rodape.php';
?>
