<?php

/* 
 * sql to change the information about a major.
 * 
 * @author: Robert Vines
 */

    include('/Config.php');
    
    $degreeID = $_GET['edit_major'];

    $type = $_POST['Type'];
    $major = $_POST['Major'];
    $college = $_POST['College'];
    $department = $_POST['Dept'];
    
    try
    { 
    $sql="SELECT DepartmentID FROM department WHERE DeptName='".$department."' ";
    $result = $pdo->query($sql);
    $val=$result->fetch();
    
    $deptID = $val['DepartmentID'];
     echo $deptID;
    } 
    catch (Exception $ex) 
    {
        echo "Connection Failed: " . $ex->getMessage();
    }
   
    $sql2="UPDATE degree "
            . "SET Type='".$type."', Name='".$major."', College='".$college."', Department_DepartmentID='".$deptID."' "
            . " WHERE DegreeID=".$degreeID;
    $pdo->query($sql2);

    header("Location: /AlumniTracker/View/EditMajor.php");
?>