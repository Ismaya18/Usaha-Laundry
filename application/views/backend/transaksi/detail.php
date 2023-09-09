<html>
    <head>
        <title>Detail Transaksi</title>
        <style>
            td{
                font-size: 12px;
                font-family: sans-serif;
            }

            h3{
                font-size: 16px;
            }

            hr{
                border: 0;
                border-top: 2px solid #800000;
            }

            .tabel{
                border: 1px solid black;
                border-collapse: collapse;
            }
            th{
                font-family: sans-serif;
                font-size: 12px;
            }
        </style>
    </head>

    <body>
    
        <table>
            <tr>
                <td width="400"><h3>Bunda Laundry</h3></td>
                <td><h3>Invoice</h3></td>
            </tr>

            <tr>
                <td>Alamat : Jalan Cibubur 7 Mangga III No.2A Jakarta Timur</td>
            </tr>

            <tr>
                <td>Telp. : +6285959548378</td>
            </tr>

            <tr>
                <td>Email. : charissaicul@gmail.com</td>
            </tr>
        </table>

        <hr><br>

        <table>
            <tr>
                <td width="80" style="font-weight: bold; font-size: 13px;">Konsumen</td>
                <td width="250"><?= $transaksi['nama_konsumen'];?></td>

                <td width="80" style="font-weight: bold; font-size: 13px;">Kode Transaksi</td>
                <td><?= $transaksi['kode_transaksi'];?></td>
            </tr>

            <tr>
                <td width="80"></td>
                <td width="250"><?= $transaksi['alamat_konsumen'];?></td>

                <td width="80" style="font-weight: bold; font-size: 13px;">Tanggal Masuk</td>
                <td><?= $transaksi['tgl_masuk'];?></td>
            </tr>

            <tr>
                <td width="80"></td>
                <td width="250"><?= $transaksi['no_telp'];?></td>
                
                <?php
                    if ($transaksi['tgl_ambil'] !=0) {?>
                        <td width="80" style="font-weight: bold; font-size: 13px;">Tanggal Ambil</td>
                        <td><?= $transaksi['tgl_ambil'];?></td>
                    <?php }else{?>
                        <td width="80" style="font-weight: bold; font-size: 13px;">Tanggal Ambil</td>
                        <td style="color: red;">-</td>
                    <?php   }
                ?>
            </tr>
        </table> <br><br>

        <table width="500" class="tabel">
            <tr>
                <th class="tabel">Paket Laundry</th>
                <th class="tabel">Berat / Kg</th>
                <th class="tabel">Harga</th>
                <th class="tabel">Sub Total</th>
            </tr>

            <tr>
                <td class="tabel" style="text-align: center;"><?= $transaksi['nama_paket'];?></td>
                <td class="tabel" style="text-align: center;"><?= $transaksi['berat'];?></td>
                <td class="tabel" style="text-align: center;"><?= "Rp. " .number_format($transaksi['harga_paket'],0,'.','.');?></td>
                <td class="tabel" style="text-align: center;"><?= "Rp. " .number_format($transaksi['grand_total'],0,'.','.');?></td>
            </tr>

            <tr>
                <td class="tabel" colspan="3" style="text-align: center; font-weight: bold; font-size: 14px;">Grand Total</td>
                <td class="tabel" style="text-align: center; font-weight: bold; font-size: 14px;"><?= "Rp. " .number_format($transaksi['grand_total'],0,'.','.');?></td>
        </table> <br><br>

        <table>
            <tr>
                <td style="font-weight: bold; font-size: 15px;">Keterangan</td>
            </tr>

            <tr>
                <td>1. Pengambilan cucian harus membawa nota</td>
            </tr>

            <tr>
                <td>2. Cuci luntur bukan tanggung jawab kami</td>
            </tr>

            <tr>
                <td>3. Hitung dan periksa sebelum pergi</td>
            </tr>
            
            <tr>
                <td>4. Klaim kekurangan/kehilangan cucian setelah meninggalkan laundry tidak dilayani</td>
            </tr>
        </table>

    </body>
</html>