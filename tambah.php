<!DOCTYPE html>
<html lang="en">
<head>  
<title>From tambah</title>
</head>
<body>
<center>
    <header>
    <h1>form tambah</h1>
</header>
    <form action="proses_tambah.php" method="POST">
        <form>
            <fieldset>
                <p>
                    <label for="nama_user">Nama  : </label>
                    <input type="text" name="nama_user" />
</p>
                <p>
                    <label for="jabatan">Jabatan : </label>
                    <input type ="text" name="jabatan"/>
</p>
                

<p>
                    <label for="nama_bahan">Nama Bahan : </label>
                    <input type ="text" name="nama_bahan"/>
</p>

<p>
                    <label for="jenis_bahan">Jenis Bahan : </label>
                    <input type ="text" name="jenis_bahan"/>
</p>

 <p>
                    <label for="stok">Stok: </label>
                    <input type ="text" name="stok"/>
</p>

<p>
                    <label for="harga">Harga : </label>
                    <input type ="number" name="harga"/>
</p>
                <p>
                    <label for="kondisi">Kondisi : </label>
                    <label><input type="radio" name="kondisi" value="baik"/> Baik </label>
                    <label><input type="radio" name="kondisi" value="rusak"/> Rusak </label>
</p>
<p>
                     <label for="tgl_masuk">Tanggal Masuk : </label>
                    <input type ="date" name="tgl_masuk"/>
</p>


                <p>
                    <input type="submit" value="Tambah" name="tambah" />
</p>
</center>
</fieldset>
<form>
</body>
</html>