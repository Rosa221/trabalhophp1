<?php include 'topo.php';


$id = base64_decode($_GET["id"]);

$sql = "select * from produto where idproduto=".$id;

include_once 'conexao.php';

$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs)==1){
    $reg = mysqli_fetch_array($rs);
}


?>

<h3>Atualizar Bebida</h3>

<form action = "atualizar.php" method = "post">
<br>
<b>Bebida:</b><br>
<input type = "text" name = "bebida" id = "bebida" class = "form-control" value = "<?php echo $reg["bebida"]; ?>">
</br>
<b>Tipo:</b><br>
<input type = "text" name = "tipo" id = "tipo" class = "form-control" value = "<?php echo $reg["tipo"]; ?>">
</br>
<b>Valor:</b><br>
<input type = "text" name = "valor" id = "valor" class = "form-control" value = "<?php echo $reg["valor"]; ?>">
</br>
<b>País:</b><br>
<input type = "text" name = "pais" id = "pais" class = "form-control" value = "<?php echo $reg["pais"]; ?>">
</br>
<b>Comentário:</b><br>
<input type = "text" name = "comentario" id = "comentario" class = "form-control" value = "<?php echo $reg["comentario"]; ?>">
</br>
<b>Nota:</b><br>
<select name = "nota" id = "nota">
<option value="<?php echo $reg["nota"]; ?>"><?php echo $reg["nota"]; ?></option>
    <option value = "1">1</option>
    <option value = "2">2</option>
    <option value = "3">3</option>
    <option value = "4">4</option>
    <option value = "5">5</option>
</select> 
<br></br>
<input type = "hidden" name = "id" value = " <?php echo $reg["idproduto"]; ?>">
<input type = "submit" value = "Atualizar" class="btn btn-primary" >
<input type = "reset" value = "Limpar" class="btn btn-danger">
</form>

<?php include 'rodape.php'; ?>