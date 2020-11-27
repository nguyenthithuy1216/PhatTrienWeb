<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <title>Pagination</title>
 <style>
 
  .content {
    margin: 10px auto;
    width: 800px;
    text-align: center;
    border: 1px solid red;
    padding: 20px;
  }
  .pages a {
    display: inline-block;
    width: 40px;
    background: green;
    color: white;
    text-decoration: none;
  }

 </style>
</head>
<body>
  <div class = "content">
    <div class = "pages">
      <a href = "phantrang.php?page=1">1</a>
      <a href = "phantrang.php?page=2">2</a>
      <a href = "phantrang.php?page=3">3</a>
      <a href = "phantrang.php?page=4">4</a>
      <a href = "phantrang.php?page=5">5</a>
      <a href = "phantrang.php?page=6">6</a>
      <a href = "phantrang.php?page=7">7</a>
    </div>
    
    <?php
    //ham kiem tra
      $page = (isset($_GET['page']) == true) ? $_GET['page'] : 0;
    ?>
    <p>ban dang o trang thu  <?php echo $page; ?></p>
  </div>
</body>

</html>