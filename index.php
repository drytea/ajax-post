<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>jQuery Ajax</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://code.jquery.com/jquery.js"></script>
  </head>
  <body>
  <input type="text" name="isim" id="isim" placeholder="bir şeyler yaz">
  <i id="gonder">Gönder</i>
  <span id="sonuc"></span>
  <script>
  $('#gonder').click(function(){//göndere tıklanma olayı
  	/* burdan sonrası göndere bastıktan yapılacak işlemler*/
  	var isim_degiskeni = $('#isim').val();//isim alanına yazılan veriyi bir değişkene aldık
  	var post_edilecek_veriler = 'isim='+isim_degiskeni; //post edilmeye hazır hale getirdik. yani verileri bir değişkene atadık.
  	$.ajax({ // ajax işlemi başlar
  		type:'POST', // veri gönderme tipimiz. get olabilirdi json olabilirdi. ama biz post kullanıyoruz
  		url:'ajaxPost.php', // post edilecek adres
  		data:post_edilecek_veriler, //post edilecek veriler
  		success:function(cevap){// işlem başarılıysa
  			$("#sonuc").html(cevap); //sonuc id'sine ajaxPost.php den dönen verileri basıyoruz. 
  		}
  	});
  });
  </script>
  </body>
</html>
