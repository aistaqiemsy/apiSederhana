<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <form action="/post/perbarui/{{ $dataEdit->id }}" method="get">
        @csrf
        <table>
            <tr>
                <td>ID</td>
                <td><input type="number" name="editID" disabled value="{{ $dataEdit->id }}"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="editNama" value="{{ $dataEdit->nama }}"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="editAlamat" value="{{ $dataEdit->alamat }}"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Perbarui Data"></td>
            </tr>
        </table>
    </form>
</body>
</html>