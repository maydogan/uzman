
	<style type="text/css">
      body {
        padding-top: 15px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
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
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    
  </head>

  <body>

    <div class="container">

      <form class="form-signin" action="<?=site_url('login/check_login')?>" method="post" accept-charset="utf-8">
        <h2 class="form-signin-heading">Kayıt ol</h2>
        <input type="text" class="input-block-level" name="ad" placeholder="İsim" required maxlength="40" autofocus>
        <input type="text" class="input-block-level" name="soyad" placeholder="Soyisim" required maxlength="20" autofocus>
        <input type="text" class="input-block-level" name="fakulte" placeholder="Fakülte" required maxlength="20" autofocus>
        <input type="text" class="input-block-level" name="bolum" placeholder="Bölüm" required maxlength="20" autofocus>
        <input type="text" class="input-block-level" name="email" placeholder="Email" required maxlength="20" autofocus>
        <input type="text" class="input-block-level" name="email2" placeholder="Email tekrar" required maxlength="20" autofocus>
        <input type="password" class="input-block-level" name="password" placeholder="Şifre" required maxlength="20" autofocus>
        <input type="password" class="input-block-level" name="password" placeholder="Şifre tekrar" required maxlength="20" autofocus>
        <small>Bir tane gizli soru seçiniz</small>
        <select class="span3">
		  <option> </option>
		  <option>en sevdiğin çocukluk arkadaşının adı</option>
		  <option>ilk cep telefonu markası</option>
		</select>
		 
		
        <input type="text" class="input-block-level" name="password" placeholder="Gizli yanıt" required maxlength="20" autofocus>
        <div>
			
		</div>
        <button class="btn btn-large btn-primary" type="submit">Kayıt ol</button>
      </form>
    </div> <!-- /container -->
    
    
				

				
	

	
	


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>

