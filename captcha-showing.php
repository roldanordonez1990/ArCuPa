<?php session_start() ?>



<?php
$_SESSION['captchacode']="";
for($i=0;$i<4;$i++){
$random[1]=rand(48,57);
$random[2]=rand(65,90);
$random[3]=rand(97,122);
$chose=rand(1,3);
$_SESSION['captchacode'].=chr($random[$chose]);
}

?>


<?php
if(isset($_POST["enviar"])){
    if($_POST['captchaclient'] == $_POST['captchaserver']){
        echo "ta correcto"; 
    }else{
        echo "no está correcto";
    }

}
?>




<form method="post" action="" >
<table>
<tr><td>Captcha: </td><td><img width="150px" height="50" src="captcha-img.php"><br>
<input type="hidden" value="<?php echo $_SESSION['captchacode']; ?>" name="captchaserver"><br>
<input type="text" name="captchaclient"></td></tr>
<tr><td><input type="submit" name="enviar" value="enviar"></td></tr>
</table>
</form>




