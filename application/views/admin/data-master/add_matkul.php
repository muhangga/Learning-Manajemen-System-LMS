<script src="<?= base_url('vendor/script.js') ?>"></script>
<div class="form-group row">
   <label for="matkul" class="col-sm-3 col-form-label">Mata Kuliah</label>
   <div class="col-sm-9">
   <input type="text" class="form-control" id="matkul" name="Inputmatkul" placeholder="Masukan nama Matakuliah " required>
   </div>
</div>

<div class="form-group row">
   <label for="semester" class="col-sm-3 col-form-label">Semester</label>
   <div class="col-sm-9">
   <input type="text" class="form-control" id="semester" name="inputsemester" placeholder="Masukan Semester" required>
   </div>
</div>

<div class="form-group row">
   <label for="type_semester" class="col-sm-3 col-form-label"></label>
   <div class="col-sm-9">
   <label><input type="radio" class="form-group" id="type_semester" name="type" value="1"> Ganjil</label>
   <label><input type="radio" class="form-group ml-3" id="type_semester" name="type" value="0"> Genap</label>
   </div>
</div>
<b>* Required (Harus di isi)</b>