<div class="container">
    <div class="row my-5" data-aos="fade-up" data-aos-duration="1000">
        <?php
        foreach ($about as $row) { ?>
            <div class="col-md-4">
                <img class="set-image" src="<?= base_url() ?>assets/images/about/<?= $row->gambar_about; ?>">
            </div>

            <div class="col-md-8">
                <h5><?= $row->judul_about; ?></h5>
                <p>
                    <?= $row->deskripsi_about; ?>
                </p>
            </div>
        <?php  }
        ?>
    </div>
    <div class="row mb-5" data-aos="fade-up" data-aos-duration="1000">

        <div class="d-flex">
            <div class="col-md-4">
                <h5>Lokasi</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7930.606142504684!2d106.87310367822647!3d-6.354799480790667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69edf2e57778c1%3A0xaa9d53d737e4caed!2sBangun%20keraton!5e0!3m2!1sid!2sid!4v1674023898703!5m2!1sid!2sid" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p>Lokasi :</p>
                <p>
                    <i>Jalan Mangga III Rt04 No.2A, RT.3/RW.9, Cibubur, Kec. Ciracas, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13720.</i>
                </p>
            </div>
            <div class="col-md-8">
                <h5>Jenis Paket</h5>
                <table class="table table-bordered">
                    <thead>
                        <tr class="th-warna text-white">
                            <th scope="col">NO</th>
                            <th scope="col">NAMA PAKET</th>
                            <th scope="col">HARGA PAKET</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $no = 1;
                        foreach ($paket as $pkt) { ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $pkt->nama_paket; ?></td>
                                <td><?= "Rp." . number_format($pkt->harga_paket, 0, '.', '.'); ?></td>
                            </tr>
                        <?php }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>