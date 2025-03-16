<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan Makanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }
        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
            text-align: left;
        }
        h2 {
            color: #333;
        }
        label {
            font-weight: bold;
        }
        input {
            width: 50px;
            margin: 5px;
        }
        .total {
            font-size: 18px;
            font-weight: bold;
            color: #d9534f;
        }
    </style>
    <script>
        function hitungTotal() {
            let harga = {
                nasi_goreng: 10000,
                ayam_goreng: 12000,
                es_teh: 2000,
                kopi: 3000
            };

            let total = (document.getElementById("nasi_goreng").value * harga.nasi_goreng) +
                        (document.getElementById("ayam_goreng").value * harga.ayam_goreng) +
                        (document.getElementById("es_teh").value * harga.es_teh) +
                        (document.getElementById("kopi").value * harga.kopi);
            
            document.getElementById("total").innerText = "Total Harga: Rp. " + total.toLocaleString("id-ID");
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Form Pemesanan Makanan</h2>
        <form>
            <label>Nasi Goreng (Rp. 10.000): </label>
            <input type="number" id="nasi_goreng" value="0" min="0" oninput="hitungTotal()"><br>
            
            <label>Ayam Goreng (Rp. 12.000): </label>
            <input type="number" id="ayam_goreng" value="0" min="0" oninput="hitungTotal()"><br>
            
            <label>Es Teh (Rp. 2.000): </label>
            <input type="number" id="es_teh" value="0" min="0" oninput="hitungTotal()"><br>
            
            <label>Kopi (Rp. 3.000): </label>
            <input type="number" id="kopi" value="0" min="0" oninput="hitungTotal()"><br>
            
            <h3 class="total" id="total">Total Harga: Rp. 0</h3>
        </form>
    </div>
</body>
</html>
