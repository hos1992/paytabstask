<?php if(isset($sub_cats) && count($sub_cats) > 0): ?>
<select class="custom-select my-1 mr-sm-2 cat_select">
    <option selected disabled>Choose Parent Category</option>


        <?php foreach ($sub_cats as $val) : ?>
            <option value="<?php echo $val['id'] ?>"><?php echo $val['name'] ?></option>
        <?php endforeach; ?>
</select>
<?php endif; ?>
