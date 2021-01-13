<div class="right_col" >
<div class="row">
	<br />
	<div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
		<div class="white-box">
			<div class="row">
				<h3 class="text-center"> This is index_view_Chapter</h3>
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12">
					<a href="?c=chapter&m=add" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>Add Chapter</a>

				</div>
				<div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
					<input type="text" name="txtSearch" class="form-control" id='txtSearch' value="<?php echo htmlentities($data['keyword']); ?>" placeholder="Enter name Admin">
				</div>
				<div class="col-lg-2 col-md-2 col-xs-12 col-sm-12">
					<button type="button" name="btnSearch" id="btnSearch" class="btn btn-primary btn-block">Search <i class="fa fa-search" aria-hidden="true"></i></button>
				</div>
			</div>
			<hr />
			<p id="result"></p>
			<div class="row">
				<div class="table-responsive">
	                <table class="table table-hover table-border">
	                    <thead>
	                        <tr>
	                            <th>#</th>
	                            <th>Name Manga</th>
	                            <th>Name Editor</th>
	                            <th>Name Chapter</th>
	                            <th>Chapter</th>
	                            <th>LangVN</th>
	                            <th>LangEN</th>
	                            <th>name_less</th>
	                            <th>Create_Time</th>
	                            <th class="text-center" colspan="2">Action</th>
	                        </tr>
	                    </thead>
	                    <tbody><?php $numb=1; ?>
							<?php if(!empty($data['chapter'])): ?>
		                        <?php foreach($data['chapter'] as $key =>$b): ?>
									<tr>
														
										<td><?php  echo $key; ?></td>
										<td><?php echo $b['name_comic'] ?></td>
										<td><?php echo $b['name_editor']; ?></td>
										<td><?php echo $b["name_chapter"]; ?></td>
										<td><?php echo $b["chapter"]; ?></td>
										<td><?php echo $b["content"]; ?></td>
										<td><?php echo $b['langen']; ?></td>
										<td><?php echo $b['name_less'] ?></td>
										<td><?php echo $b["create_time"]; ?></td>
										<td><a href="?c=chapter&m=update&id=<?php echo $b['id'] ?>" class="btn btn-warning" title="Edit">Edit</a></td>
										<td><a href="" id="<?php echo $b['id'] ?>" class="btn btn-danger delete" title="Delete">Delete</a></td>
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
				window.location.href = "?c=chapter&s="+keyword;
			});	
			$(document).on('click', '.delete', function(){  
				var id = $(this).attr("id");  
				if(confirm("Are you sure you want to remove this data?"))  
				{  
					var action = "delete";  
					$.ajax({  
						url:"?c=chapter&m=delete",  
						method:"GET",  
						data:{id:id, action:action},  
						success:function(data)  
						{  
							$("#result").val(data);
							alert(data);  
						}  
					})  
				}  
				else  
				{  
					return false;  
				}  
			});     
		});
	</script>
</div>
</div>