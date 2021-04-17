<?php
require_once 'classes.php';
require_once 'config.php';

if(isset($_POST['Create_circle'])){
    $Xaxes=$_POST['Xaxes'];
    $Yaxes=$_POST['Yaxes'];
    $R=$_POST['R'];
    $s=new Circle($R,$Xaxes,$Yaxes);
    
    $sql = "INSERT INTO circle (Xaxes,Yaxes,R) VALUES ($Xaxes,$Yaxes,$R)";
    $conn->query($sql);
    $conn->close();
    header("location: index.php?name=circle&x=".$Xaxes."&y=".$Yaxes."&r=".$R);
}
if(isset($_POST['Create_square'])){
    $Xaxes=$_POST['Xaxes'];
    $Yaxes=$_POST['Yaxes'];
    $Width=$_POST['Width'];
    $s=new Square($Width,$Xaxes,$Yaxes);
    
    $sql = "INSERT INTO square (Width,Xaxes,Yaxes) VALUES ($Width,$Xaxes,$Yaxes)";
    $conn->query($sql);
    $conn->close();
    header("location: index.php?name=square&x=".$Xaxes."&y=".$Yaxes."&w=".$Width);
}
if(isset($_POST['Create_rect'])){
    $Xaxes=$_POST['Xaxes'];
    $Yaxes=$_POST['Yaxes'];
    $Width=$_POST['Width'];
    $Height=$_POST['Height'];
    $s=new Rect($Width,$Height,$Xaxes,$Yaxes);
    
    $sql = "INSERT INTO rect (Xaxes,Yaxes,Width,Height) VALUES ($Xaxes,$Yaxes,$Width,$Height)";
    $conn->query($sql);
    $conn->close();
    header("location: index.php?name=rect&x=".$Xaxes."&y=".$Yaxes."&w=".$Width."&h=".$Height);
}
?>