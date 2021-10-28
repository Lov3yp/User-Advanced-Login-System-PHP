<!DOCTYPE html>
<html>
<head>
	<title>Kayıt Ol</title>
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
 <div class="form">
     <form action="signup-check.php" method="post">
     	<h2>Kayıt Ol</h2>
     	<?php if (isset($_GET['error'])) { ?>
<meta http-equiv="refresh" content="0; /signup.php?birhataolustu" />

     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <div id="modalNesne" class="modal fade">
    <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Uyarı</h4>
            </div>
            <div class="modal-body">
                   <a href="#"><img src="tick.gif" width="100" height="100"/>

                    <p>Başarı İle Kayıt Oldunuz :.</p>
                                        <p><?php echo $_GET['success']; ?></p>

                <form>
                    <button type="submit" class="btn btn-primary">Tamam</button>
                </form>
            
            </div>
        </div>
    </div>
</div>
<meta http-equiv="refresh" content="2; /index.php" />
          <?php } ?>

          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Ad Soyad"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
              <div class="input">
                <div class="inputBox">
                     <label for="">Adınız:</label>
          <input type="text" name="name" placeholder=""><br>
                </div>
          <?php }?>

          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Kullanıcı Adı"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <div class="input">
                <div class="inputBox">
                     <label for="">Kullanıcı Adınız:</label>
          <input type="text" name="uname" placeholder=""><br>
                </div>
          <?php }?>

          <div class="inputBox">
                     <label for="">Şifreniz:</label>
          <input type="password" name="password" placeholder=""><br>
               </div>

               <div class="inputBox">
                     <label for="">Tekrar Şifreniz:</label>
          <input type="password" name="re_password" placeholder=""><br>
               </div>

     	 <div class="inputBox">
           <input type="submit" name="" value="Giriş Yap"> 
          </div>
            </div>
     <p class="forgot">Hesabın Varmı? <a href="/">Tıkla</a></p>
     </form>
</body>
</html>