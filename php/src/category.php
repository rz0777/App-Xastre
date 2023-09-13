<?php include 'includes/admin-header.php';?>
<main class="container admin" id="content">
    <form action="category.php?id=<?= $id ?>" method="post" class="narrow"> 
    <h2>Edit Category</h2>
    <?php if ($errors['warning']) { ?>
        <div class="alert alert_danger"><?=$errors['warning'] ?></div>
    <?php } ?>
    
    <div class="form-group">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name"
            value="<?= html_escape($category['name']) ?>" class="form-control">
            <span class="errors"><?= $errors['name']?></span>
    </div>
    <div class="form-group">
        <label for="price">Price: </label>
        <textarea name="price" id="price" cols="30" rows="10" class="form-control">
            <?= html_escape($category['price'])?></textarea>
        <span class="errors"><?= $errors['price']?></span>
    </div>
    <div class="form-check">
        <input type="checkbox" name="navigation" id="navigation"
            value="1" class="form-check-input"
            <?= ($category['navigation'] === 1 ) ? 'checked':''?>>
        <label class="form-check-label" for="navigation">Navigation: </label>    
    </div>
    
    <input type="submit" value="save" class="btn btn-primary btn-save">

<form>
    </main>
<?php include 'includes/admin-footer.php'; ?>    



