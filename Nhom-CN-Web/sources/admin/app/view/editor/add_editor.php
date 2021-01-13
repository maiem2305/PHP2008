<div class=" right_col" style="display: block;">
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <h3 class="text-center">This is adding editor</h3>
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
        <form class="form-horizontal form-material" action="?c=editor&m=handleadd" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-md-12">name editor</label>
            <div class="col-md-12">
                <input name="name" id="name" type="text" placeholder="Enter editor" class="form-control form-control-line"></div>
        </div>
        <div class="form-group">
            <label class="col-md-12">phone</label>
            <div class="col-md-12">
                <input name="phone" id="phone" type="text" placeholder="Enter phone editor" class="form-control form-control-line"></div>
        </div>
        <div class="form-group">
            <label class="col-md-12">address</label>
            <div class="col-md-12">
                <input name="address" id="address" type="text" placeholder="Enter editor address" class="form-control form-control-line"></div>
        </div>
        <div class="form-group">
            <label class="col-md-12">note</label>
            <div class="col-md-12">
               <textarea rows="8" name="note" id="note" class="form-control form-control-line"></textarea>  
        </div>
        <div class="form-group">
            <label class="col-md-12">Avatar</label>
            <div class="col-md-12">
                <input name="Avatar" id="Avatar" type="file"  class="form-control form-control-line"></div>
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