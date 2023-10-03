<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Matakuliah</title>
</head>
<body>

    <center>        
        <table>
            <tr>
                <th colspan='3'>
                    Tampil Data Mahasiswa
                </th>
            </tr>
            
            <tr>
                <th colspan='3'>
                    <hr>
                </th>
            </tr>
            <tr>
                <th >
                    NIM
                </th>
                <th>:</th>
                <td>
                    <?= $nim;?>
                </td>
            </tr>
            <tr>
                <th >
                    Nama Lengkap
                </th>
                <th>:</th>
                <td>
                    <?= $nama;?>
                </td>
            </tr>
            <tr>
                <th >
                    Program Studi
                </th>
                <th>:</th>
                <td>
                    <?= $prodi;?>
                </td>
            </tr>
            <tr>
                <th >
                    Semester
                </th>
                <th>:</th>
                <td>
                    <?= $semester;?>
                </td>
            </tr>
            <tr>
                <th >
                    IPK
                </th>
                <th>:</th>
                <td>
                    <?= $ipk;?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= $this->config->config['base_url'].'mahasiswa';?>">Kembali</a>
                </td>
            </tr>
        </table>    
    </center>
</body>
</html>