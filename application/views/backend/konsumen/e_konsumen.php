<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div class="container-fluid">
            <h1 class="h3 mb-2 text-gray-800"><?= $judul;?></h1>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <form method="post" action="<?= base_url()?>konsumen/update">
                        <div class="form-group">
                            <input type="text" name="kode_konsumen" value="<?= $konsumen['kode_konsumen'];?>" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <input type="text" name="nama_konsumen" value="<?= $konsumen['nama_konsumen']?>" class="form-control" placeholder="Input Nama Konsumen" required>
                        </div>

                        <div class="form-group">
                            <textarea name="alamat_konsumen" cols="30" rows="5" class="form-control" placeholder="Input Alamat" required><?= $konsumen['alamat_konsumen']?></textarea>
                        </div>

                        <div class="form-group">
                            <input type="text" name="no_telp" value="<?= $konsumen['no_telp']?>" class="form-control" placeholder="Input No. Telpon" required>
                        </div>

                        <div class="form-group">
                           <button type="submit" class="btn btn-primary">Update</button>
                           <a href="<?= base_url()?>konsumen" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>