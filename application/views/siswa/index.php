<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-12">
            <?php if(validation_errors()){?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
            </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            <a href="siswa/tambah" type="submit" class="btn btn-primary">Siswa Baru</a>
            <a href="siswa/tambah" type="submit" class="btn btn-primary mb-3"><i class="fas fa-file-alt"></i> Siswa Baru</a>
            <table class="table table-hover">
                <thead>
                    <tr>