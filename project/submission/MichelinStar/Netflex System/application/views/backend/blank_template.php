<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Basic Data Table</h4>
                <p class="text-muted font-14 mb-4">
                    DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
                    function:
                    <code>$().DataTable();</code>. KeyTable provides Excel like cell navigation on any table. Events (focus, blur, action etc) can be assigned to individual
                    cells, columns, rows or all cells.
                </p>

                <div class="form-group mb-3">
                    <label for="simpleinput1">Website Name</label>
                    <input type="text" class="form-control" id = "simpleinput1" name="site_name" value="<?php echo $site_name;?>">
                </div>
                
                <table id="basic-datatable" class="table dt-responsive nowrap" width="100%">

                </table>
            </div>
        </div>
    </div>
</div>
