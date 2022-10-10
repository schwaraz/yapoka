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
  <?php
            if (isset($_FILES['dokumentasi'])) {
                $myFile = $_FILES['dokumentasi'];
                $fileCount = count($myFile["name"]);

                for ($i = 0; $i < $fileCount; $i++) {
                    ?>
                        <p>File #<?= $i+1 ?>:</p>
                        <p>
                            Name: <?= $myFile["name"][$i] ?><br>
                            Temporary file: <?= $myFile["tmp_name"][$i] ?><br>
                            Type: <?= $myFile["type"][$i] ?><br>
                            Size: <?= $myFile["size"][$i] ?><br>
                            Error: <?= $myFile["error"][$i] ?><br>
                        </p>
                    <?php
                    }
            }
        ?>
</body>