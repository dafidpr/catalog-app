<div class="card mb-3 shadow">
    <div class="card-header">
        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#defaultModal"><i class="fe fe-plus"></i> Add Data</a>
    </div>
    <div class="card-body">
        <?php if(isset($this->session->message)) : ?>
            <div class="alert alert-success">
                <?=$this->session->message;?>
                <button class="close" data-dismiss="alert">&times</button>
            </div>
        <?php endif;?>
        <div class="table-responsive">
            <table class="table table-bordered table-hovered datatable" width="100%">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th>Nama Kendaraan</th>
                        <th>No. Polisi</th>
                        <th>Nama Angsuran</th>
                        <th>Periode Angsuran</th>
                        <th>Nominal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1?>
                    <?php foreach ($collection as $val){ ?>
                    <tr>
                        <td><?=$i++?></td>
                        <td><?=$val->name?></td>
                        <td><?=$val->police_number?></td>
                        <td><?=$val->angsuran?></td>
                        <td>x <?=$val->periode?> Bulan</td>
                        <td>Rp. <?= number_format($val->nominal, 0, ',', '.')?></td>
                        <td>
                            <a href="#" onclick="deleteProduct('product/angsuran_delete/', '<?=$val->id?>')" class="text-decoration-none"><i class="fe fe-trash-2 text-danger"></i></a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
$(function(){
    $('.datatable').DataTable()
})
</script>
<?php include 'form_angsuran.php'?>