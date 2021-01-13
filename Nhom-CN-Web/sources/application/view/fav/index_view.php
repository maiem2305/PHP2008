<!DOCTYPE html>
<html>
<head>
  <title></title>
  <title></title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="public/css/application_cart.css">
</head>
<body style="width: 100%;background-color: rgb(243, 243, 243);">
	<div class="container1" style="width: 1200px;margin: auto;">
	<form method="POST" action="?c=cart&m=update" id="form_gio_hang">
  <h2 style="text-align:center;">Chào mừng bạn</h2>
  <p style="text-align:center;">Danh mục bạn yêu thích</p>         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Tên truyện</th>
        <th>Hình ảnh</th>
        <th>Nội dung</th>
        <th>Thể loại</th>
        <th>Tác giả</th>
        <th>Editor</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($data['fav'] as $key => $fav): ?>
      <tr>
          <td>
              <?php echo $key ; ?>
          </td>
          <td>
              <?php echo $fav['name_comic']; ?>
          </td>
          <td>
            <img style=" width: 200px;height: auto;" src="<?php echo IMG_PATH_UPLOAD.'/'.$fav['images']; ?>" alt="image sản phẩm">
          </td>
          <td>
            <?php echo $fav['description']; ?>  
          </td>
          <td>
            <?php echo $fav['category']; ?>  
          </td>
          <td>
            <?php echo $fav['name_author']; ?>  
          </td>
          <td>
            <?php echo $fav['name']; ?>  
          </td>    
          <td >
            <a href="?c=fav&m=remove&id=<?php echo($fav['id']); ?>"> <i class="fa fa-trash"></i></a>
          </td>
      </tr>
      <?php endforeach; ?>
      <tr>
        <td colspan="7" style="text-align: right">          
          <a href="?c=fav&m=delete" class="btn btn-warning">Xóa tất cả</a>
        </td>
      </tr>
    </tbody>
  </table>
  </form>
  </div>
  </body>