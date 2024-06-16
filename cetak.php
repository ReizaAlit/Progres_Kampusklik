<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 align ="center" >Daftar Buku Perpustakaan</h1>

    <table border="2" width ="100%" align="center"  cellspacing="10">
        <tr height ="50px" bgcolor ="lightblue" >
            <th width = 50%  >Nama Mahasiswa</th>
            <th width = 50%>Prodi Mahasiswa</th>
        </tr>

        <?php foreach ($query as $data){ ?>
            <tr height ="30px" bgcolor ="lightgrey">
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["prodi"]; ?></td>
            </tr>
        <?php } ?>
    </table>

    <br><br><br>

    <table border ="2" align="center" cellspacing="10" width = "50%">
        <tr bgcolor ="white">
            <th width ="100px" align="center"> <a href="./tambah-buku.php">Tambahkan data buku</a></th>
            <th width ="100px" align="center"> <a href="./index.php">Kembali ke halaman utama</a></th>
        </tr>
    </table>
    
    <br>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>