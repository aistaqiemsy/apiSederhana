<a href="/input/baru">Input Data Baru</a>
<hr>

<table border="1">
    <tr>
        <td>No.</td>
        <td>Nama</td>
    </tr>
@foreach ($hasilData as $data) 
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td> <a href="/api/post/{{ $data->id }}">{{ $data->nama }}</a> </td>
    </tr>
@endforeach
</table>