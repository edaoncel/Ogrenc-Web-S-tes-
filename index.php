<!DOCTYPE html>
<html lang="en">
<head>
    <title>Öğrenci Web Sistemi</title>
</head>
<body style= "background: url(resim18.jpeg);">
	<table style="text-align: center;">    
    	<tr> 
    		<th  style="background-color: rgb(140, 140, 140) ; text-align: center;">
    			<h1 style ="text-align: center; font-family: Fantasy; font-size: 30px; color: rgb(0, 0, 0); ">ÖĞRENCİ BİLGİ SİSTEMİ</h1>
    				<div style ="text-align: center; font-family: Brush Script MT; font-size: 30px; color: rgb(64, 64, 64) ">
    						<form action="index.php" method="POST">
    		
								Öğrenci Adı:<br/>
								<input type="text" name="Ogrenci_adi" /><br/>
								Şifre:<br/>
								<input type="password" name="sifre" /><br/>
								<input type="submit" value="Gönder" />

            </th>
		</tr>			
    </table>        

   
    						</form>
     				</div>
    					<h3 style="text-align: center; color: black; font-family: cursive; background-color: rgb(200, 200, 200);">Zafer, “zafer benimdir” diyebilenindir. Başarı ise “başaracağım” diye başlayarak sonunda “başardım” diyenindir.</h3>
</body>
</html>
<?php
   if(isset($_POST['Ogrenci_adi']) && isset($_POST['sifre'])) 
   {
      $Ogrenci_adi = $_POST['Ogrenci_adi'];
      $sifre = $_POST['sifre'];
    
         if(empty($Ogrenci_adi) || empty($sifre))
         {
            echo 'Lütfen boş bırakmayın.';
            header('Location: http://localhost:1337/');
            exit;
         }
         else 
         {

            if(isset($_POST['Ogrenci_adi']) && isset($_POST['sifre'])) 
            {
               $kullanici = $_POST['Ogrenci_adi'];
               $sifre = $_POST['sifre'];
               {
                  if($Ogrenci_adi == '12345' && $sifre == '1416')
                  { 
                     session_start();
                     $_SESSION['Ogrenci_adi'] = '12345';
                     $_SESSION['sifre'] = '1416';
                  
                     header("Refresh:1; url=http://localhost:1337/giriskontrol.php"); 
                     echo  "Giriş başarılı. Öğrenci bilgi sistemine hoşgeldiniz.";
                  } 
                  else 
                  {
                     header("Refresh:5; url=http://localhost:1337/");  
                     echo "Giriş başarısız. Lütfen tekrar deneyiniz.";
                  }
                     exit;    
               }
            }
         }   
   }

?>