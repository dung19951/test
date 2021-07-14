
<div class="container">
    <a href="index.php?page=create-product">ADD Product</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Sectors</th>
            <th scope="col">Amount</th>
            <th scope="col">Date</th>
            <th scope="col">Describe</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($products)) {
            foreach ($products as $product) :?>
                <tr>
                    <th scope="row"><?php echo $product->getId() ?></th>
                    <th scope="row"><?php echo $product->getName() ?></th>
                    <td><?php echo $product->getSectors() ?></td>
                    <td><?php echo $product->getAmount() ?></td>
                    <td><?php echo $product->getDate()?></td>
                    <td><?php echo $product->getDescribe() ?></td>
                    <td><a href="index.php?page=update-product&id=<?php echo $product->getId()?>" class="btn btn-warning btn-lg">Edit</a></td>
                    <td><a href="index.php?page=delete-product&id=<?php echo $product->getId()?>" class="btn btn-danger btn-lg">Delete</a></td>
                </tr>
            <?php endforeach;
        } ?>
        </tbody>
    </table>
</div>

