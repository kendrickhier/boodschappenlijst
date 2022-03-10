<?php require("partials/header.php") ?>

<section id="tabel">
    <table>
        
        <tr>
            <th>Product</th>
            <th>Prijs</th>
            <th>Aantal</th>
            <th>Subtotaal</th>
        </tr>

        <?php foreach($boodschappen as $item) : ?>
            <tr>
                <td><?=ucfirst($item->name)?></td>
                <td class="productPrice"><?=$item->price?></td>
                <td><?=$item->number?></td>
                <td class="productTotalCost">
                    <?php 
                        global $totaal; 
                        $subtotaal = $item->price * $item->number;
                        $totaal += $subtotaal;
                        echo $subtotaal;
                    ?>
                </td>
            </tr>
        <?php endforeach ;?>

        <tr>
            <td colspan=3>Totaal</td>
            <td id="totalCost"><?=$totaal?></td>
        </tr>

    </table>
</section>

<?php require("partials/footer.php") ?>