<div class="right_col" >
<div class="row">
	<br />
	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
		<div class="white-box">
			<div class="row">
				<h3 class="text-center"> This is index_view_Author</h3>
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12">
					<a href="?c=author&m=add" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Add Author</a>

				</div>
				<div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
					<input type="text" name="txtSearch" class="form-control" id='txtSearch' value="<?php echo htmlentities($data['keyword']); ?>" placeholder="Enter name Author">
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
	                            <th>Name Author</th>
	                            <th>Create_Time</th>
	                            <th class="text-center" colspan="2">Action</th>
	                        </tr>
	                    </thead>
	                    <tbody><?php $numb=1; ?>
							<?php if(!empty($data['author'])): ?>
		                        <?php foreach($data['author'] as $key =>$a): ?>
									<tr>

										<td><?php  echo $key; ?></td>
										<td><?php echo $a['name_author']; ?></td>
										<td><?php echo $a['create_time']; ?></td>
										<td><a href="?c=author&m=update&id=<?php echo $a['id'] ?>" class="btn btn-warning" title="Edit">Edit</a></td>
										<td><a href="?c=author&m=index&page=<?php $page=$_GET['page'] ?? 1;echo $page; ?>&s=<?php $search=$_GET['s'] ?? ''; echo $search; ?>&id=<?php echo $a['id'] ?>" class="btn btn-danger" id="delete-button" title="Delete">Delete</a></td>
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
				window.location.href = "?c=author&s="+keyword;
			});	
			$("#delete-button").click(function(){
			    if(confirm("Are you sure you want to delete this?")){
			        $("#delete-button").attr("href", "?c=author&m=index&page=<?php $page=$_GET['page'] ?? 1;echo $page; ?>&s=<?php $search=$_GET['s'] ?? ''; echo $search; ?>&id=<?php echo $b['id'] ?>");
			    }
			    else{
			        return false;
			    }
			});
		});
	</script>
</div>
</div>