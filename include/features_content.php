<div class="content-wrapper pb-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-table"></i>
                            <span>Features Page</span>
                        </div>
                        <div>
                            <button id="open_modal" type="button" class="btn btn-success m-1"><i class="fa fa-plus"></i> ADD DATA</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="features_table" class="table-responsive"></div>
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
                    <h5 id="form_title"></h5>
                    <button id="close_modal" type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>title</label>
                            <input required id="title" name="title" type="text" class="form-control" placeholder="Enter Your Title">
                        </div>
                        <label>Image</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input required type="file" class="custom-file-input" id="file" name="file">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <div class="mb-2" id="image_file"></div>
                        <div class="form-group">
                            <label>Text</label>
                            <input required id="text" name="text" type="text" class="form-control" placeholder="Enter Your Text">
                        </div>
                        <input type="hidden" id="id" name="id">
                        <input type="hidden" id="action" value="add">
                        <div class="form-group">
                            <button id="form_btn" type="submit" class="btn btn-primary px-5"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>