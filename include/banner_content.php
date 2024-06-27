<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-table"></i>
                            <span>Banner Page (Section 1)</span>
                        </div>
                        <div>
                            <button id="open_modal1" type="button" class="btn btn-success m-1"><i class="fa fa-plus"></i> ADD DATA</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="banner_table1" class="table-responsive"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-wrapper py-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-table"></i>
                            <span>Banner Page (Section 2)</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="banner_table2" class="table-responsive"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4">
    <div class="modal fade" id="formemodal1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="form_title1"></h5>
                    <button id="close_modal1" type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="form1" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>icon</label>
                            <input required id="icon" name="icon" type="text" class="form-control" placeholder="Enter Your Icon">
                        </div>
                        <div class="form-group">
                            <label>icon text</label>
                            <input required id="icon_text" name="icon_text" type="text" class="form-control" placeholder="Enter Your Icon Text">
                        </div>
                        <input type="hidden" id="id" name="id">
                        <input type="hidden" id="action1" value="add1">
                        <div class="form-group">
                            <button id="form_btn1" type="submit" class="btn btn-primary px-5"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4">
    <div class="modal fade" id="formemodal2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="form_title2"></h5>
                    <button id="close_modal2" type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="form2" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Main Title</label>
                            <input required id="main_title" name="main_title" type="text" class="form-control" placeholder="Enter Your Main Title">
                        </div>
                        <div class="form-group">
                            <label>Title</label>
                            <input required id="title" name="title" type="text" class="form-control" placeholder="Enter Your Title">
                        </div>
                        <div class="form-group">
                            <label>Button Text</label>
                            <input required id="btn_text" name="btn_text" type="text" class="form-control" placeholder="Enter Your Button Text">
                        </div>
                        <div class="form-group">
                            <label>Offer Text</label>
                            <input required id="offer_text" name="offer_text" type="text" class="form-control" placeholder="Enter Your Offer Text">
                        </div>
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
                        <input type="hidden" id="id" name="id">
                        <input type="hidden" id="action2" value="add2">
                        <div class="form-group">
                            <button id="form_btn2" type="submit" class="btn btn-primary px-5"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>