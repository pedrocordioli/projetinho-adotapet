<?php
include "../includes/cabecalho.php";
include "../includes/menu.php";
include "../includes/conexao.php";
?>

<h1>Módulo de animais</h1>
<p>
    <a href="novo.php">Adicionar aluno</a>
</p>
<h2>Listagem de animais</h2>
<table border="1">
    <tr>
        <td>código</td>
        <td>nome</td>
        <td>idade</td>
        <td>sexo</td>
        <td>especie</td>
        <td>porte</td>
        <td>cidade</td>
        <td>estado</td>
        <td>comportamento</td>
        <td>ações</td>

    </tr>

    <?php
    $sql = "select * from animais";
    $todos_os_pets = mysqli_query($conexao, $sql);
    while($um_pet = mysqli_fetch_assoc($todos_os_pets)):
    ?>
    <tr>
        <td><?php echo $um_pet['id_animal'];?></td>
        <td><?php echo $um_pet['nome'];?></td>
        <td><?php echo $um_pet['idade'];?></td>
        <td><?php echo $um_pet['sexo'];?></td>
        <td><?php echo $um_pet['especie'];?></td>
        <td><?php echo $um_pet['porte'];?></td>
        <td><?php echo $um_pet['cidade'];?></td>
        <td><?php echo $um_pet['estado'];?></td>
        <td><?php echo $um_pet['comportamento'];?></td>
        <td>
            <a href="#" title="Ver completo">Visualizar</a>
            <a href="#">Editar</a>
            <a href="#">Excluir</a>
        </td>
    </tr>
    <?php
    endwhile;
    ?>
</table>

<?php
include "../includes/rodape.php";
?>