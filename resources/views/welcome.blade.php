<?php
    session_start();
    if (isset($_SESSION['namaPengguna'])) {
        echo "Sudah log in!";
    } else {
        ?>
            <form action="/pengguna/login" method="get">
            <table align="center">
                <tr>
                    <td>Nama Pengguna</td>
                    <td><input type="text" name="namaPengguna"></td>
                </tr>
                <tr>
                    <td>Kata Sandi</td>
                    <td><input type="text" name="sandiPengguna"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btMasuk" value="Masuk"></td>
                </tr>
            </table>
            </form>
        <?php
    }
?>

