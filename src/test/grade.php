<!DOCTYPE html>
<html>

<body>
   <p><label>ตรวจสอบเกรดเฉลี่ย 4 ภาคเรียน :</label></p>
   
   <form method="post" name="form1" action="<?php echo $SERVER['PHP_SELF'];?>">
      <label> กรุณากรอกเกรดเฉลี่ย ม.1 ภาคเรียนที่ 1 =
         <input type="text" name="score1" placeholder="enter score"><br>
      </label>
	  <label> กรุณากรอกเกรดเฉลี่ย ม.1 ภาคเรียนที่ 2  =
         <input type="text" name="score2" placeholder="enter score"><br>
      </label>
	  <label> กรุณากรอกเกรดเฉลี่ย ม.2 ภาคเรียนที่ 1  =
         <input type="text" name="score3" placeholder="enter score"><br>
      </label>
	  <label> กรุณากรอกเกรดเฉลี่ย ม.2 ภาคเรียนที่ 2  =
         <input type="text" name="score4" placeholder="enter score"><br>
      </label>
      <p>
         <label><input type="submit" name="sumbit" value="คำนวณ">
         </label>
         <label><input type="reset" name="reset" value="ยกเลิก">
         </label>
      </p>
   </form>
   
   <?php

   $score1 = $_POST["score1"];
   $score2 = $_POST['score2'];
   $score3 = $_POST['score3'];
   $score4 = $_POST['score4'];
   $num = ($score1+$score2+$score3+$score4)/4;
   
   if ($num > 4.00) {
      echo "คะแนนของคุณคือ $num <br>";
      echo " ผลสอบปรากฎว่า <h1> ระบบผิดพลาด</h1>";
   } elseif ($num >= 2.75) {
      echo "<h3> เกรดเฉลี่ย 4 ภาคเรียนของคุณคือ เกรด $num  เก่งมาก คุณสามารถเข้าได้ทุกแผนการเรียน </h3>
	  แผนการเรียนที่สามารถเข้าได้คือ : <br> แผนการเรียน วิทยาศาสตร์ คณิตศาสตร์ <br>
แผนการเรียน ภาษาอังกฤษ คณิตศาสตร์ <br>
แผนการเรียน ภาษาอังกฤษ ภาษาจีน<br>
แผนการเรียน ภาษาอังกฤษ ภาษาฝรั่งเศส<br>
แผนการเรียน ภาษาอังกฤษ ภาษาเกาหลี<br>
แผนการเรียน ภาษาไทย สังคมศึกษา<br>
แผนการเรียน พลศึกษา<br>
แผนการเรียนการงานอาชีพ ศิลปะ<br> ";
   } elseif ($num >= 2.5){
      echo " <h3> เกรดเฉลี่ย 4 ภาคเรียนของคุณคือ เกรด $num </h3>
	  แผนการเรียนที่สามารถเข้าได้คือ : <br>
แผนการเรียน ภาษาอังกฤษ คณิตศาสตร์ <br>
แผนการเรียน ภาษาอังกฤษ ภาษาจีน<br>
แผนการเรียน ภาษาอังกฤษ ภาษาฝรั่งเศส<br>
แผนการเรียน ภาษาอังกฤษ ภาษาเกาหลี<br>
แผนการเรียน ภาษาไทย สังคมศึกษา<br>
แผนการเรียน พลศึกษา<br>
แผนการเรียนการงานอาชีพ ศิลปะ<br> ";
   } elseif ($num >= 2.25) {
      echo " <h3> เกรดเฉลี่ย 4 ภาคเรียนของคุณคือ เกรด $num </h3>
	  แผนการเรียนที่สามารถเข้าได้คือ : <br>
แผนการเรียน ภาษาอังกฤษ ภาษาจีน<br>
แผนการเรียน ภาษาอังกฤษ ภาษาฝรั่งเศส<br>
แผนการเรียน ภาษาอังกฤษ ภาษาเกาหลี<br>
แผนการเรียน ภาษาไทย สังคมศึกษา<br>
แผนการเรียน พลศึกษา<br>
แผนการเรียนการงานอาชีพ ศิลปะ<br> ";
   } elseif ($num >= 2) {
      echo " <h3> เกรดเฉลี่ย 4 ภาคเรียนของคุณคือ เกรด $num </h3>
	  แผนการเรียนที่สามารถเข้าได้คือ : <br>
แผนการเรียน ภาษาอังกฤษ ภาษาจีน<br>
แผนการเรียน ภาษาอังกฤษ ภาษาฝรั่งเศส<br>
แผนการเรียน ภาษาอังกฤษ ภาษาเกาหลี<br>
แผนการเรียนการงานอาชีพ ศิลปะ<br> ";
   } elseif ($num >= 0) {
      echo '<h1>เกรด 0</h1>';
   } else {
      echo "คะแนนของคุณคือ $score1 <br>";
      echo " ผลสอบปรากฎว่า <h1> ระบบผิดผลาด</h1>";
   }


   ?>
   
</body>

</html>