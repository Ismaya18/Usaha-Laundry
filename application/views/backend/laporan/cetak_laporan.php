<html>
    <head>
        <title></title>
        <style>
            th{
                font-size: 14px;
                font-family: sans-serif;
                background: lightblue;
            }
        </style>
    </head>

    <body>
        
        <table width="750" border="0">
            <tr>
                <td style="text-align: center; font-size: 24px; font-weight: bold; font-family: sans-serif;">Laporan Transaksi</td>
            </tr>
        </table>

        <table width="750" border="0">
            <tr>
                <td style="text-align: center; font-size: 16px; font-family: sans-serif;">Dari Tanggal <?= mediumdate_indo($this->session->userdata('tanggal_mulai'));?> Sampai Tanggal <?= mediumdate_indo($this->session->userdata('tanggal_akhir'));?></td>
            </tr>
        </table><br><br>

        <table width="750" border="1">
            <tr>
                <th>Tanggal Masuk</th>
                <th>Kode Transaksi</th>
                <th>Konsumen</th>
                <th>Paket</th>
                <th>Berat (Kg)</th>
                <th>Grand Total</th>
                <th>Status</th>
            </tr>

            <?php
                foreach ($laporan as $row) {
                    $tanggal_masuk = $row->tgl_masuk;
                    $tanggal = substr($tanggal_masuk,0,10);
                    $waktu = substr($tanggal_masuk,11,8);
                    ?>
                    <tr>
                        <td style="text-align: center;"><?= mediumdate_indo($tanggal);?> <?= $waktu;?></td>
                        <td style="text-align: center;"><?= $row->kode_transaksi;?></td>
                        <td style="text-align: center;"><?= $row->nama_konsumen;?></td>
                        <td style="text-align: center;"><?= $row->nama_paket;?></td>
                        <td style="text-align: center;"><?= $row->berat;?></td>
                        <td style="text-align: center;"><?="Rp. ". number_format($row->grand_total,0,'.','.');?></td>
                        <td style="text-align: center;"><?= $row->status;?></td>
                    </tr>
               <?php }
            ?>
        </table>

    </body>
</html>