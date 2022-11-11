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
    <form id="form" action="/ceklaporan/save" method="POST">
        @csrf
<h1>judul laporan nanti masuk sini</h1>
    <table>
        
    @for($i=0;$i<count($jawaban);$i++)
    <tr>
        
    @if($jawaban[$i]->type == "file")
    <br><td colspan="3">
        <p>{{asset('storage/'.$jawaban[$i]->jawaban)}}</p>
    <img src="{{public_path("storage/".$jawaban[$i]->jawaban)}}" width="500" 
     height="500"><br>
     {{-- <img src="{{'data/image'.pathinfo(base_path('public/storage/'.$jawaban[$i]->jawaban), PATHINFO_EXTENSION).';base64,'.base64_encode(file_get_contents(base_path('public/storage/'.$jawaban[$i]->jawaban)))}}" width="500" 
     height="500"><br> --}}
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
