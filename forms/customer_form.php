<fieldset>
    <div class="form-group">
    <div class="form-group">
        <label for="f_name">Judul Buku</label>
          <textarea name="f_name" class="form-control" id="f_name"><?php echo htmlspecialchars(($edit) ? $customer['f_name'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>
    <div class="form-group">
        <label for="desc">Description</label>
          <textarea name="desc" class="form-control" id="desc"><?php echo htmlspecialchars(($edit) ? $customer['desc'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="Umum" <?php echo ($edit &&$customer['gender'] =='Umum') ? "checked": "" ; ?> required="required"/> Umum
        </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="Interaksi" <?php echo ($edit && $customer['gender'] =='Interaksi')? "checked": "" ; ?> required="required" id="female"/> Interaksi
        </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="Keluarga" <?php echo ($edit && $customer['gender'] =='Keluarga')? "checked": "" ; ?> required="required" id="female"/> Keluarga
        </label>
    </div>
    <div class="form-group">
        <label>Keywords</label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="Kepemimpinan" <?php echo ($edit &&$customer['gender'] =='Kepemimpinan') ? "checked": "" ; ?> required="required"/> Kepemimpinan
        </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="Seni" <?php echo ($edit && $customer['gender'] =='Seni')? "checked": "" ; ?> required="required" id="female"/> Seni
        </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="Berbicara" <?php echo ($edit && $customer['gender'] =='Berbicara')? "checked": "" ; ?> required="required" id="female"/> Berbicara
        </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="Remaja" <?php echo ($edit && $customer['gender'] =='Remaja')? "checked": "" ; ?> required="required" id="female"/> Remaja
        </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="Tantangan" <?php echo ($edit && $customer['gender'] =='Tantangan')? "checked": "" ; ?> required="required" id="female"/> Tantangan
        </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="Prinsip" <?php echo ($edit && $customer['gender'] =='Prinsip')? "checked": "" ; ?> required="required" id="female"/> Prinsip
        </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="Keputusan" <?php echo ($edit && $customer['gender'] =='Keputusan')? "checked": "" ; ?> required="required" id="female"/> Keputusan
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
        <button type="submit" class="btn btn-warning" >Save <span class="glyphicon glyphicon-send"></span></button>
    </div>            
</fieldset>
