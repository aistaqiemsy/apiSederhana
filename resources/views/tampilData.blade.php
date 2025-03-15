<a href="/input/baru">Input Data Baru</a>
<hr>

<table>
    <tr>
        <td>Nama</td>
    </tr>
@foreach ($hasilData as $data) 
    <tr>
        <td> <a href="/api/post/{{ $data->id }}">{{ $data->nama}}</a> </td>
    </tr>
@endforeach
</table>