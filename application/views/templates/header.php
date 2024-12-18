<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Pengelolaan Klinik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <div class="container mt-3">
        <div class="row">
        
            <div class="col-3" style="margin-left: -60px;">
                <ul class="list-group">
                    <li class="list-group-item active" aria-current="true">Menu</li>
                    <li class="list-group-item " aria-current="true">Forum</li>
                    <li class="list-group-item"><a href="<?= base_url() ?>">Data Pasien</a></li>
                    <li class="list-group-item"><a href="<?= base_url() ?>">Data Dokter</a></li>
                    <li class="list-group-item"><a href="<?= base_url()?>">Data Poli</a></li>
                    <li class="list-group-item"><a href="<?= base_url()?>">Berobat</a></li>
                  </ul>
                  
                  <ul class="list-group mt-3">
                    <li class="list-group-item active">Laporan</li>
                    <li class="list-group-item"><a href="<?= base_url() ?>">List Dokter</a></li>
                    <li class="list-group-item"><a href="<?= base_url() ?>">List Pasien</a></li>
                    <li class="list-group-item"><a href="<?= base_url('berobat') ?>">List Data Berobat</a></li>
                  </ul>
            </div>

            
            <div class="col-9 mt-3">