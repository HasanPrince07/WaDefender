<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-table"></i>
                            <span>Header Page</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="header_table" class="table-responsive"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4">
    <div class="modal fade" id="formemodal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="header_text" class="modal-title"></h5>
                    <button id="close_modal" type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="header_form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Header Title</label>
                            <textarea class="form-control" name="header_title" id="header_title"></textarea>
                        </div>
                        <input type="hidden" id="id" name="id">
                        <input type="hidden" id="action" value="add">
                        <div class="form-group">
                            <button id="form_button" type="submit" class="btn btn-primary px-5"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>