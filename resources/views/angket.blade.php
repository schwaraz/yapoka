<!DOCTYPE html>
<head>
    <title>pembuatan angket</title>
</head>
<body>
    <div>
        <form action=angket/send method="POST">
            @csrf
            <label for="soal">Soal angket:</label><br>
            <input type="text" id="soal" name="soal" required><br>
            <label for="type">tipe soal:</label>
            <select id="type" name="type" required>
                <option disabled selected value>Pilih tipe jawaban</option>
                <option value="date">tanggal</option>
                <option value="text">kalimat pendek</option>
                <option value="textarea">kalimat panjang</option>
                <option value="number">angka</option>
                <option value="file">gambar</option>
            </select>
            <input type="submit" value="Submit">
        </form> 
    </div>
</body>