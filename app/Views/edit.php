<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah | Catatan</title>
</head>

<body>
    <h1>Ubah Data</h1>
    <table>
        <form action="/catatan/update/<?= $catatan['id']; ?>" method="post">
            <tr>
                <td>
                    Judul:
                </td>
                <td>
                    <input type="text" name="judul" value="<?= $catatan['judul']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Isi:
                </td>
                <td>
                    <textarea name="isi" id="isi" cols="30" rows="5" placeholder="Masukkan Isi"><?= $catatan['isi']; ?></textarea>
                </td>
            </tr>



    </table>
    <input type="submit" value="Ubah">


</body>

</html>