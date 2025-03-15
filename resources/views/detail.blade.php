<a href="/api/post">Beranda</a>
<hr>
<table border="1">
    <tr>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Ket.</td>
    </tr>
    <tr>
        <td> {{ $dataSiswa->nama }}</td>
        <td>{{ $dataSiswa->alamat }}</td>
        <td>
        <form action="/post/edit/{{ $dataSiswa->id }}" method="get">
                @csrf
                <button type="submit">Perbarui</button>
             </form>
            <!-- <a href="/post/edit/{{ $dataSiswa->id }}">Perbarui</a> |  -->
             
             <form action="/api/post/{{ $dataSiswa->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
             </form>
        </td>
    </tr>
</table>