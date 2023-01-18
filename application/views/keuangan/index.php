<link rel="shortcut icon" href="<?= base_url() ?>assets/img/logo.png">
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <?= form_error('proyek', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <!-- DataTables -->
            <div class="card mb-3">
                <div class="card-header">
                    <a href="<?php echo site_url('proyek/add') ?>"><i class="fas fa-plus"></i> Tambah Baru</a>
                </div>
                <div class="card-body">
                    <h5><b>I</b>    Pekerjaan Pengukuran dan Pondasi</h5>
                    <div class="table-responsive">
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NAMA PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $no = 1;
                                foreach ($rab1 as $a) : ?>

                                    <tr>
                                        <th scope="row" width="90"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_pekerjaan']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            Rp<?= number_format ($a['harga_satuan']); ?>
                                        </td>
                                        <td width="200">
                                            Rp<?= $a['volume'] * number_format ($a['harga_satuan']); ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th>Rp<span class="totalForks"><?= $totalrab1['total'] ?></span></th>
                                </tr>
                            </tfoot>
                        </table>
                        <h5><b>II</b> Pekerjaan Pasangan Bata</h5>
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NAMA PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rab2 as $a) : ?>

                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_pekerjaan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['harga_satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume'] * $a['harga_satuan']; ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th><span class="totalForks"><?= $totalrab2['total'] ?></span></th>
                                </tr>
                            </tfoot>
                        </table>
                        <h5><b>III</b> Pekerjaan Atap</h5>
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NAMA PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rab3 as $a) : ?>

                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_pekerjaan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['harga_satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume'] * $a['harga_satuan']; ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th><span class="totalForks"><?= $totalrab3['total'] ?></span></th>
                                </tr>
                            </tfoot>
                        </table>
                        <h5><b>IV</b> Pekerjaan Rangka Plafon Hollow</h5>
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NAMA PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rab4 as $a) : ?>

                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_pekerjaan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['harga_satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume'] * $a['harga_satuan']; ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th><span class="totalForks"><?= $totalrab4['total'] ?></span></th>
                                </tr>
                            </tfoot>
                        </table>
                        <h5><b>V</b> Pekerjaan Lantai 1 : 5</h5>
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NAMA PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rab5 as $a) : ?>

                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_pekerjaan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['harga_satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume'] * $a['harga_satuan']; ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th><span class="totalForks"><?= $totalrab5['total'] ?></span></th>
                                </tr>
                            </tfoot>
                        </table>
                        <h5><b>VI</b> Pekerjaan Pintu dan Jendela ( kusen )</h5>
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NAMA PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rab6 as $a) : ?>

                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_pekerjaan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['harga_satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume'] * $a['harga_satuan']; ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th><span class="totalForks"><?= $totalrab6['total'] ?></span></th>
                                </tr>
                            </tfoot>
                        </table>
                        <h5><b>VII</b> Pekerjaan Pengecatan</h5>
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NAMA PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rab7 as $a) : ?>

                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_pekerjaan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['harga_satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume'] * $a['harga_satuan']; ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th><span class="totalForks"><?= $totalrab7['total'] ?></span></th>
                                </tr>
                            </tfoot>
                        </table>
                        <h5><b>VIII</b> Pekerjaan Penutup Atap</h5>
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NAMA PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rab8 as $a) : ?>

                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_pekerjaan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['harga_satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume'] * $a['harga_satuan']; ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th><span class="totalForks"><?= $totalrab8['total'] ?></span></th>
                                </tr>
                            </tfoot>
                        </table>
                        <h5><b>IX</b> Pekerjaan Beton 1 : 2 : 3</h5>
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NAMA PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rab9 as $a) : ?>

                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_pekerjaan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['harga_satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume'] * $a['harga_satuan']; ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th><span class="totalForks"><?= $totalrab9['total'] ?></span></th>
                                </tr>
                            </tfoot>
                        </table>
                        <h5><b>X</b> Pekerjaan Plesteran 1 : 2 : 10</h5>
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NAMA PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rab10 as $a) : ?>

                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_pekerjaan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['harga_satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume'] * $a['harga_satuan']; ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th><span class="totalForks"><?= $totalrab10['total'] ?></span></th>
                                </tr>
                            </tfoot>
                        </table>
                        <h5><b>XI</b> Pekerjaan Sanitasi</h5>
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NAMA PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rab11 as $a) : ?>

                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_pekerjaan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['harga_satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume'] * $a['harga_satuan']; ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th><span class="totalForks"><?= $totalrab11['total'] ?></span></th>
                                </tr>
                            </tfoot>
                        </table>
                        <h5><b>XII</b> Pekerjaan Alat Penggantung</h5>
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NAMA PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rab12 as $a) : ?>

                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_pekerjaan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['harga_satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume'] * $a['harga_satuan']; ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th><span class="totalForks"><?= $totalrab12['total'] ?></span></th>
                                </tr>
                            </tfoot>
                        </table>
                        <h5><b>XIII</b> Pekerjaan Carport</h5>
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NAMA PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rab13 as $a) : ?>

                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_pekerjaan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['harga_satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume'] * $a['harga_satuan']; ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th><span class="totalForks"><?= $totalrab13['total'] ?></span></th>
                                </tr>
                            </tfoot>
                        </table>
                        <h5><b>XIV</b> Ekektrikal</h5>
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NAMA PEKERJAAN</th>
                                    <th>VOL.</th>
                                    <th>SAT.</th>
                                    <th>HARGA SAT.</th>
                                    <th>JLH. HARGA</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($rab14 as $a) : ?>

                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td width="200">
                                            <?= $a['nama_pekerjaan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume']; ?>
                                        </td>
                                        <td width="90">
                                            <?= $a['satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['harga_satuan']; ?>
                                        </td>
                                        <td width="200">
                                            <?= $a['volume'] * $a['harga_satuan']; ?>
                                        </td>
                                        <!-- <td width="300">
                                            <a href="<?php echo site_url('detailrab/index/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-info"><i class="fas fa-info-circle"></i> Detail</a>
                                            <a href="<?php echo site_url('proyek/edit/' . $proyek['kd_proyek']) ?>" class="btn btn-small text-primary"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('proyek/delete/' . $proyek['kd_proyek']) ?>')" href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                                        </td> -->
                                    </tr>


                                <?php endforeach; ?>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th>Sub.Total I :</th>
                                    <th><span class="totalForks"><?= $totalrab14['total'] ?></span></th>
                                </tr>
                            </tfoot>

                        </table>
                        <table class="table table-hover" id="" width="100%" cellspacing="0">
                            <thead>

                            </thead>
                            <tbody>


                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>


                                    <th>Sub.Total ALL :</th>
                                    <th><span class="totalForks"> <?= $totalraball['total'] ?></span></th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>