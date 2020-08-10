<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TDAH Kids | Registro</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="assets/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/bootstrap/css/Custom.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index.html"><img src="assets/images/logo2.png" class=" responsive Logo-Code-Main" alt="Logo TDAH Kids"></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Registrarse</p>

    <form action="" Method="POST">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="Nombre" required placeholder="Nombre">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="Username" pattern="[A-Za-z0-9_-]{1,20}" title="De Ocho o veinte caracteres, Caracteres Permitidos: A-Za-z0-9_-" required placeholder="Username">
        <span class="glyphicon glyphicon-text-background form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback">
        <input type="number" class="form-control" name="Edad" required placeholder="Edad">
        <span class="glyphicon glyphicon-apple form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="Email" required placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="Password" required pattern="[A-Za-z0-9_-]{8,20}" title="De Ocho o veinte caracteres, Caracteres Permitidos: A-Za-z0-9_-" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="Password1" required pattern="[A-Za-z0-9_-]{8,20}" title="De Ocho o veinte caracteres, Caracteres Permitidos: A-Za-z0-9_-" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <center>
              <label>
                <input type="checkbox"> Acepto los <a href="#">terminos y condiciones.</a>
              </label>
            </center>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="s" id = "s" class="btn btn-primary btn-block btn-flat">Registrarse</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Registrarse usando
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Registrarse usando 
        Google+</a>
    </div>

    <a href="login.php" class="text-center">¿Ya tienes cuenta?</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<!-- Bootstrap 3.3.7 -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
