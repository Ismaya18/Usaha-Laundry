<form method="post" action="<?= base_url()?>cek_laundry">
    <div class="container">
        <div class="row my-5">
            <div class="col-md-10">
                <input type="text" name="nama_konsumen" class="form-control" placeholder="Silahkan Masukkan Nama Anda !">
            </div>

            <div class="col-md-2">
                <button type="submit" class="btn btn-warning">Cek Laundry</button>
            </div>
        </div>
    </div>
</form>

<div class="container">
    <table class="table table-bordered table-striped mb-5">
        <thead>
            <tr>
                <th class="bg-danger text-light" style="text-align: center;">Nama Konsumen</th>
                <th class="bg-danger text-light" style="text-align: center;">Tanggal Masuk</th>
                <th class="bg-danger text-light" style="text-align: center;">Paket</th>
                <th class="bg-danger text-light" style="text-align: center;">Total</th>
                <th class="bg-danger text-light" style="text-align: center;">Status</th>
                <th class="bg-danger text-light" style="text-align: center;">Opsi</th>
            </tr>
          
        </thead>

        <tbody>

            <?php
                if (!empty($data)) {
                    foreach ($data as $row) {?>
                        <tr>
                            <td style="text-align: center;"><?= $row->nama_konsumen;?></ style="text-align: center;">
                            <td style="text-align: center;"><?= $row->tgl_masuk;?></td>
                            <td style="text-align: center;"><?= $row->nama_paket;?></td>
                            <td style="text-align: center;"><?= "Rp.". number_format($row->grand_total,0,'.','.');?></td>
                            <td style="text-align: center;"><?= $row->status;?></td>
                            <td>
                                <a href="<?= base_url()?>transaksi/detail/<?= $row->kode_transaksi?>" class="btn btn-warning btn-sm">Detail</a>
                            </td>
                        </tr>
                <?php   }
                }else{?>
                    <tr>
                        <td class="bg-light">Tidak ada data</td>
                    </tr>
                <?php }
            ?>
        </tbody>
    </table>
</div>