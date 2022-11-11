<!DOCTYPE html>
<head>
    <title>Form pengajuan</title>
</head>
<body>
<form>
    <label for="nkegiatan">Nama Kegiatan:</label><br>
    <input type="text" id="nkegiatan" name="nkegiatan"><br>
    <label for="tanggal">Tanggal kegiatan dilaksanakan:</label><br>
    <input type="date" id="tanggal" name="tanggal"><br>
    <label for="penjelasan">Penjelasan Kegiatan:</label><br>
    <textarea rows="10" cols="50" name="penjelasan" spellcheck="true" lang="in"></textarea><br>
    <label for="dokumentasi">Foto dokumentasi:</label><br>
    <input type="file" id="dokumentasi" name="dokumentasi[]" accept="image/png, image/jpg, image/jpeg" multiple>
  </form> 
</body>
