<fieldset>
    <div class="form-group">
    <div class="form-group">
        <label for="judul_buku">Judul Buku</label>
          <textarea name="judul_buku" class="form-control" id="judul_buku"><?php echo htmlspecialchars(($edit) ? $customer['judul_buku'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
          <textarea name="description" class="form-control" id="description"><?php echo htmlspecialchars(($edit) ? $customer['description'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <label class="radio-inline">
            <input type="checkbox" name="kategori" value="Umum" <?php echo ($edit &&$customer['kategori'] =='Umum') ? "checked": "" ; ?> id="umum"/> Umum
        </label>
        <label class="radio-inline">
            <input type="checkbox" name="kategori" value="Interaksi" <?php echo ($edit && $customer['kategori'] =='Interaksi')? "checked": "" ; ?> id="interaksi"/> Interaksi
        </label>
        <label class="radio-inline">
            <input type="checkbox" name="kategori" value="Keluarga" <?php echo ($edit && $customer['kategori'] =='Keluarga')? "checked": "" ; ?> id="keluarga"/> Keluarga
        </label>
    </div>
    <div class="form-group">
        <label>Keywords</label>
        <label class="radio-inline">
            <input type="checkbox" name="keyword" value="Kepemimpinan" <?php echo ($edit &&$customer['keyword'] =='Kepemimpinan') ? "checked": "" ; ?> id="kepemimpinan"/> Kepemimpinan
        </label>
        <label class="radio-inline">
            <input type="checkbox" name="keyword" value="Seni" <?php echo ($edit && $customer['keyword'] =='Seni')? "checked": "" ; ?> id="seni"/> Seni
        </label>
        <label class="radio-inline">
            <input type="checkbox" name="keyword" value="Berbicara" <?php echo ($edit && $customer['keyword'] =='Berbicara')? "checked": "" ; ?> id="berbicara"/> Berbicara
        </label>
        <label class="radio-inline">
            <input type="checkbox" name="keyword" value="Remaja" <?php echo ($edit && $customer['keyword'] =='Remaja')? "checked": "" ; ?> id="remaja"/> Remaja
        </label>
        <label class="radio-inline">
            <input type="checkbox" name="keyword" value="Tantangan" <?php echo ($edit && $customer['keyword'] =='Tantangan')? "checked": "" ; ?> id="tantangan"/> Tantangan
        </label>
        <label class="radio-inline">
            <input type="checkbox" name="keyword" value="Prinsip" <?php echo ($edit && $customer['keyword'] =='Prinsip')? "checked": "" ; ?> id="prinsip"/> Prinsip
        </label>
        <label class="radio-inline">
            <input type="checkbox" name="keyword" value="Keputusan" <?php echo ($edit && $customer['keyword'] =='Keputusan')? "checked": "" ; ?> id="keputusan"/> Keputusan
        </label>
    </div>
    <div class="form-group">
        <label for="harga">Harga</label>
            <input name="harga" value="<?php echo htmlspecialchars($edit ? $customer['harga'] : '', ENT_QUOTES, 'UTF-8'); ?>" class="form-control"  type="number" id="harga">
    </div>
    <div class="form-group">
        <label for="stock">Stock</label>
            <input name="stock" value="<?php echo htmlspecialchars($edit ? $customer['stock'] : '', ENT_QUOTES, 'UTF-8'); ?>" class="form-control"  type="number" id="stock">
    </div>
    <div class="form-group">
        <label for="penerbit">Penerbit</label>
          <textarea name="penerbit" class="form-control" id="penerbit"><?php echo htmlspecialchars(($edit) ? $customer['penerbit'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>
    <div class="form-group text-center">
        <label></label>
        <a href="index.php" class="btn btn-danger">Close <i class="glyphicon glyphicon-remove"></i></a>
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
