
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PHP</title>
<style>
* {
    margin: 0;
    padding: 0;
}
.content {
    width: 600px;
    height: 400px;
    border: 1px solid green;
    margin: 20px auto;
    text-align: center;
}
h1 {
    text-align: center;
    padding: 10px 0;
    color: red;
}

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<style>
.content {
    width: 300px;
    margin: 0px auto;
    border: 1px solid #444;
    text-align: center;
    padding: 10px;
}
.content h1 {
    color: red;
}
.content div.image {
    margin: 20px 0px;
}
.content div.image img{
    margin: 20px 0px;
}
.content div.image a {
    display: inline-block;
    background: #994F82;
    color: #FFFDD3;
    padding: 3px 10px;
    text-decoration: none;
}
.content div.image a:hover {
    color: #9BCC61;
}
</style>
</head>
<body>
<div class="content">
<h1>Xem ảnh</h1>
<div class="image">
<?php
// $i = 1;
// do {
//     echo 'Chạy ít nhất một lần!';
//     $i++;
//     //so sanh dieu kien trong while truoc roi xuat ket qua
// } while ($i <= 5);
$i = 1;
do {
    echo '<img src="tam-giac/' . $i . '.jpg">';
    $flagShow = 0;
    if(isset($_GET['show'])) {
        $flagShow = $_GET['show'];
        $i++;
    }
}while($i <= 10 && $flagShow);
?>
      <a href="?show=1">Xem toàn bộ</a>
      <a href="?show=0">Xem một hình</a>
    </div>
  </div>
</body>
</html>