<?php 
    $host = "localhost";
    $user = "root";
    $passwd = "";
    $dbname = "practice";
    $con  = mysqli_connect($host,$user,$passwd,$dbname);
    if(!$con){

        die("Connection falied".mysqli_connect_error());
    }
   

    $empno = $_POST['empno'];
    $ename = $_POST['ename'];
    $job = $_POST['job'];
    $mgr = $_POST['mgr'];
    $hiredate = $_POST['hiredate'];
    $sal = $_POST['sal'];
    $comm = $_POST['comm'];
    $deptno = $_POST['deptno'];

    $sql = "insert into emp (EMPNO, ENAME, JOB, MGR, HIREDATE,SAL,COMM,DEPTNO) value ('$empno',' $ename','$job','$mgr',' $hiredate','$sal','$comm','$deptno')";

    if(mysqli_query($con,$sql)){
        header ('Location: test1.php');
    }else{
        echo "Insert Fail";
    }

    




?>