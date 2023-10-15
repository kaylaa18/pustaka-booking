<html>
<head>
    <title>Form Input Data Diri Mahasiswa</title>
</head>
<body>
    <center>
        <form action="<?= base_url('mahasiswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Diri Mahasiswa
                    </th>
                </tr>
                 <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nim" id="nim">
                    </td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="namalengkap" id="namalengkap">
                    </td>
                </tr>
                <tr>
                    <th>Program Studi</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="programstudi" id="programstudi">
                    </td>
                </tr>
                <tr>
                    <th>Semester</th>
                    <td>:</td>
                    <td>
                        <select name="semester" id="semester">
                            <option value="">Pilih Semester</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>IPK</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="ipk" id="ipk">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html