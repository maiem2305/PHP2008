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
        <p id="txtAll" style="color: red; margin-left: 20px;"></p>
            <form class="form-horizontal form-material" action="?c=comics&m=handleadd" method="post" enctype="multipart/form-data" name="add_comic" onsubmit="return validateForm()">
        <div class="form-group">
            <label class="col-md-12">Name Comics</label>
            <div class="col-md-12">
                <input name="namebook" id="namebook" type="text" placeholder="Enter Name Comic" class="form-control form-control-line"></div>
        </div>
        <p id="txtnamebook" style="color: red; margin-left: 20px;"></p>
         <div class="form-group">
            <label for="slcAuthor" class="col-md-12">Author</label>
            <div class="col-md-12">
                <select name="slcAuthor" id="slcAuthor" class="form-control form-control-line">
                    <option value="">--Choose Author--</option>
                    <?php foreach($data['author'] as $key  =>$au):?>
                        <option value="<?php echo $au['id']; ?>"><?php echo $au['name_author']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div><p id="txtslcAuthor" style="color: red; margin-left: 20px;"></p>
        <div class="form-group">
            <label class="col-md-12">Editor</label>
            <div class="col-md-12">
                <select name="slcEditor" id="slcEditor" class="form-control form-control-line">
                    <option value="">--Choose Editor--</option>
                    <?php foreach($data['editor'] as $key =>$pu): ?>
                        <option value="<?php echo $pu['id']; ?>"><?php echo $pu['name'] ?></option>
                    <?php endforeach; ?>
                </select><p id="txtslcEditor" style="color: red; margin-left: 20px;"></p>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Category</label>
            <div class="col-md-12">
                <input name="slcCategory" id="slcCategory" type="text" placeholder="Category" class="form-control form-control-line"></div>
        </div><p id="txtslcCategory" style="color: red; margin-left: 20px;"></p>
        <div class="form-group">
            <label class="col-md-12">Description</label>
            <div class="col-md-12">
               <textarea rows="8" name="desBook" id="desBook" class="form-control form-control-line"></textarea>
            </div>
        </div><p id="txtdesBook" style="color: red; margin-left: 20px;"></p>
        <div class="form-group">
            <label class="col-sm-12">Status</label>
            <div class="col-sm-12">
                <select name="slcStatus" id="slcStatus" class="form-control form-control-line">
                    <option value="0">Chưa Hoàn Thành</option>
                    <option value="1">Đã Hoàn Thành</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">Image Book</label>
            <div class="col-sm-12">
               <input type="file" name="imagebook" id="pagebook"> 
           </div>
        </div>
        <p id="txtimagebook" style="color: red; margin-left: 20px;"></p>
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