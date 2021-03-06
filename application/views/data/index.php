<css>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
</css>
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <div class="header-panel">
                    <form class="filter-table form-inline hidden-xs">
                        <div class="form-group">
                            <label class="control-label">Tgl Ganti</label>
                            <input name="from_tgl" type="text" class="datepicker from_tgl form-control input-sm">
                        </div>
                        <div class="form-group">
                            <label class="control-label"> s/d</label>
                            <input name="to_tgl" type="text" class="datepicker to_tgl form-control input-sm">
                        </div>
                        <div class="form-group">
                            <button id="refresh_filter" class="refresh_filter_data btn btn-primary btn-sm" type="button">Refresh</button>
                        </div>
                    </form>
                    <a href="<?php route('data/create'); ?>" class="btn btn-success btn-sm pull-right" style="margin-bottom: 0px"><i class="fa fa-plus-circle"></i> Input Baru</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="x_content" style="display: block;">
                <table id="table_data" class="table table-striped table-bordered table-condensed dt-responsive nowrap" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Action</th>
                            <th>Nama Vendor</th>
                            <th>Tanggal Ganti</th>
                            <th>ID Pelanggan</th>
                            <th>No. Telpon Pel.</th>
                            <th>SN Meter Baru</th>
                            <th>Merk Meter Lama</th>
                            <th>No Seri Meter Lama</th>
                            <th>Tahun Meter Lama</th>
                            <th>Stan Bongkar</th>
                            <th>Nomer Segel</th>
                            <th>Pelaksana</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<js>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.0/js/responsive.bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="<?php assets('js/data.js') ?>"></script>
</js>