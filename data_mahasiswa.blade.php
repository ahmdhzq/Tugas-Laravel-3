<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <!-- //Tambahkan file baru di
    //resources/views/data_mahasiswa.php -->

    <h3>Data Mahasiswa</h3>
    
    <table border=1>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>

        <tr>
            <td>1</td>
            <td>{{ $mhs1 }}</td>
            <td>{{ $asal1 }}</td>
        </tr>

        <tr>
            <td>2</td>
            <td>{{ $mhs2 }}</td>
            <td>{{ $asal2 }}</td>
        </tr>

        <tr>
            <td>3</td>
            <td>{{ $mhs3 }}</td>
            <td>{{ $asal3 }}</td>
        </tr>

        <tr>
            <td>4</td>
            <td>{{ $mhs4 }}</td>
            <td>{{ $asal4 }}</td>
        </tr>

        <tr>
            <td>5</td>
            <td>{{ $mhs5 }}</td>
            <td>{{ $asal5 }}</td>
        </tr>
    </table>
    
    <!-- <ol> -->

    <!-- <li>Mahasiswa 1: {{ $mhs1 }}, Asal: {{ $asal1 }}</li>
    <li>Mahasiswa 2: {{ $mhs2 }}, Asal: {{ $asal2 }}</li>
    </ol> -->

</body>
</html>
