<div class="content-wrapper pb-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-table"></i>
                            <span>Video Page (Section 1)</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="video_table1" class="table-responsive"></div>
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
                            <span>Video Page (Section 2)</span>
                        </div>
                        <div>
                            <button id="open_modal2" type="button" class="btn btn-success m-1"><i class="fa fa-plus"></i> ADD</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="video_table2" class="table-responsive"></div>
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
                            <span>Video Page (Section 3)</span>
                        </div>
                        <div>
                            <button id="open_modal3" type="button" class="btn btn-success m-1"><i class="fa fa-plus"></i> ADD</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="video_table3" class="table-responsive"></div>
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
                            <span>Video Page (Section 4)</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="video_table4" class="table-responsive"></div>
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
                            <span>Video Page (Section 5)</span>
                        </div>
                        <div>
                            <button id="open_modal5" type="button" class="btn btn-success m-1"><i class="fa fa-plus"></i> ADD</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="video_table5" class="table-responsive"></div>
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
                            <span>Video Page (Section 6)</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="video_table6" class="table-responsive"></div>
                    </div>
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
                    <h5 id="form_text2" class="modal-title"></h5>
                    <button id="close_modal2" type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="form2" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input required type="file" class="custom-file-input" id="file2" name="file2">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <div class="mb-2" id="image_file2"></div>
                        <input type="hidden" id="id2" name="id">
                        <input type="hidden" id="action2" value="add2">
                        <div class="form-group">
                            <button id="form_button2" type="submit" class="btn btn-primary px-5"></button>
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
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input required type="file" class="custom-file-input" id="file3" name="file3">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <div class="mb-2" id="image_file3"></div>
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

<div class="col-lg-4">
    <div class="modal fade" id="formemodal4">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="form_text4" class="modal-title"></h5>
                    <button id="close_modal4" type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="form4" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Offer Text</label>
                            <input required id="otext4" name="otext4" type="text" class="form-control" placeholder="Enter Your Offer Text">
                        </div>
                        <div class="form-group">
                            <label>Button Text</label>
                            <input required id="btext4" name="btext4" type="text" class="form-control" placeholder="Enter Your  Button Text">
                        </div>
                        <div class="form-group">
                            <label>Text</label>
                            <input required id="text4" name="text4" type="text" class="form-control" placeholder="Enter Your Text">
                        </div>
                        <div class="form-group">
                            <label>Heading Text</label>
                            <input required id="htext4" name="htext4" type="text" class="form-control" placeholder="Enter Your Heading Text">
                        </div>
                        <input type="hidden" id="id4" name="id">
                        <input type="hidden" id="action4" value="add4">
                        <div class="form-group">
                            <button id="form_button4" type="submit" class="btn btn-primary px-5"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-4">
    <div class="modal fade" id="formemodal5">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="form_text5" class="modal-title"></h5>
                    <button id="close_modal5" type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="form5" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input required type="file" class="custom-file-input" id="file5" name="file5">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <div class="mb-2" id="image_file5"></div>
                        <input type="hidden" id="id5" name="id">
                        <input type="hidden" id="action5" value="add5">
                        <div class="form-group">
                            <button id="form_button5" type="submit" class="btn btn-primary px-5"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>