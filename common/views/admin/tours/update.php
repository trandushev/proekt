
<?php require_once __DIR__.'/../include/header.php'; ?>
<?php require_once __DIR__.'/../include/sidebar.php'; ?>

<!-- start: Content -->
<div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.php">Home</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">Dashboard</a></li>
    </ul>

    <form action="" method="post"   class="form-horizontal" enctype="multipart/form-data">
        <fieldset>
            <div class="control-group ">
                <label class="control-label" for="inputError">Name</label>
                <div class="controls">
                    <input type="text" id="inputError" name="name" value="<?php echo $insertInfo['name']; ?>">
                        <span class="help-inline"></span>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="selectError3">Category</label>
                <div class="controls">
                    <select id="selectError3" name="categories">
                        <?php foreach($categories as $category): ?>
                            <option value="<?php echo $category->getId(); ?>"><?php echo $category->getName(); ?></option>
                        <?php endforeach; ?>

                    </select>
                </div>
            </div>
            <div class="control-group ">
                <label class="control-label" for="inputError">Price</label>
                <div class="controls">
                    <input type="number" id="inputError" name="price" value="<?php echo $insertInfo['price']; ?>">
                        <span class="help-inline"></span>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="fileInput">File input</label>
                <div class="controls">
                    <input class="input-file uniform_on" value="<?php echo $insertInfo['image'];?>" id="fileInput" name="image" type="file">

                </div>
            </div>
            <div class="control-group hidden-phone" >
                <label class="control-label" for="textarea2">Description</label>
                <div class="controls">
                    <textarea name="description" class="cleditor" id="textarea2" rows="3"><?php echo $insertInfo['description']; ?></textarea>
                </div>
            </div>
            <div class="form-actions">
                <input type="submit" name="editTour" value="EditTour" class="btn btn-primary"/>
            </div>
        </fieldset>
    </form>


</div>


<?php require_once __DIR__.'/../include/footer.php'; ?>
