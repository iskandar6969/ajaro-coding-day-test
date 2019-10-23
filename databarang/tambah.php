<?php 
require 'functions.php';



// if ( isset($_POST["submit"]) ){
	
// 	if ( tambah ($_POST) > 0 ) {
// 		echo "Data sudah ditambahkan mek";
// 	}else{
// 		echo "om Data gk bisa om";
// 	}

// }	

if ( isset($_POST["submit"]) ){

	if (tambah($_POST) > 0 ) {
		echo "
			<script>
			alert('data berhasil ditambahkan!^_^');
			document.location.href = 'index.php';
			</script>
			";
	}else{
		echo "
			<script>
				alert('data gagal ditambahkan!T_T');
				document.location.href = 'index.php';
			</script>
			";
	}
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Barang</title>

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

</head>
<body>

<nav>
    <h2 class="">Menambahkan Data Barang</h2>

</nav>

	 <section id="contact" class="contact grey lighten-3  ">
          <div class="container">
     
            <div class="row tmbh-data">      
                <form action="" method="post">
                  <div class="card-panel">
                    <h5>Tambahkan Data barang</h5>
                    <div class="">
                      <input type="text" id="kode" name="kode" required placeholder="kode barang">
                      <label for="kode">Kode</label>
                    </div>
                     <div class="">
                      <input type="text" id="nama" name="nama" placeholder="nama barang">
                      <label for="nama">Nama</label>
                    </div>
                     <div class="">
                      <textarea name="deskripsi" id="deskripsi" class="materialize-textarea" placeholder="deskripsi barang"></textarea>
                      <label for="deskripsi">Deskripsi</label>
                    </div>
                    <div class="">
                      <input type="text" id="stok" name="stok" placeholder="stok barang">
                      <label for="stok">Stok</label>
                    </div>
                    <div class="">
                      <input type="text" id="harga" name="harga" placeholder="harga barang">
                      <label for="harga">harga</label>
                    </div>
                    <div class="">
                      <input type="text" id="berat" name="berat" placeholder="berat barang">
                      <label for="berat">Berat</label><span style="font-size: 
                      13px; float: right; color: rgba(0,0,0,.75);">gram</span>
                    </div>
                      <button type="submit" class="btn deep-purple darken-4 simpan" name="submit">Simpan</button>

                </form>
              </div> 
            </div>
          </div>
        </section>

       

	<!-- <form action="" method="post">
		<label for="kode">Kode: </label>
		<input type="text" name="kode" id="kode" required>
		<br>
		<br>
		<label for="nama">Nama: </label>
		<input type="text" name="nama" id="nama">
		<br>
		<br>
		<label for="deskripsi">Deskripsi: </label>
		<input type="text" name="deskripsi" id="deskripsi">
		<br>
		<br>
		<label for="stok">Stok: </label>
		<input type="text" name="stok" id="stok">
		<br>
		<br>
		<label for="harga">Harga: </label>
		<input type="text" name="harga" id="harga">
		<br>
		<br>
		<label for="berat">Berat: </label>
		<input type="text" name="berat" id="berat">
		<br>
		<button type="submit" name="submit">Simpan</button>
	</form>



</body>
</html>