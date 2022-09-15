 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin compeny profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
 </head>
 <body class="container">
    <header>
   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">sweet pudding</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        
      </ul>
      <ul class="nabar-nav">
      <li  class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu dropdown-menu">
            <li><a class="dropdown-item" href="#">profile</a></li>
            <li><a class="dropdown-item" href="#">setting</a></li>
            <li><a class="dropdown-item" href="#">log out</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
    </header>
    <main>
      <?php
      $katakunci=(isset($_GET["katakunci"]))?$_GET["katakunci"]:"";
      
      ?>
      <h1>halaman toko<h1>
        <p>
          <a href="halaman-input.php">
            <input type="button" class="btn btn-primery"value="buat halaman baru">
          </a>
        </p>
        <from class="row g-3" method="get">
        <div class="col-auto">
          <input type="text" class="from-control" pleacholder="masukan kata kunci" name="kata kunci" value="<?php echo $katakunci ?>"></input>
          </div>
          <div class="col-auto">
            <input type="submit" name="cari" value="cari "class="btn btn-secondary">
         </from>
         <table class="table table- striped"> 
<thead> 
  <tr>
  <th class= "col-1">#</th>
  <th>judul</th>
  <th>kutipan</th>
  <th class= "col-2">aksi</th>
  </tr>
</thead>
<tbody>
  <tr>
  <td>1</td>
  <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, dolor?</td>
  <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
  <td>
    <span class="badge bg-danger">delete</span>
    <span class="badge bg-warning text-dark">Edit</span></td>
  </tr>
</tbody>
         </table>
    </main>
    <footer class="bg-light">
    <i class="fa fa-twitter fa-2x fa-fw"></i>
    <i class="fa fa-instagram fa-2x fa-fw"></i>
    <i class="fa fa-youtube-square fa-2x fa-fw"></i>
      <div class="text-center p-3" style="background:#cccccc">
      compeny & brand2022 created by azi saputra</div>

    </footer>
 </body>
 </html>
 