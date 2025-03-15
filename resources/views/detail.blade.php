<a href="/api/post">Kembali</a>
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
            <a href="/api/post/{{ $dataSiswa->id }}">Perbarui</a> | 
            <!-- <a href="/api/post/{{ $dataSiswa->id }}">Hapus</a> -->
             
             <form action="/api/post/{{ $dataSiswa->id }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
             </form>
        </td>
    </tr>
</table>