<?php
$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

?>
<h1>Tabel Bilangan</h1>
<table border="1">
    <tr>
        <td>Bilangan</td>
        <td>Jenis</td>
    </tr>
    <?php foreach ($angka as $value) { ?>
        <tr>
            <td><?php echo "$value"; ?></td>
            <td>
                <?php
                echo $value % 2 == 0 ? 'Bilangan Genap' : 'Bilangan Ganjil';
                ?>
            </td>
        </tr>
    <?php } ?>
    </tr>
</table>