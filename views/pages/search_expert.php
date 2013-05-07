   <title>ARAMA SONUCU</title> 
  <style type="text/css">
      body {
        padding-top: 15px;
        padding-bottom: 40px;
        background-color: ;

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
     
        <h1>ARAMA SONUCU :</h1>  
          
        <?php  
        $total = count($results);  
          
        if($total == 0)  
        {  
            echo '<p>Kayıt Bulunamadı.</p>';  
        }  
        else  
        {  
            for($i=0; $i<$total; $i++)  
            {  
                echo '<p>'. $results[$i]->name . '</p>';
                echo '<p>'. $results[$i]->surname . '</p>';
                  
            }  
        }  
        ?>  

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
