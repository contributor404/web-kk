<?php
include "./bootstrap/boot.php";

if (isset($_POST["login"])) {
  include "./core/koneksi.php";

  $email = $_POST["username"];
  $password = $_POST["password"];

  $log = $konek->query("SELECT * FROM login WHERE username='$email' and password='$password'");
  $cek = $log->num_rows;

  if ($cek > 0) {
    ?>
    <script>
      document.location.href = "./pages/menu.php";
    </script>
    <?php
  } else {
    ?>
    <script>
      alert("Login gagal");
    </script>
    <?php
  }
}
?>

<div class="container card col-4 mt-5">
  <h1 class="text-center mb-5">Login APP Siswa</h1>
  <form action="" method="POST">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="username">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" required name="password">
    </div>
    <button type="submit" name="login" class="btn btn-primary">Submit</button>
  </form>
</div>