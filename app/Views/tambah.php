<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah | Catatan</title>
</head>

<body>
    <h1>Tambah Data</h1>
    <table>
        <form action="/catatan/save" method="post">
            <tr>
                <td>
                    Judul:
                </td>
                <td>
                    <input type="text" name="judul" placeholder="Masukkan Judul">
                </td>
            </tr>
            <tr>
                <td>
                    Isi:
                </td>
                <td>
                    <textarea name="isi" id="isi" cols="30" rows="5" placeholder="Masukkan Isi"></textarea>
                </td>
            </tr>



    </table>
    <input type="submit" value="Tambah">


</body>

</html>