<section class="crud-container">
  <div class="container crud-wrapper">

    <div class="container-top ">
      <p class="section-title">Tambah Produk</p>
    </div>

    <div class="form-container">
      <form method="post" enctype="multipart/form-data">
        
        <div class="form-wrapper-top">   
          <div class="foto">
            <label>Foto Produk</label>
            <div class="custom-file-upload">
              <label for="foto_produk" class="btn-custom">Masukan Foto Produk</label>
              <input type="file" id="foto_produk" name="foto_produk" class="form-control">
            </div>
          </div>

          <div class="inputs-container">
            <div class="">
              <label>Kategori Produk</label>
              <select class="form-control form-select" name="id_kategori" >
                <option value="">Pilih Kategori</option>

                <?php foreach ($kategori as $key => $value) : ?>

                  <option value="<?php echo $value['id_kategori'] ?>">
                    <?php echo $value['nama_kategori'] ?>
                  </option>

                <?php endforeach ?>
              </select>
            </div>

            <div class="">
              <label>Nama Produk</label>
              <input type="text" name="nama_produk" class="form-control" placeholder="Masukan Nama Produk">
            </div>
          </div>
        </div>
        
        <button type="submit" class="btn-bg-yellow mt-3">Simpan</button>
      </form>

    </div>
  </div>
</section>