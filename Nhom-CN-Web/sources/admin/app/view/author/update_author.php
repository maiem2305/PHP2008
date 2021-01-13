<div class=" right_col" style="display: block;">
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <h3 class="text-center">This is adding Comics</h3>
        <hr />
        <?php if(!empty($data['errAdd'])&&isset($data['errAdd'])): ?>
        <ul>
            <?php foreach($data['errAdd'] as $k =>$err): ?>
                <?php if(!empty($err)): ?>
                <li style="color:red;"><?php echo $err; ?></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
            <form class="form-horizontal form-material" action="?c=author&m=handleupdate&id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-md-12">Ten tac gia</label>
            <div class="col-md-12">
                <input name="name_author" value="<?php echo $data['author']['name_author'] ?>" id="name_author" type="text" placeholder="Enter Username" class="form-control form-control-line"></div>
        </div>
         
        <div class="form-group">
            <div class="col-sm-12">
                <button type="submit" name="btnSubmit" class="btn btn-success">Save Product</button>
            </div>
        </div>
    </form>
    </div>
</div>
</div>
<div class="clearfix"></div>