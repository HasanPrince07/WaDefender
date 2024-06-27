<div class="content-wrapper pb-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-table"></i>
                            <span>Bonus Page (Section 1)</span>
                        </div>
                        <div>
                            <button id="open_modal1" type="button" class="btn btn-success m-1"><i class="fa fa-plus"></i> ADD</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="bonus_table1" class="table-responsive"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-wrapper pb-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-table"></i>
                            <span>Bonus Page (Section 2)</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="bonus_table2" class="table-responsive"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-wrapper pb-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-table"></i>
                            <span>Bonus Page (Section 3)</span>
                        </div>
                        <div>
                            <button id="open_modal3" type="button" class="btn btn-success m-1"><i class="fa fa-plus"></i> ADD</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="bonus_table3" class="table-responsive"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-wrapper pb-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-table"></i>
                            <span>Bonus Page (Section 4)</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="bonus_table4" class="table-responsive"></div>
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
                    <h5 id="form_text1" class="modal-title"></h5>
                    <button id="close_modal1" type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="form1" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Bonus Title</label>
                            <input required id="title1" name="title1" type="text" class="form-control" placeholder="Enter Your Bonus Title">
                        </div>
                        <label>Bonus Image</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input required type="file" class="custom-file-input" id="file" name="file">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <div class="mb-2" id="image_file1"></div>
                        <div class="form-group">
                            <label>Bonus Text</label>
                            <input required id="text1" name="text1" type="text" class="form-control" placeholder="Enter Your Bonus Text">
                        </div>
                        <input type="hidden" id="id1" name="id">
                        <input type="hidden" id="action1" value="add1">
                        <div class="form-group">
                            <button id="form_button1" type="submit" class="btn btn-primary px-5"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4">
    <div class="modal fade" id="formemodal3">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="form_text3" class="modal-title"></h5>
                    <button id="close_modal3" type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="form3" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Bonus Title</label>
                            <textarea name="title3" id="title3"></textarea>
                        </div>
                        <input type="hidden" id="id3" name="id">
                        <input type="hidden" id="action3" value="add3">
                        <div class="form-group">
                            <button id="form_button3" type="submit" class="btn btn-primary px-5"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>