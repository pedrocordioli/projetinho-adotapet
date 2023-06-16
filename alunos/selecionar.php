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
<table boder="1">
    <tr>
        <td>código</td>
        <td>nome</td>
    </tr>

    <?php
    $sql = "select * from animais";
    $todos_os_pets = mysqli_query($conexao, $sql);
    while($um_pet = mysqli_fetch_assoc($todos_os_pets)):
    ?>
    <tr>
        <td><?php echo $um_pet['id_animal'];?></td>
        <td><?php echo $um_pet['nome'];?></td>
    </tr>
    <?php
    endwhile;
    ?>
</table>

<?php
include "../includes/rodape.php";
?>