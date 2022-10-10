<!DOCTYPE html>
<body onload="alaram()">
  

<form id="form" action="/pilihangket/post" method="POST">
@csrf
@if (Session::get('tes')!=null)
<input type="hidden" id="pesan" name="pesan" value="{{Session::get('tes')}}">
@else
<input type="hidden" id="pesan" name="pesan" value="kosong">
@endif
@for ($i = 0; $i < $id->jpemeriksa; $i++)
<label for="pemeriksa{{$i}}">pemeriksa ke {{$i+1}}:</label>
<select id="jpemeriksa{{$i}}" name="pemeriksa[{{$i}}]">
  <option disabled selected value>pilih pemeriksa</option>
    @for ($j = 0; $j < count($tes); $j++)
    <option value="{{$j}}">{{$tes[$j]->soal}}</option>
    @endfor
</select>
<br>
@endfor

<label for="pengisi">pengisi data:</label><br>
<select id="pengisi" name="pengisi">
    @foreach ($tes as $user)
    <option value="1">{{$user->soal}}</option>
    @endforeach
</select>
<br>
@for ($j=0; $j <count($tes);$j++)
    <p {{$j}}>
    <p>{{$tes[$j]->soal}}</p>
    
    <input type="hidden" id="idsoal" name="idsoal[{{$j}}]" value= {{$tes[$j]->id}}>
    <select id="urutansoal" name="urutansoal[{{$j}}]" id="urutansoal[{{$j}}]"required>
       
    <option disabled selected value>Atur urutan</option>
    @for ($i = 0; $i < count($tes); $i++)
    <option value="{{$i}}">{{$i+1}}</option>
    @endfor
</select>
@endfor

<input type="button" value="Submit" onclick="myFunction()">
</form>

<p id="demo"></p>
</body>

<script>
    function myFunction() {
  let text = "pastikan anda sudah mengisi semua data dengan benar\nJika sudah pasti silahkan tekan OK";
  if (confirm(text) == true) {
    document.getElementById("form").submit(); 
  } else {
    text = "You canceled!";
  }
}
function alaram() {
    var text = document.getElementById("pesan").value; 
    if(text != "kosong"){    
      alert(text);
}
 
}
</script>
