<?php
include('db.php');

$query = "SELECT * FROM register natural join provinces WHERE register.provinces = provinces.PROVINCE_ID";
$result = $conn->query($query);
if (!$result) die($conn->error);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>รายชื่อผู้ลงทะเบียน</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>

</style>
</head>
<body>

<div class="container">
  <center><a><b><FONT FACE = "TH SarabunPSK " SIZE ="8" COLOR= "BLACK">รายชื่อผู้ลงทะเบียน</a></b></FONT></center>          
  <table class="table table-bordered" >
    <thead>
      <tr bgcolor="#6495ED">
        <th>ลำดับ</th>
        <th>ชื่อ-นามสกุล</th>
        <th>อีเมล์</th>
        <th>เพศ</th>
        <th>ความสนใจ</th>
        <th>ที่อยู่</th>
        <th>จังหวัด</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = $result->fetch_array()) { ?>
      <tr bgcolor="#FFFFE0">
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['fullname']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['sex']; ?></td>
        <td><?php echo $row['intr1']; ?><?php if ($row['intr1'] != '') echo "<br>"; ?><?php echo $row['intr2']; ?></td>
        <td><?php echo $row['address']; ?></td>
        <td><?php echo $row['PROVINCE_NAME']; ?></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>

<center><button class="button" style="vertical-align:middle" name="info" onclick="linkto();"><span>Register</span></button></center>
<script>
    function linkto() {
        window.location='http://angsila.cs.buu.ac.th/~58160428/887371/lab07/register_form.php';
    }
</script>
<?php  
$conn->close();
?>
</body>
</html>
