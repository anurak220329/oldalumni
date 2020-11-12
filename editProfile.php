<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NPRU Alumni</title>
    <link rel = "stylesheet" type = "text/css" 
         href = "<?php echo base_url(); ?>css/editProfile.css">
</head>
<body>
    <?php include("header.php");?>
    <center><h2>เเก้ไขข้อมูลส่วนตัว</h2></center>             
    <?php
      foreach($MA as $row){
    ?>
    <form method="post" action="../Alumni/edit_Profile">
      <div class="container">
        <tr>
          <td>
          <br></br> <br></br> 
            <input type="text" hidden name="Std_ID"  value="<?php echo $row->Std_ID; ?>" </th><br>

            <th><a class="title">ชื่อ - นามสกุล </a>
              <input class="input none_border" type="text" name="Name_LastName" readonly value="<?php echo $row->Name_LastName; ?>"
            </th>
            <br><br><br>

            <th><a class="title">วัน/เดือน/ปีเกิด </a>
              <input class="input" type="date" name="Date_Of_Birth" value="<?php echo $row->Date_Of_Birth; ?>"
            </th>
            <br><br><br>

            <th><a class="title">ที่อยู่ </a>
              <input class="input" type="text" name="Address" value="<?php echo $row->Address; ?>"
            </th>
            <br><br><br>

            <th><a class="title">เบอร์โทรศัพท์ </a>
              <input class="input" type="text" name="Tel" value="<?php echo $row->Tel; ?>"
            </th>
            <br><br><br>
            
            <th><a class="title">E-mail </a>
              <input class="input" type="text" name="E_mail" value="<?php echo $row->E_mail; ?>"
            </th>
            <br><br><br>

            <th><a class="title">Facebook </a>
              <input class="input" type="text" name="Facebook" value="<?php echo $row->Facebook; ?>"
            </th>
            <br><br><br>

            <th><a class="title">Instragram </a>
              <input class="input" type="text" name="Instagram" value="<?php echo $row->Instagram; ?>"
            </th>
            <br><br><br>

            <th><a class="title">ปีที่จบ </a>
              <input class="input" type="text" name="End_Year" value="<?php echo $row->End_Year; ?>"
            </th>
            <br><br><br>

            <th><a class="title">ชื่อบริษัท </a>
              <input class="input" type="text" name="Company_Name" value="<?php echo $row->Company_Name; ?>"
            </th>
            <br><br><br>

            <th><a class="title">ที่อยู่บริษัท </a>
              <input class="input" type="text" name="Company_Address" value="<?php echo $row->Company_Address; ?>"
            </th>
            <br><br><br>

            <th><a class="title">อาชีพ </a>
              <input class="input" type="text" name="Profession" value="<?php echo $row->Profession; ?>"
            </th>
            <br><br><br>

            <th><a class="title">ตำแหน่ง </a>
              <input class="input" type="text" name="Rank" value="<?php echo $row->Rank; ?>"
            </th>
            <br><br><br>

            <th><a class="title">เบอร์โทรบริษัท </a>
              <input class="input" type="text" name="Company_Tel" value="<?php echo $row->Company_Tel; ?>"
            </th><br>

          </td>
        </tr>
      </div>
      <?php
      }
      ?>
      <br>
      <center>
        <input class="button" name="submit" type="submit" value="บันทึก" />
      </center><br><br>
    </form>             
    <?php include("footer.php");?>
<!--script-->
<script src="<?php echo base_url(); ?>js/myScript.js"></script>
</body>
</html>