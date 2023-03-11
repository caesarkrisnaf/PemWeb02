<?php
//array prodi
$majors = [
  'SI' => 'Sistem Informasi',
  'TI' => 'Teknik Informatika',
  'BD' => 'Bisnis Digital'
];

//array skils
$skills = [
  'HTML' => 10,
  'CSS' => 10,
  'JavaScript' => 20,
  'RWD Boostrap' => 20,
  'PHP' => 30,
  'Python' => 30,
  'Java' => 50
];

//array domisili
$domisiles = [
  'Jakarta',
  'Bogor',
  'Depok',
  'Tanggerang',
  'Bekasi',
  'Lainnya'
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Form Registrasi</title>
</head>

<body>

  <div class="container mt-5">
    <h2>Form Registrasi IT Club Data Science</h2>
    <br>
    <form action="proses_register.php" method="POST">
      <div class="form-group row">
        <label for="nim" class="col-4 col-form-label">NIM</label>
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-adn"></i>
              </div>
            </div>
            <input id="nim" name="nim" placeholder="Masukkan Nim" type="text" required="required" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-user"></i>
              </div>
            </div>
            <input id="nama" name="nama" placeholder="Masukkan Nama Anda" type="text" required="required" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4">Jenis Kelamin</label>
        <div class="col-8">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="Laki-laki">
            <label for="gender_0" class="custom-control-label">Laki-laki</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="Perempuan">
            <label for="gender_1" class="custom-control-label">Perempuan</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="prodi" class="col-4 col-form-label">Program Studi</label>
        <div class="col-8">
          <select id="prodi" name="prodi" class="custom-select">
            <?php
            foreach ($majors as $key => $value) {
              echo '<option value="' . $value . '">' . $value . '</option>';
            }
            ?>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4">Skill Web &amp; Programming</label>
        <div class="col-8">
          <?php
          foreach ($skills as $key => $value) {
          ?>
            <div class="custom-control custom-checkbox custom-control-inline">
              <input name="skill[]" id="<?= $key ?>" type="checkbox" class="custom-control-input" value="<?= $key ?>">
              <label for="<?= $key ?>" class="custom-control-label">
                <?= $key ?>
              </label>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="form-group row">
        <label for="domisili" class="col-4 col-form-label">Tempat Domisili</label>
        <div class="col-8">
          <select id="domisili" name="domisili" class="custom-select">
            <?php
            foreach ($domisiles as $key => $value) {
              echo '<option value="' . $value . '">' . $value . '</option>';
            }
            ?>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label>
        <div class="col-8">
          <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <i class="fa fa-envelope"></i>
              </div>
            </div>
            <input id="email" name="email" placeholder="Masukkan Email Anda" type="text" class="form-control" required="required">
          </div>
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
  </div>
  </form>
</body>

</html>