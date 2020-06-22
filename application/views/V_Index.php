<!DOCTYPE html>
<html>

<head>
    <title>Import Excel Data Administratif</title>

    <style type="text/css">
        table {
            border-collapse: collapse;
        }

        table,
        td,
        th {
            border: 1px solid black;
        }

        form {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Provinsi</th>
                <th>Kabupaten</th>
                <th>Kecamatan</th>
                <th>Kode</th>
                <th>Kel/Desa</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0;
            foreach ($data as $key => $value) : $no++; ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $value['prov'] ?></td>
                    <td><?= $value['kab'] ?></td>
                    <td><?= $value['kec'] ?></td>
                    <td><?= $value['kode'] ?></td>
                    <td><?= $value['nama']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <form method="post" action="<?php echo base_url('Ups/importExcel') ?>" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit">Submit</button>
    </form>
</body>

</html>