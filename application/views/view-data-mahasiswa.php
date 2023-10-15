<html>

<head>
    <title>Tampil Data Diri Mahasiswa</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Diri Mahasiswa
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>NIM</th>
                <th>:</th>
                <td>
                    <?= $nim; ?>
                </td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>
                    <?= $namalengkap; ?>
                </td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td>
                    <?= $programstudi; ?>
                </td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>:</td>
                <td>
                    <?= $semester; ?>
                </td>
            </tr>
            <tr>
                <td>IPK</td>
                <td>:</td>
                <td>
                    <?= $ipk; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('mahasiswa'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
    </center>
</body>
</html