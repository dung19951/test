
<div class="container">
    <form method="post"  enctype="multipart/form-data">
        <h3>UPDATE AUTHOR</h3>
        <?php if(isset($product)):?>
        <div class="mb-3">
            <label for="first-name" class="form-label"> Name</label>
            <input type="text" required class="form-control" id="first-name" name="name" value="<?php echo $product->getName()?>">
        </div>
        <div class="mb-3">
            <label for="last-name" class="form-label">Sector</label>
            <input type="text" required class="form-control" id="last-name" name="sec" value="<?php echo $product->getSectors()?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Amount</label>
            <input type="text" required class="form-control" id="email" name="amount" value="<?php echo $product->getAmount()?>">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Date</label>
            <input type="date" class="form-control" id="birthdate" name="date" value="<?php echo $product->getDate()?>">
        </div>
            <div class="mb-3">
                <label for="" class="form-label">Des</label>
                <input type="text" class="form-control" id="" name="des" value="<?php echo $product->getDescribe()?>">
            </div>


        <?php endif ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


