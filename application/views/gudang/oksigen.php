<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-archive"></i> Gudang
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('beranda'); ?>"><i class="fa fa-home"></i> Beranda</a></li>
            <li class="active">Oksigen</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Daftar Oksigen di Gudang</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th width="5%" class="text-center">No</th>
                                <th width="5%" class="text-center">Kode</th>
                                <th class="text-center">Nama</th>
                                <th width="5%" class="text-center">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=0; foreach ($getoksigen as $oksigen) { $no++; ?>
                            <tr>
                                <td class="text-center"><?php echo $no;?></td>
                                <td><?php echo $oksigen->kode;?></td>
                                <td><?php echo $oksigen->nama;?></td>
                                <td class="text-right"><?php echo $oksigen->total_qty;?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>