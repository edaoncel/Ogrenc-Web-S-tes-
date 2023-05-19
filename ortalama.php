<?php
$donemortalaması =@$_POST['donemortalaması'];
$dersadi1 = @$_POST['dersadi1']; 
      $vize1 = @$_POST['vize1']; 
      $final1= @$_POST['final1']; 
      $derskredisi1 = @$_POST['derskredisi1'];
      $ortalama1= @$_POST['ortalama1'];
      
      
      if(empty($vize1)|| empty($final1)) echo "-";

      else
    
        $ortalama1=($vize1*0.4 + $final1*0.6);
        echo $ortalama1;
     

$dersadi2 = @$_POST['dersadi2'];
    $vize2 = @$_POST['vize2'];
    $final2 = @$_POST['final2'];
    $derskredisi2 = @$_POST['derskredisi2'];
    $ortalama2 = @$_POST['ortalama2'];


      
      
      if(empty($vize2)|| empty($final2))

      echo "";

      else
      
        $ortalama2=($vize2*0.4 + $final2*0.6);
        echo $ortalama2;

$dersadi3 = @$_POST['dersadi3'];
    $vize3 = @$_POST['vize3'];
    $final3 = @$_POST['final3'];
    $derskredisi3 = @$_POST['derskredisi3'];
    $ortalama3= @$_POST['ortalama3'];

      
     
     if(empty($vize3)|| empty($final3))

      echo "";

      else
      
        $ortalama3=($vize3*0.4 + $final3*0.6);
        echo $ortalama3;


    
$dersadi4 = @$_POST['dersadi4'];
    $vize4 = @$_POST['vize4'];
    $final4 = @$_POST['final4'];
    $derskredisi4 = @$_POST['derskredisi4'];
    $ortalama4 = @$_POST['ortalama4'];
    
      
      

      if(empty($vize4)|| empty($final4))

      echo "";

      else
      
        $ortalama4=($vize4*0.4 + $final4*0.6);
        echo $ortalama4;
    




    
$dersadi5 = @$_POST['dersadi5'];
    $vize5 = @$_POST['vize5'];
    $final5 = @$_POST['final5'];
    $derskredisi5 = @$_POST['derskredisi5'];
    $ortalama5 = @$_POST['ortalama5'];
    
      
      

      if(empty($vize5)|| empty($final5))

      echo "";

      else
      
        $ortalama5=($vize5*0.4 + $final5*0.6);
        echo $ortalama5;
    



    
$dersadi6 = @$_POST['dersadi6'];
    $vize6 = @$_POST['vize6'];
    $final6 = @$_POST['final6'];
    $derskredisi6 = @$_POST['derskredisi6'];
    $ortalama6 = @$_POST['ortalama6'];
    
    
      
      

      if(empty($vize6)|| empty($final6))

      echo "";

      else
      
        $ortalama6=($vize6*0.4 + $final6*0.6);
        echo $ortalama6;



    
$dersadi7 = @$_POST['dersadi7'];
    $vize7 = @$_POST['vize7'];
    $final7 = @$_POST['final7'];
    $derskredisi7 = @$_POST['derskredisi7'];
    $ortalama7 = @$_POST['ortalama7'];
    
    
            

      if(empty($vize7)|| empty($final7))

      echo "";

      else
      
        $ortalama7=($vize7*0.4 + $final7*0.6);
        echo $ortalama7;
      




    
$dersadi8 = @$_POST['dersadi8'];
    $vize8 = @$_POST['vize8'];
    $final8 = @$_POST['final8'];
    $derskredisi8 = @$_POST['derskredisi8'];
    $ortalama8 = @$_POST['ortalama8'];
    
      
      
      
      if(empty($vize8)|| empty($final8))

      echo "";

      else

        $ortalama8=($vize8*0.4 + $final8*0.6);
        echo $ortalama8;
    




    
$dersadi9 = @$_POST['dersadi9'];
    $vize9 = @$_POST['vize9'];
    $final9 = @$_POST['final9'];
    $derskredisi9 = @$_POST['derskredisi9'];
    $ortalama9 = @$_POST['ortalama9'];
    
   
      
      

      if(empty($vize9)|| empty($final9))

      echo "";

      else
        $ortalama9=($vize9*0.4 + $final9*0.6);
        echo $ortalama9;



    
$dersadi10 = @$_POST['dersadi10'];
    $vize10 = @$_POST['vize10'];
    $final10 = @$_POST['final10'];
    $derskredisi10 = @$_POST['derskredisi10'];
    $ortalama10 = @$_POST['ortalama10'];
    

      
      
      

      if(empty($vize10) || empty($final10))

      echo "";

      else
      
        $ortalama10=($vize10*0.4 + $final10*0.6);
        echo $ortalama10;
    



?>

<!DOCTYPE html>
<html>
<head>
 
</head>
<body style= "background: url(resim20.jpeg)">
  <form action="ortalama.php" method="post">
 <p>Ders Notları Sonucu:</p>

 <table  border= "10"; style="font-size: 15px; background-color: rgb(242, 242, 242)">
  
      <tr>
        <td>Ders Adı:</td>
        <td><strong> Stratejik Yönetim: <?php echo $dersadi1; ?></strong></td>
      </tr>
      <tr>

      <tr>
        <td>Vize Notu:</td>
        <td><strong><?php if($vize1>0)echo $vize1; ?></strong></td>
      </tr>
      <tr>
        <td>Final Notu:</td>
        <td><strong><?php if($final1>0)echo $final1; ?></strong></td>
      </tr>
      <tr>
        <td>Ders Kredisi:</td>
        <td><strong><?php if($derskredisi1>0)echo $derskredisi1; ?></strong></td>
      </tr>
      <tr>
        <td>Ders Ortalaması:</td>
        <td><?php  echo $ortalama1;?></td>
      </tr>

  </table>    
    
    </table>
    
    <table  border= "10"; style="font-size: 15px; background-color: rgb(242, 242, 242)">
     
            <td>Ders Adı:</td>
        <td><strong>İş ve Sosyal Güvenlik Hukuku:<?php echo $dersadi2; ?></strong></td>
      </tr>
      <tr>
        <td>Vize Notu:</td>
        <td><strong><?php if($vize2>0)echo $vize2; ?></strong></td>
      </tr>
      <tr>
        <td>Final Notu:</td>
        <td><strong><?php if($final2>0)echo $final2; ?></strong></td>
      </tr>
      <tr>
        <td>Ders Kredisi:</td>
        <td><strong><?php if($derskredisi2>0)echo $derskredisi3; ?></strong></td>
      </tr>
      <tr>
        <td>Ders Ortalaması:</td>
        <td><?php  echo $ortalama2; ?></td>
      </tr>
    </table>
    <table  border= "10"; style="font-size: 15px; background-color: rgb(242, 242, 242)">
      


      <tr>
        <td>Ders Adı:</td>
        <td><strong>Finansal Yönetim:<?php echo $dersadi3; ?></strong></td>
      </tr>
      <tr>
        <td>Vize Notu:</td>
        <td><strong><?php if($vize3>0)echo $vize3; ?></strong></td>
      </tr>
      <tr>
        <td>Final Notu:</td>
        <td><strong><?php if($final3>0)echo $final3; ?></strong></td>
      </tr>
      <tr>
        <td>Ders Kredisi:</td>
        <td><strong><?php if($derskredisi3>0)echo $derskredisi3; ?></strong></td>
      </tr>
      <tr>
        <td>Ders Ortalaması:</td>
        <td><?php  echo $ortalama3; ?></td>
        
      </tr>
    </table>
    <table  border= "10"; style="font-size: 15px; background-color: rgb(242, 242, 242)">
      
  
      <tr>
        <td>Ders Adı:</td>
        <td><strong>İnternet Programlama<?php echo $dersadi4; ?></strong></td>
      </tr>
      <tr>
        <td>Vize Notu:</td>
        <td><strong><?php if($vize4>0)echo $vize4; ?></strong></td>
      </tr>
      <tr>
        <td>Final Notu:</td>
        <td><strong><?php if($final4>0)echo $final4; ?></strong></td>
      </tr>
      <tr>
        <td>Ders Kredisi:</td>
        <td><strong><?php if($derskredisi4>0)echo $derskredisi4; ?></strong></td>
      </tr>
      <tr>
        <td>Ders Ortalaması:</td>
        <td><?php  echo $ortalama4; ?></td>
        
      </tr>
   </table>
   <table  border= "10"; style="font-size: 15px; background-color: rgb(242, 242, 242)">
    
  

      <tr>
        <td>Ders Adı:</td>
        <td><strong>Sosyal Medya ve Dijital Pazarlama:<?php echo $dersadi5; ?></strong></td>
      </tr>
      <tr>
        <td>Vize Notu:</td>
        <td><strong><?php if($vize5>0)echo $vize5; ?></strong></td>
      </tr>
      <tr>
        <td>Final Notu:</td>
        <td><strong><?php if($final5>0)echo $final5; ?></strong></td>
      </tr>
      <tr>
        <td>Ders Kredisi:</td>
        <td><strong><?php if($derskredisi5>0)echo $derskredisi5; ?></strong></td>
      </tr>
      <tr>
        <td>Ders Ortalaması:</td>
        <td><?php  echo $ortalama5; ?></td>
      </tr>
    </table>
    <table  border= "10"; style="font-size: 15px; background-color: rgb(242, 242, 242)">


  

      <tr>
        <td>Ders Adı:</td>
        <td><strong>Bilişim Sistemi ve Proje Yönetimi:<?php echo $dersadi6; ?></strong></td>
      </tr>
      <tr>
        <td>Vize Notu:</td>
        <td><strong><?php if($vize6>0) echo $vize6; ?></strong></td>
      </tr>
      <tr>
        <td>Final Notu:</td>
        <td><strong><?php if($final6>0)echo $final6; ?></strong></td>
      </tr>
      <tr>
        <td>Ders Kredisi:</td>
        <td><strong><?php if($derskredisi6>0)echo $derskredisi6; ?></strong></td>
      </tr>
      <tr>
        <td>Ders Ortalaması:</td>
        <td><?php  echo $ortalama6; ?></td>
      </tr>
    </table>
    <table  border= "10"; style="font-size: 15px; background-color: rgb(242, 242, 242)">
      
  

      <tr>
        <td>Ders Adı:</td>
        <td><strong>Tedarik Zinciri Yönetimi:<?php echo $dersadi7; ?></strong></td>
      </tr>
      <tr>
        <td>Vize Notu:</td>
        <td><strong><?php if($vize7>0)echo $vize7; ?></strong></td>
      </tr>
      <tr>
        <td>Final Notu:</td>
        <td><strong><?php if($final7>0)echo $final7; ?></strong></td>
      </tr>
      <tr>
        <td>Ders Kredisi:</td>
        <td><strong><?php if($derskredisi7>0)echo $derskredisi7; ?></strong></td>
      </tr>
      <tr>
        <td>Ders Ortalaması:</td>
        <td><?php  echo $ortalama7; ?></td>
      </tr>
    </table>
    <table  border= "10"; style="font-size: 15px; background-color: rgb(242, 242, 242)">
      
  

      <tr>
        <td>Ders Adı:</td>
        <td><strong>ISO Kalite ve Yönetim Sistemleri Standartları:<?php echo $dersadi8; ?></strong></td>
      </tr>
      <tr>
        <td>Vize Notu:</td>
        <td><strong><?php if($vize8>0)echo $vize8; ?></strong></td>
      </tr>
      <tr>
        <td>Final Notu:</td>
        <td><strong><?php if($final8>0)echo $final8; ?></strong></td>
      </tr>
      <tr>
        <td>Ders Kredisi:</td>
        <td><strong><?php if($derskredisi8>0)echo $derskredisi8 ;?></strong></td>
      </tr>
      <tr>
        <td>Ders Ortalaması:</td>
        <td><?php  echo $ortalama8; ?></td>
      </tr>
    </table>
    <table  border= "10"; style="font-size: 15px; background-color: rgb(242, 242, 242)">


  

      <tr>
        <td>Ders Adı:</td>
        <td><strong>Yaratıcılık ve İnavasyon:<?php echo $dersadi9; ?></strong></td>
      </tr>
      <tr>
        <td>Vize Notu:</td>
        <td><strong><?php if($vize9>0)echo $vize9; ?></strong></td>
      </tr>
      <tr>
        <td>Final Notu:</td>
        <td><strong><?php if($final9>0)echo $final9; ?></strong></td>
      </tr>
      <tr>
        <td>Ders Kredisi:</td>
        <td><strong><?php if($derskredisi9>0)echo $derskredisi9 ?></strong></td>
      </tr>
      <tr>
        <td>Ders Ortalaması:</td>
        <td><?php  echo $ortalama9; ?></td>

      </tr>
    </table>
    <table  border= "10"; style="font-size: 15px; background-color: rgb(242, 242, 242)">


      <tr>
        <td>Ders Adı:</td>
        <td><strong>Elektronik Ticaret:<?php echo $dersadi10; ?></strong></td>
      </tr>
      <tr>
        <td>Vize Notu:</td>
        <td><strong><?php if($vize10>0)echo $vize10; ?></strong></td>
      </tr>
      <tr>
        <td>Final Notu:</td>
        <td><strong><?php if($final10>0)echo $final10; ?></strong></td>
      </tr>
      <tr>
        <td>Ders Kredisi:</td>
        <td><strong><?php if($derskredisi10>0)echo $derskredisi10 ?></strong></td>
      </tr>
      <tr>
        <td>Ders Ortalaması:</td>
        <td><?php  echo $ortalama10; ?></td>
      </tr>
       
    
    
</table>
<table border= "10"; style="font-size: 15px; background-color:white;">Dönem Ortalaması:
  <tr><td>
    <?php 
      if(empty($ortalama1) || empty($ortalama2) || empty($ortalama3) || empty($ortalama4) || empty($ortalama5) || empty($ortalama6) || empty($ortalama7) || empty($ortalama8) || empty($ortalama9) || empty($ortalama10))
        echo "Ortalamanızın hesaplanabilmesi için lütfen not giriniz.";
        else 
    echo $donemortalaması=($ortalama1*$derskredisi1+$ortalama2*$derskredisi2+$ortalama3*$derskredisi3+$ortalama4*$derskredisi4+$ortalama5*$derskredisi5+$ortalama6*$derskredisi6+$ortalama7*$derskredisi7+$ortalama8*$derskredisi8+$ortalama9*$derskredisi9+$ortalama10*$derskredisi10)/($derskredisi1+$derskredisi2+$derskredisi3+$derskredisi4+$derskredisi5+$derskredisi6+$derskredisi7+$derskredisi8+$derskredisi9+$derskredisi10); 
    ?></td>
</tr>
</table>
 <p>Yeniden denemek için
      <a href="http://localhost:1337/giriskontrol.php">tıklayınız.</a></p>

    </form>
</body>
</html>