<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>Web App</title>
</head>
<body>
<form action = "save_emp_data.php" method= "POST" >
<div>
<label>รหัสพนักงาน</label>
<input type="text" name="empno" placeholder = "Employee ID"> 
</div>
<div>
<label>ชื่อพนักงาน</label>
<input type="text" name="ename" placeholder = "Employee Name"> 
</div>
<div>
<label>ตำแห่น่ง</label>
<input type="text" name="job" placeholder = "JOB"> 
</div>
<div>
<label>รหัสหัวหน้า</label>
<input type="text" name="mgr" placeholder = "Menager ID">
</div> 
<div>
<label>วันที่เริ่มงาน</label>
<input type="date" name="hiredate" placeholder = "Hire Date"> 
</div>
<div>
<label>เงินเดือน</label>
<input type="number" name="sal" placeholder = "Salary"> 
</div>
<div>
<label>ค่าคอมมิชชัน</label>
<input type="number" name="comm" placeholder = "Commisstion"> 
</div>
<div>
<label>แผนก</label>
<select name ="deptno">
<?php
    $host = "localhost";
    $user = "root";
    $passwd = "";
      $dbname = "practice";
    $con  = mysqli_connect($host,$user,$passwd,$dbname);
    $sql = "SELECT `DEPTNO`, `DNAME` FROM `dept` ";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){ 
         while($row=mysqli_fetch_assoc($result)){
?>
   <option value ="<?php echo $row['DEPTNO'] ?>"><?php echo $row['DNAME'] ?></option>
<?php
          }
    }
  ?>

</select>
</div>


<div>
<input type="submit" value = "บันทึกรายการ">  
</div>
</form>
</body>

</html>