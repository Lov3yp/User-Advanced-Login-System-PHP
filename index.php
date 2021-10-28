<html>
    <head>
        <Title>Giris CP</Title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="style1.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script type="text/javascript">
     $(document).ready(function(){
          $("#modalNesne").modal('show');
     });
</script>
<link rel="shortcut icon" href="resim adresi gir" type="image/x-icon" />
    </head>
    <body>
<style>
body {
background-color: #060c21
}
</style>
</div>

      <div class="form">
      <form action="login.php" method="post">
          <h2>Giriş Yap</h2>
          <?php if (isset($_GET['error'])) { ?>
<div id="modalNesne" class="modal fade">
    <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Uyarı</h4>
            </div>
            <div class="modal-body">
                   <a href="#"><img src="wrong.gif" width="100" height="100"/>

                    <p>Giriş Yaptığınız Bilgiler Yanlış Aşağıdakilerden birisi neden olabilir.</p>
                                        <p><?php echo $_GET['error']; ?></p>

                <form>
                    <button type="submit" class="btn btn-primary">Tamam</button>
                </form>
            
            </div>
        </div>
    </div>
</div>
<meta http-equiv="refresh" content="2; /" />

          <?php } ?>
          <div class="input">
                <div class="inputBox">
                     <label for="">Kullanıcı Adınız:</label>
          <input type="text" name="uname" placeholder=""><br>
                </div>
                <div class="inputBox">
                     <label for="">Şifreniz:</label>
          <input type="password" name="password" placeholder=""><br>
               </div>
                <div class="inputBox">
           <input type="submit" name="" value="Giriş Yap"> 
          </div>
            </div>
     <p class="forgot">Hesap Oluştur? <a href="signup.php">Tıkla</a></p>

     </form>
    </body>


</html>
