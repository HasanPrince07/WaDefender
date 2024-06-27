<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-table"></i>
                            <span>Add Section Data</span>
                        </div>
                        <div>
                            <button id="open_modal" type="button" class="btn btn-success m-1"><i class="fa fa-plus"></i> ADD DATA</button>
                            <button id="all_delete_btn" type="button" class="btn btn-danger m-1"><i class="fa fa-trash"></i> DELETE ALL</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="addsection_table" class="table-responsive"></div>
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
                    <h5 id="addsection_text" class="modal-title"></h5>
                    <button id="close_modal" type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="addsection_form" enctype="multipart/form-data">
                        <div id="addsection_data" class="form-group">
                        </div>
                        <div class="form-group">
                            <label>Section Title</label>
                            <input required id="section_title" name="section_title" type="text" class="form-control" placeholder="Type Section Title">
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