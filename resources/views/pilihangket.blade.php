<!DOCTYPE html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>

    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body >

<form action=/pilihangket/send method="get">
@csrf
<table>
    <tr>
      <th>Id soal</th>
      <th>soal</th>
      <th>tipe</th>
      <th>pilih</th>
    </tr>
    @for ($i = 0; $i < $message; $i++)
    <tr>
        <td>{{$i+1}}</td>
        <td>{{$tes[$i]->soal}}</td>
        <td>{{$tes[$i]->type}}</td>
        <th><input type="checkbox" id="id_soal" name="id_soal[{{$i}}]" value={{$tes[$i]->id}}></th>
      </tr>
@endfor
    
  </table>

  <label for="jpemeriksa">jumlah pemeriksa:</label><br>
  <input type="number" id="jpemeriksa" name="jpemeriksa" required><br>
  <input type="hidden" id="message" name="message" value= {{$message}}>
  <input type="submit" value="Submit">
</form>
</body>
