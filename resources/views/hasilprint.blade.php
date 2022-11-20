<!DOCTYPE html>
<head>
    <style>
        table, th, td {
            margin-left: auto;
  margin-right: auto;
}
img {
    max-width: 500px;
    max-height: 750px;
}
        </style>
</head>
<body>
    <form id="form" action="/ceklaporan/save" method="POST">
        @csrf
<h1>judul laporan nanti masuk sini</h1>
    <table>
        
    @for($i=0;$i<count($jawaban);$i++)
    <tr>
        
    @if($jawaban[$i]->type == "file")
    <br><td colspan="3">
    <img src="{{public_path("storage/".$jawaban[$i]->jawaban)}}" ><br>
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
    </tr>
    @endfor
   
    </table>
    </form>
</body>
