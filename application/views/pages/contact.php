<!DOCTYPE html>
<html lang="en"
  <head>
    <meta charset="utf-8">
    <title>Carousel Template &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    



<form class="well span9"  >
  <div class="row">
		
		<div class="span3">
			<?php echo validation_errors('<p class="error">'); ?>
			<?php echo form_open("home/add_contact"); ?>
			<label>İsim:</label>
			<input class="span3" placeholder="Your First Name" type="text" name="first_name"value="<?php echo set_value('first_name'); ?>" >
			<label>Soyisim:</label>
			<input class="span3" placeholder="Your Last Name" type="text" name="last_name" value="<?php echo set_value('last_name'); ?>">
			<label>Email Adresi:</label>
			<input class="span3" placeholder="Your email address" type="text" name="email" value="<?php echo set_value('email'); ?>">
       <label>Konu</label>
			<select id="subject" name="subject" class="span3"  name="subject"value="<?php echo set_value('subject'); ?>">
				<option value="na" selected="">Seçiniz:</option>
				<option value="service">Genel Kullanıcı Servisi</option>
				<option value="suggestions">Öneriler</option>
				<option value="product">Ürün Desteği</option>
			</select>
	   </div>
		
		<div class="span5" >
			<label >Mesaj</label>
			<textarea name="message" id="message" class="input-xlarge span5" rows="13"  value="<?php echo set_value('message'); ?>"></textarea>
		</div>
					
	
	</div>
	<button align=center type="submit" class="btn btn-primary">Gönder</button>
		<?php echo form_close(); ?>
</form>





