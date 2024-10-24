<?php include 'Data.php' ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pesanan</title>
    <style>
        body {
            font-family: Helvetica;
            background-color: transparent;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border-radius: 8px solid black;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h3 {
            text-align: center;
            color: #333;
        }
        input[type="text"], input[type="email"], input[type="number"] {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #000;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: lightblue;
            color: white;
            border: none;
            padding: 10px;
            width: 94%;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: grey;
        }
        .output {
            margin-top: 20px;
            padding: 15px;
            background-color: transparent;
            border-radius: 4px;
        }
        table {
            width: 95%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: transparent;
        }
    </style>
</head>
<body>

<div class="container">
    <form method="POST" action="">     
        <h3>Data Pesanan</h3>     
        Nama: <input type="text" name="namaCustomer" required><br>     
        Alamat: <input type="text" name="alamat" required><br>     
        Telepon: <input type="text" name="telepon" required><br>     
        Email: <input type="email" name="email" required><br>     
        Jumlah Pembelian: <input type="number" name="pembelian" required><br><br>    
        <input type="submit" value="Simpan Data Customer"> 
    </form>

    <?php if (!empty($outputCustomer)): ?> 
        <div class="output">
            <h3>Detail Pesanan</h3>
            <table>
                <?php foreach ($outputCustomer as $key => $value): ?>
                    <tr>
                        <td><?php echo $key; ?></td>
                        <td><?php echo $value; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    <?php endif; ?>
</div>

</body>
</html>