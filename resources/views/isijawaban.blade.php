<!DOCTYPE html>
<head>
    <title>isi angket</title>
</head>
<body>
    <div>
        <form action="isiangket/submit" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" id="idsoal" name="idlaporan" value="{{$pelaporan}}">

            <table>
                <tr>
                    <th>soal</th>
                    <th></th>
                    <th>Jawaban</th>
                    
                </tr>
<p {{$dummy=0}} hidden>
    {{-- ati ati daerah ini soale array 3d agak ribet yoo, aku juga lupa poo kok ini tak buat array 3d. oh ini andre beberapa hari kemudian. :) ada sing katamu bolak balik ambil ke database sing garai lemot males mikir jadi tak buat 3d wwwwww --}}
@foreach ($soal as $item)
<tr>
    <td>{{$item->soal}}
    </td>
    <td>:</td>
    <td>
        @if($item->type == "text" or $item->type == "date" or $item->type == "number")
        <input type="{{$item->type}}" id="soal" name="soal[{{$dummy}}]" required>
        @elseif ($item->type == "file")
        <input type="file" id="soal" name="soal[{{$dummy}}][]" accept="image/*" multiple required>
        @elseif ($item->type == "textarea")
        <textarea rows="10" cols="50" id="soal" name="soal[{{$dummy}}]" spellcheck="true" lang="in"></textarea><br>
        @endif

        <p {{$dummy++}} hidden>
    </td>
  </tr>
@endforeach
</table>
<input type="submit" value="Submit">

</form> 
    </div>

</body>