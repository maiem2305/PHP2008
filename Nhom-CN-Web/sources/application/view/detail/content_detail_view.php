<div class="color">
	<div class="container well-sm list-content">
		<div class="col-md-8 content">
			<div class="detail-manga1 well-sm">
				<div class="truyen-breadcrumb">
					<ol class="listOl">
						<li><a href="?c=home" title="Truyện Tranh Online">Truyện Tranh Online</a></li>
						<i class="glyphicon glyphicon-menu-right"></i>
						<li><a href="?c=details&id=<?php echo $_GET['id'] ?>" title="Truyện Tranh Online"><?php echo $data['dataMangaById']['name_comic']; ?></a></li>
					</ol>
				</div>
				<div class="detail-manga">
					<div class="imgava">
						<img src="public/images/anh2.jpg" alt="anh truyen tranh" id="avartaManga" class="avataManga">
					</div>
					<div class="detail-comic">
						<a href="#"><h1><?php echo $data['dataMangaById']['name_comic']; ?></h1></a>
						<div class="author">
							<b>Tác Giả: </b>
							<a href="?c=action&m=authors&author=<?php echo $data['dataMangaById']['name_author']; ?>"><?php echo $data['dataMangaById']['name_author']; ?></a> <br />
						</div>
						<div class="category">
							<b>Thể Loại: </b>
							<?php foreach ($data['cut'] as $key => $value): ?>
								<a href="?c=action&m=category&cat=<?php echo $value .","; ?>" title="" class="btn btn-xs" style="margin-top: -4px;margin-left:-5px; "><?php echo $value .","; ?></a>
							<?php endforeach ?>  
						</div>
						<div class="editor">
							<b>Người Dịch: </b>
							<a href="#" title=""><?php echo $data['dataMangaById']['name_editor']; ?></a><br />
						</div>
						<div class="view">
							<b>Lượt Xem: </b>
							<span><?php echo $data['dataMangaById']['view']; ?></span><br />
						</div>
						<div class="status">
							<b>Tình Trạng: </b>
							<span>
								<?php if($data['dataMangaById']['status']==1) 
								{
									echo "Đang Tiến Hành";
								}
								elseif($data['dataMangaById']['status']==0)
								{
									echo "Hoàn Thành";
								}
								?>
							</span><br />
						</div>
						<div class="update">
							<b id="getID" huy="<?php echo $data['dataMangaById']['id']; ?>">Ngày Update: </b>
							<span><?php echo $data['dataMangaById']['update_time']; ?></span><br />
						</div>
						<a rel="nofollow" href="?c=manga&id=<?php echo $data['dataMangaById']['id']; ?>&chapter=1" class="btn btn-danger">Đọc liền cho máu!!! <i class="glyphicon glyphicon-fire"></i></a>
						<a rel="nofollow" id="favr" href="?c=details&id=<?php echo $data['dataMangaById']['id']; ?>" class="btn btn-primary">Yêu thích !!! <i class="glyphicon glyphicon-heart"></i></a>
					</div>
				</div>
				<div class="mangaDescription well-sm " id="des" style="background-color: #fff;"><?php echo $data['dataMangaById']['description']; ?></div>
				<a href="#" class="btn btn-primary col-md-4 share">Share lên Facebook</a>
			</div>
			<div class="chapnews">           
				<h4 class="titlechapnew"> 
					<a href="#">Chương mới nhất &quot;<?php echo $data['dataMangaById']['name_comic'] ?>&quot;. </a>
				</h4>
				<div class="list-chapnew">
					<?php foreach ($data['topMaga'] as $key => $topManga): ?>
						<p> <a href="<?php echo "?c=manga&id={$idManga}&chapter={$topManga['chapters_fix']}" ?>" class="selector-a-chapnew"><strong><?php echo $topManga['name_comic']." Chapter ".$topManga['chapters_fix'] ?></strong> </a></p>
					<?php endforeach ?>
				</div>
			</div>
			<div class="col-md-8 list chapter">   
				<h4 class="titlechapnew"> 
					<a href="#">List chương &quot;<?php echo $data['dataMangaById']['name_comic'] ?>&quot;. </a>
				</h4>
				<?php foreach ($data['mangas'] as $key => $value): ?>
					<p> <a href="<?php echo "?c=manga&id={$idManga}&chapter={$value['chapters_fix']}" ?>" class="selector-a-chapnew"><strong><?php echo $value['chapters_fix'].". ". $value['name_comic']." Chapter ".$value['chapters_fix']; ?></strong> </a></p>
				<?php endforeach ?>

				<nav>
					<div class="row text-center colorPN">
						<?php echo $data['panigation'] ?>
					</div>
				</nav>
			</div>
		</div>

<script type="text/javascript">
    $(document).on('click', '#favr', function(){  
    	var id = $("#getID").attr("huy");  
    	$.ajax({  
    		url:"?c=fav&m=add",  
    		method:"GET",  
    		data:{id:id},  
    		success:function(data)  
    		{  
    			//$("#result").val(data);
    			alert(data);  
    		}  
    	})  
    });
  </script>