<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Catatan</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid #dddddd;
            vertical-align: midle;
            padding: 15px;
        }
    </style>
</head>

<body>
    <h1>Catatan</h1>

    <a href="/catatan/tambah">
        <button type="button">
            Tambah Catatan
        </button>
    </a>
    <br><br>
    <table>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($catatan as $c) : ?>
            <tr>
                <td><?php echo $i; $i++; ?></td>
                <td><?= $c['judul']; ?></td>
                <td><?= $c['isi']; ?></td>
                <td><?= $c['created_at']; ?></td>
                <td><?= $c['updated_at']; ?></td>
                <td>
                    <a href="/catatan/edit/<?= $c['id']; ?>">
                        <button type="button" class="btn ">
                            Edit
                        </button>
                    </a>

                    <a href="/catatan/hapus/<?= $c['id']; ?>">
                        <button type="button" class="btn ">
                            Hapus
                        </button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>