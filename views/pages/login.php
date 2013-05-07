	
<!DOCTYPE html>
<html lang="en"
  <head>
    <meta charset="utf-8">
    <title>Carousel Template &middot; Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<style type="text/css">
      body {
        padding-top: 15px;
        padding-bottom: 40px;
        background-color: ;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>

      <form class="form-signin" action="<?=site_url('login/check_login')?>" method="post" accept-charset="utf-8">
        <h2 class="form-signin-heading">Lütfen giriş yapın</h2>
        <input type="text" class="input-block-level" name="email" placeholder="Email" required maxlength="40" autofocus>
        <input type="password" class="input-block-level" name="password" placeholder="Şifre" required maxlength="20" autofocus> 
				<label class="checkbox">
					Beni hatırla <input type="checkbox" value="remember-me"> 
				</label>
        <button style="float: right; margin-top:-30px;" class="btn btn-large btn-primary" type="submit">Giriş</button>
      </form>
    <meta charset="utf-8">
    <? if($message == 1): ?>
    <div class="row">
        <div class="span4">
	    		<div class="alert alert-error">
					<meta charset="utf-8">
			     	<strong>Hatalı giriş!! bilgilerinizi düzenleyiniz...</strong>
		    	</div>
		   </div>
		</div>
	<? elseif($message == 2):?>
	<div class="row">
        <div class="span4">
					<div class="alert alert-error">
						<strong>Doğru</strong>
			    </div>
		    </div>
	</div>
	<? endif; ?>
	
	
	

