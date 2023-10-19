<?php
    require_once 'header_template.php';

?>

<div class="content">
    <div class= "container">

    <h3 class="page-title">Tambah produk</h3>
        <div class="card">
           
            <form action="" method="post">
                <div class="input-group">
                    <label> Nama Produk</label>
                    <input type="text" name="nama" placeholder="Nama produk" class="input-control" required>
                </div>

                <div class="input-group">
                    <label>Harga </label>
                    <input type="text" name="user" placeholder="Harga " class="input-control" required>
                </div>

                <div class="input-group">
                    <label>deskripsi </label>
                    <textarea class="input-control" name="deskripsi" placeholder="Deskripsi"></textarea>
                </div>
                <div class="input-group">
                    <label>kategori </label>
                    <select class="input-control" name="kategori">
                        <option value="">pilih</option>
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                    </select>
                </div>
                <div class="input-group">
                    <label>foto </label>
                    <input type="file" name="foto" required>
                </div>

                <div class="input-group">
                   <button type="button" onclick="window.location.href = 'produk.php'" class="btn-back">Kembali</button>
                   <button type="submit" name="submit" class="btn-submit">simpan</button>
                </div>
            </form>

            <?php
                if(isset($_POST['submit'])){
                    
                    //proses insert data
                   
                }
            ?>
        </div>  
    </div>
</div>

<?php require_once 'footer_template.php'; ?>