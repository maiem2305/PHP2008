<div class=" right_col" style="display: block;">
<div class="row">
	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
		<h3 class="text-center">This is Update Comics</h3>
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
            <form class="form-horizontal form-material" action="?c=comics&m=handleupdate&id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-md-12">Name Comics</label>
            <div class="col-md-12">
                <input name="namebook" id="namebook" type="text" placeholder="<?php echo $data['comics']['name_comic'] ?>" value="<?php echo $data['comics']['name_comic'] ?>" class="form-control form-control-line"></div>
        </div>
         <div class="form-group">
            <label for="slcAuthor" class="col-md-12">Author</label>
            <div class="col-md-12">
                <select name="slcAuthor" id="slcAuthor" class="form-control form-control-line">
                    <option value="">--Choose Author--</option>
                    <?php foreach($data['author'] as $key  =>$au):?>
                        <option value="<?php echo $au['id']; ?>" 
                            <?php if ($data['comics']['id_author']==$au['id']): ?>
                            <?php echo "selected" ?>
                            <?php endif ?>
                        >
                        <?php echo $au['name_author']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Editor</label>
            <div class="col-md-12">
                <select name="slcEditor" id="slcEditor" class="form-control form-control-line">
                    <option value="">--Choose Editor--</option>
                    <?php foreach($data['editor'] as $key =>$pu): ?>
                        <option
                            <?php if ($data['comics']['id_editor']==$pu['id']): ?>
                            <?php echo "selected" ?>
                            <?php endif ?>
                            
                         value="<?php echo $pu['id']; ?>"><?php echo $pu['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Category</label>
            <div class="col-md-12">
                <input name="slcCategory" id="slcCategory" value="<?php echo $data['comics']['category'] ?>" type="text" placeholder="Category" class="form-control form-control-line"></div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Description</label>
            <div class="col-md-12">
               <textarea rows="8" name="desBook" id="desBook" class="form-control form-control-line"><?php echo $data['comics']['description'] ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-12">Status</label>
            <div class="col-sm-12">
                <select name="slcStatus" id="slcStatus" class="form-control form-control-line">
                    <option value="0"
                    <?php if ($data['comics']['status']==0): ?>
                        <?php echo "selected" ?>
                    <?php endif ?>

                    >Chưa Hoàn Thành</option>
                    <option value="1"
                        <?php if ($data['comics']['status']==1): ?>
                        <?php echo "selected" ?>
                        <?php endif ?>
                    >Đã Hoàn Thành</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-12">Image Book</label>
            <div class="col-sm-12">
               <input type="file" name="imagebook" id="pagebook"> 
           </div>
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