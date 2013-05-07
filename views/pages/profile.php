<style>
    #about-content 
    {
	  float:left;
	  margin-right:50px;
	  width:300px;
	}
</style>
<div id="about-content"class="container">
	<input id="lefile" type="file" style="display:none">
	<input id="photoCover" class="input-large" type="image" src="<?php echo base_url('assets/image/profil.jpg');?>" width="100" height="175"> </br>
	<a class="btn btn-small" onclick="$('input[id=lefile]').click();">Fotoğrafı değiştir</a>
			<ul class="nav nav-list">
			  <li class="nav-header">Hesapp ayarları</li>
			  <li><a href="#">profili düzenle</a></li>
			  <li class="nav-header">Mesajlar</li>
			  <li><a href="#">Gelen kutusu</a></li>
			  <li><a href="#">Giden kutusu</a></li>
			  <li><a href="#">Mesaj yaz</a></li>
			  <li class="nav-header">Bağlantılar</li>
			 
			 
			  <li><a href="https://www.facebook.com/">Facebook</a></li>
			  <li><a href="http://www.omu.edu.tr/">Omü</a></li>
			 </ul>
		
</div>
<div id="about-content" style="margin-top:20px; margin-bottom:100px;margin-left:150px" align="left"> 
			<span class="label">Adı</span>
			<input type="text" placeholder="Text input">
			<br/>
			<span class="label">Soyadı</span>
			<input type="text" placeholder="Text input">
			<br/>
			<span class="label">Mezuniyet yılı</span>
			<input type="text" placeholder="Text input">
			<br/>
			<span class="label">Bölüm</span>
			<input type="text" placeholder="Text input">
			<br/>
			<span class="label">E-mail</span>
			<input type="text" placeholder="Text input">
			<br/>
			<span class="label">Telefon</span>
			<input type="text" placeholder="Text input">
			<br/>
			<span class="label">İş durumu</span>
			<input type="text" placeholder="Text input">
		</div>
