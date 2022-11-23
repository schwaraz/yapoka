<!DOCTYPE html>
<head>
    <style>
        table, th, td {
            margin-left: auto;
  margin-right: auto;
}
        </style>
</head>
<body>
    <form id="form" action="ceklaporan/penyimpanandata" method="POST">
        @csrf
        <input type="hidden" name="idlaporan" value="{{$pelaporan}}">
        <input type="text" name="button" id="button" value="{{old('button')}}" >
        <input type="hidden" name="note" id="note">
        {{-- bawah nanti isi judul e ndooooo --}}
        <input type="text" name="title" >
    <table>
        
    @for($i=0;$i<count($jawaban);$i++)
    <tr>
        
    {{-- @if($jawaban[$i]->type == "file")
    <br><td colspan="3">
    <img src="{{asset('storage/'.$jawaban[$i]->jawaban)}}" width="500" 
     height="500"><br>
    </td>
</tr>
<tr>
    @elseif($jawaban[$i]->type == "textarea")
    <td>{{$jawaban[$i]->soal}}</td>
        <td><p style="text-align:right">:</p></td>
        <td>
    <br>
    <p>{{$jawaban[$i]->jawaban}}</p>
        </td>
    @else
    <td>{{$jawaban[$i]->soal}}</td>
        <td><p style="text-align:right">:</p></td>
        <td>
    {{$jawaban[$i]->jawaban}}<br>
        </td>
    @endif
    </tr> --}}


    {{-- bagian kalo pake input --}}
    @if($jawaban[$i]->type == "file")
    <br><td colspan="3">
    <img src="{{asset('storage/'.$jawaban[$i]->jawaban)}}" width="500" 
     height="500"><br>
    </td>
</tr>
<tr>
    @elseif($jawaban[$i]->type == "textarea")
    <td>{{$jawaban[$i]->soal}}</td>
        <td><p style="text-align:right">:</p></td>
        <td>
    <br>
    <p><textarea name="{{$jawaban[$i]->idsoal}}" id="{{$jawaban[$i]->idsoal}}" cols="30" rows="10" required>{{$jawaban[$i]->jawaban}}</textarea></p>
        </td>
    @else
    <td>{{$jawaban[$i]->soal}}</td>
        <td><p style="text-align:right">:</p></td>
        <td>
            <input type="{{$jawaban[$i]->type}}" id="{{$jawaban[$i]->idsoal}}" name="{{$jawaban[$i]->idsoal}}" value="{{$jawaban[$i]->jawaban}}" required><br>
        </td>
</tr>

    @endif

    @endfor
    <tr>
        <td><input type="button" value="tolak" onclick="tolak()"></td>
        <td><input type="submit" value="terima tanpa simpan perubahan" formaction="ceklaporan/laporanditerima"></td>
        <td><input type="submit" value="terima dengan simpan semua perubahan"></td>
    </tr>
    </table>
    </form>
</body>
<script>
    function tolak() {
  let text;
  let person = prompt("masukan catatan kenapa di tolak:", "");
  if (person == null || person == "") {
    text = "mohon isi catatan kenapa ditolak";
    alert(text);
  } else {
    document.getElementById('form').action = "ceklaporan/laporanditolak";
    document.getElementById("note").value =person;
    document.getElementById("form").submit();
}}
</script>