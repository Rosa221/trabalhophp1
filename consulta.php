
    <?php
    include_once 'topo.php';
    
    include_once 'conexao.php';
    $sql = "select * from produto ORDER BY bebida ASC";
    $rs = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs) > 0){
    ?>
    <div class = "container">
    <br>
    <h3>Consulta de Bebidas</h3>
    <br>
    <table class="table table-dark table-striped">
        <tr>
            <th>Bebida</th>
            <th>Tipo</th>
            <th>Valor</th>
            <th>País</th>
            <th>Comentário</th>  
            <th>Nota</th>      
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    <?php
    while($linha = mysqli_fetch_array($rs)){
        ?>
        <tr>
            <td><?php echo $linha["bebida"]; ?></td>
            <td><?php echo $linha["tipo"]; ?></td>
            <td><?php echo $linha["valor"]; ?></td>
            <td><?php echo $linha["pais"]; ?></td>
            <td><?php echo $linha["comentario"]; ?></td>
            <td><?php echo $linha["nota"]; ?></td>
           
           <td><a href = "editar.php?id=<?php echo base64_encode($linha["idproduto"]); ?>">Editar</a></td>
           <td><a href="excluir.php?id=<?php echo base64_encode ($linha["idproduto"]); ?>">Excluir</a></td>
        </tr>
        </div>
        <?php
    }?>
    </table>
    <?php
    }else{
        echo"Nenhum produto cadastrado";
    }
    
    mysqli_close($con);
    include_once 'rodape.php';
    ?>