<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Baru</title>
</head>
<body>
<a href="/api/post">Beranda</a>
<hr>
    <form action="/api/post" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="txNama"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="txAlamat"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>