<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?php echo $judul; ?></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="<?= base_url(); ?>"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="<?= base_url(); ?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>mahasiswa">Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>peoples">Peoples</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url();?>about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link bg-primary border" href="<?= base_url();?>mpdf">
                    Mpdf
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url();?>book">
                    Book
                </a>
              </li>
            </ul>
          </div>
        </div>
    </nav>