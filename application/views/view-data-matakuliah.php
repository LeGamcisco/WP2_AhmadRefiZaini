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
                    Tampil Data Mata Kuliah
                </th>
            </tr>
            
            <tr>
                <th colspan='3'>
                    <hr>
                </th>
            </tr>
            <tr>
                <th >
                    Kode MTK
                </th>
                <th>:</th>
                <td>
                    <?= $kode;?>
                </td>
            </tr>
            <tr>
                <th >
                    Nama MTK
                </th>
                <th>:</th>
                <td>
                    <?= $nama;?>
                </td>
            </tr>
            <tr>
                <th >
                    SKS
                </th>
                <th>:</th>
                <td>
                    <?= $sks;?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= $this->config->config['base_url'].'matakuliah';?>">Kembali</a>
                </td>
            </tr>
        </table>    
    </center>
</body>
</html>