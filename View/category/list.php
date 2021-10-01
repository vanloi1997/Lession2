<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quản Lý Danh Mục</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<div class="container">
  <h2 style="text-align: center;margin: 40px;">Quản Lý Danh Mục</h2>
  <div class="input-group mb-3" style="display: block">
    <input type="text" class="form-control" placeholder="Search">
  </div>
  <div style="text-align: right" >
    <a data-toggle="modal" href="#myModal" ><i class="bi bi-plus-circle" style="font-size: 4rem"></i></a>
  </div>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>STT</th>
        <th>Category name</th>
        <th>Operations</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
    </tbody>
  </table>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <form action="" method="POST">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 style="font-weight: 700;" class="modal-title">Add New Category</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="name">Category name</label>
              <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
            <label for="parent">Parent category</label>
            <select class="form-control" name="parent" style="width: 50%">
              <option value="0">Parent category</option>
            </select>
          </div>
          <div class="modal-footer" style="text-align: left">
            <button type="submit" name="add-category" class="btn btn-success" >Thực Thi</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
  if(isset($_SESSION['status']) && $_SESSION['status'] != ''){
    ?>
    <script>
      swal({
        title: "<?php echo $_SESSION['status']; ?>",
        icon: "<?php echo $_SESSION['status_code']; ?>",
        button: "OK!!!",
      });
    </script>
    <?php
    unset($_SESSION['status']);
  }
?>

</body>
</html>
