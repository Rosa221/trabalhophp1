<?php
   
    $id = $_POST ["id"];
    $bebida = $_POST ["bebida"];
    $tipo = $_POST ["tipo"];
    $valor = $_POST ["valor"];
    $pais = $_POST["pais"];
    $comentario =$_POST["comentario"];
    $nota = $_POST["nota"];

    include_once 'conexao.php';

    $sql = "update produto set bebida = '".$bebida."', tipo = '".$tipo."', valor = '".$valor."', pais = '".$pais."', comentario = '".$comentario."', nota = '".$nota."' where idproduto =" .$id;

    $rs = mysqli_query($con,$sql);
    if($rs){
        $msg = "Atualizado com Sucesso!";
    }else{
        $msg = "Erro ao Atualizar";
    }
    mysqli_close($con);
    echo "<script>alert('".$msg."');location.href = 'consulta.php';
    
    </script>";
?>