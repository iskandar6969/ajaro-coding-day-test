<?php 
require 'functions.php';
$barang = query("SELECT *FROM barang");



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ba6 tes</title>
</head>

<!-- materialize css -->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

<!-- icon -->
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="ico/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="ico/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="ico/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="ico/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="ico/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="ico/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="ico/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="ico/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="ico/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="ico/favicon-128.png" sizes="128x128" />
<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="ico/#FFFFFF" />
<meta name="msapplication-TileImage" content="ico/mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="ico/mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="ico/mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="ico/mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="ico/mstile-310x310.png" />

<!-- materialize css -->
<link rel="stylesheet" type="text/css" href="../materialize/css/materialize.min.css">

<!-- my css -->

<link rel="stylesheet" type="text/css" href="../materialize/css/style.css">
<body>

<nav>
	<h2>Kelola Data Barang</h2>
</nav>

<section>
	<div class="row">            
	   <div class="col m6 ligth">
	       <h5>Daftar barang</h5>
	</div>
	   <div class="col m6 ligth tambah"> 
	       <h5>     		
			<a href="tambah.php" title="tambah data barang">Tambah</a>
	   </h5>
	</div>  
</div>

</section>          
 <table class="responsive-table highlight centered">
        <thead>
          <tr>
              <th>No</th>
              <th>Kode</th>
              <th>Nama</th>
              <th>Harga</th>
              <th>Aksi</th>
          </tr>
        </thead>

        <tbody>
        	<?php $i=1; ?>
	<?php foreach( $barang as $row) :?>
	<tr>
          <tr>
            <td><?php echo $i; ?></td>
		<td><?php echo $row ["kode"]; ?></td>
		<td><?php echo $row ["nama"]; ?></td>
		<td><?php echo $row ["harga"]; ?></td>
		<td>
			<a href="ubah.php?id=<?= $row ["id"]; ?>">Edit</a>
			<a style="color: red;padding-left: 10px;" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin ingin dihapus?');">Hapus</a>
		</td>
          </tr>
          <?php $i++; ?>
	<?php endforeach; ?>
        </tbody>
      </table>

 <!-- <table border="1" cellpadding="15" cellspacing="0">
	<tr>
		<th>No</th>
		<th>Kode</th>
		<th>Nama</th>
		<th>Harga</th>
		<th>Aksi</th>
	</tr>
	<?php $i=1; ?>
	<?php foreach( $barang as $row) :?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $row ["kode"]; ?></td>
		<td><?php echo $row ["nama"]; ?></td>
		<td><?php echo $row ["harga"]; ?></td>
		<td>
			<a href="ubah.php?id=<?= $row ["id"]; ?>">Edit</a>
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin rk slur?');">Hapus</a>
		</td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table>  -->
</body>
</html>