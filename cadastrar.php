<?php include_once 'topo.php';

$bebida = $_POST["bebida"];
$tipo = $_POST["tipo"];
$valor = $_POST["valor"];
$pais = $_POST["pais"];
$comentario = $_POST["comentario"];
$nota = $_POST["nota"];

include_once 'conexao.php';

$sql = "insert into produto values(NULL,'".$bebida."','".$tipo."','".$valor."','".$pais."','".$comentario."','".$nota."')";

$result = mysqli_query($con,$sql);

if($result){
    $msg = "Gravado com sucesso!";
}else{
    $msg = "Erro ao Gravar!";
}

mysqli_close($con);
echo "<script>alert('".$msg."');location.href = 'painel.php';
</script>";

include_once 'rodape.php';

?>