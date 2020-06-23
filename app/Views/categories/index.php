<?php require_once __dir__ . "/../common/header.php"?>

<!-- CONTENT -->
<main role="main" class="container">

    <div class="starter-template">
        <h3>Paytabs task for Displaying tree of categrories and its unlimited sub categories</h3>
    </div>

    <form class="form-inline select_form">
        <select class="custom-select my-1 mr-sm-2 cat_select">
            <option selected disabled>Choose Parent Category</option>

            <?php if(isset($parent_cats) && count($parent_cats) > 0): ?>
            <?php foreach ($parent_cats as $val) : ?>
                    <option value="<?php echo $val['id'] ?>"><?php echo $val['name'] ?></option>
            <?php endforeach; ?>
            <?php endif; ?>

        </select>


    </form>
</main>

<?php require_once __dir__ . "/../common/footer.php"?>

