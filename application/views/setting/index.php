<div class="card mb-3 shadow">
    <div class="card-header">
        <a href="<?= base_url(); ?>settings/add" class="btn btn-primary"><i class="fe fe-plus"></i> Add Data</a>
    </div>
    <div class="card-body">
        <?php if (isset($this->session->message)) : ?>
            <div class="alert alert-success">
                <?= $this->session->message; ?>
                <button class="close" data-dismiss="alert">&times</button>
            </div>
        <?php endif; ?>
        <div class="table-responsive">
            <table class="table table-bordered table-hovered" id="DataTable" data-url="settings/loadData" width="100%">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th>Groups</th>
                        <th>Meta Key</th>
                        <th>Meta Value</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>