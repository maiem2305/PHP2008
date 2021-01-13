<div class="right_col">
<div class="row">
	<br />
	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
		<div class="white-box">
			<div class="row">
				<h3 class="text-center"> This Is Comic Index_view</h3>
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12">
					<a href="?c=comics&m=add" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Add Comic</a>

				</div>
				<div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
					<input type="text" name="txtSearch" class="form-control" id='txtSearch' value="<?php echo htmlentities($data['keyword']); ?>" placeholder="Enter name Comic">
				</div>
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12">
					<button type="button" name="btnSearch" id="btnSearch" class="btn btn-primary btn-block">Search <i class="fa fa-search" aria-hidden="true"></i></button>
				</div>
			</div>
			<hr />
			<div class="row">
				<div class="table-responsive">
	                <table class="table table-hover table-border">
	                    <thead>
	                        <tr>
	                            <th>#</th>
	                            <th>Image</th>
	                            <th>Comic</th>
	                            <th>Author</th>
	                            <th>Editor</th>
	                            <th>Category</th>
	                            <th>Description</th>
	                            <th>Status</th>
	                            <th>Create_Time</th>
	                            <th class="text-center" colspan="2">Action</th>
	                        </tr>
	                    </thead>
	                    <tbody><?php $numb=1; ?>
							<?php if(!empty($data['comics'])): ?>
		                        <?php foreach($data['comics'] as $key =>$b): ?>
									<tr>

										<td><?php  echo $key; ?></td>
										<td><img src="<?php echo PATH_UPLOAD_ADMIN_IMG . $b['images']; ?>" alt="Comics" height="70px" width="70px"></td>
										<td><?php echo $b['name_comic']; ?></td>
										<td><?php echo $b["name_author"]; ?></td>
										<td><?php echo $b["name_editor"]; ?></td>
										<td><?php echo $b["category"]; ?></td>
										<td><?php echo $b['description']; ?></td>
										<td><?php 
										if ($b["status"]==0) {
										 	echo "Đang update";
										 }  else{
										 	echo "Đã hoàn thiện";
										 }

										?></td>
										<td><?php echo $b["create_time"]; ?></td>
										<td><a href="?c=comics&m=update&id=<?php echo $b['id'] ?>" class="btn btn-warning" title="Edit">Edit</a></td>
										<td><a href="?c=comics&m=index&page=<?php $page=$_GET['page'] ?? 1;echo $page; ?>&s=<?php $search=$_GET['s'] ?? ''; echo $search; ?>&id=<?php echo $b['id'] ?>" class="btn btn-danger" title="Delete" id="delete-button">Delete</a></td>
									</tr>
		                        <?php endforeach; ?>
		                    	<?php else : ?>
		                    		<h4 class="text-center bold">Not Result</h4>
		                    <?php endif; ?>
		                </tbody>
	                </table>
	            </div>	
	            <hr />
	            <div class="row text-center">
					<?php echo $data['panigation'] ?>
	            </div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(function(){
			$('#btnSearch').click(function(){
				//alert("Hello");
				let keyword = $('#txtSearch').val().trim();
				window.location.href = "?c=comics&s="+keyword;
			});	
			$("#delete-button").click(function(){
			    if(confirm("Are you sure you want to delete this?")){
			        $("#delete-button").attr("href");
			    }
			    else{
			        return false;
			    }
			});
		});
	</script>
</div>
</div>