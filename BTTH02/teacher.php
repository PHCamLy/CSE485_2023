<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Stt</th>
      <th scope="col">Tên</th>
      <th scope="col">Ngày</th>
      <th scope="col">Trạng Thái</th>
    </tr>
  </thead>
  <tbody>
  <?php 
        require_once('/xampp/htdocs/CSE485_2023/BTTH02/includes/connect.php');
         $sql = 'SELECT SinhVien.Ten, SuThamDu.Ngay, SuThamDu.TrangThaiThamDu
         FROM SinhVien
         JOIN SuThamDu ON SuThamDu.ID_SinhVien = SinhVien.ID;
         ';
        //  $sql = 'select * from sinhvien';
        $statement = $conn->query($sql);
        $stt=1;
        foreach($statement as $each){
    ?>
    <tr>
    <th scope="row"><?= $stt++?></th>
      <th scope="row"><?= $each['Ten']?></th>
      <td scope="row"><?= $each['Ngay']?></td>
      <td scope="row"><?= $each['TrangThaiThamDu']?></td>
      <!-- <td>@twitter</td> -->
    </tr>
    <?php }?>
  </tbody>
</table>
 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>