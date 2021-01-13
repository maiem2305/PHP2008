<div class=" right_col" style="display: block;">
<div class="row">
    <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
        <h3 class="text-center">This is adding Admin</h3>
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
            <form class="form-horizontal form-material" action="?c=admin&m=handleadd" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label class="col-md-12">Username</label>
            <div class="col-md-12">
                <input name="UsernameAD" id="UsernameAD" type="text" placeholder="Enter Username" class="form-control form-control-line"></div>
        </div>
         <div class="form-group">
            <label class="col-md-12">PassWord</label>
            <div class="col-md-12">
                <input name="PassAD" id="PassAD" type="password" placeholder="Enter PassWord" class="form-control form-control-line"></div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Email</label>
            <div class="col-md-12">
                <input name="EmailAD" id="EmailAD" type="email" placeholder="Enter PassWord" class="form-control form-control-line"></div>
        </div>
         <div class="form-group">
            <label class="col-md-12">Full Name</label>
            <div class="col-md-12">
                <input name="fullNameAD" id="fullNameAD" type="text" placeholder="Enter Full Name" class="form-control form-control-line"></div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Phone</label>
            <div class="col-md-12">
                <input name="PhoneAD" id="PhoneAD" type="text" placeholder="Enter Your Number Phone" class="form-control form-control-line"></div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Address</label>
            <div class="col-md-12">
               <input name="addressAD" id="addressAD" type="text" placeholder="Enter Your Address" class="form-control form-control-line"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-12">Status</label>
            <div class="col-sm-12">
                <select name="slcStatusAD" id="slcStatusAD" class="form-control form-control-line">
                    <option value="0">Đã Nghỉ Việc</option>
                    <option value="1" selected>Nhân Viên</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-12">Note</label>
            <div class="col-md-12">
               <input name="noteAD" id="noteAD" type="text" placeholder="Enter Your Note" class="form-control form-control-line"></div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-12">Avatrr</label>
            <div class="col-sm-12">
               <input type="file" name="imagebook" id="pagebook1"> 
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