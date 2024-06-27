<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-table"></i>
                            <span>Create Page</span>
                        </div>
                        <div>
                            <button id="confirm-btn-alert" type="button" class="btn btn-danger m-1"><i class="fa fa-trash"></i> DELETE</button>
                            <button id="all_delete_btn" type="button" class="btn btn-danger m-1"><i class="fa fa-trash"></i>ALL DELETE</button>
                            <button id="open_modal" type="button" class="btn btn-success m-1"><i class="fa fa-plus"></i> ADD</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="createPage_table" class="table-responsive">
                        </div>
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
                    <h5 id="createPage_text" class="modal-title"></h5>
                    <button id="close_modal" type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="createPage_form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Page Title</label>
                            <input required id="page_title" name="page_title" type="text" class="form-control" placeholder="Enter Your Page Title">
                        </div>
                        <div class="form-group">
                            <label>Page Sub Title</label>
                            <input required id="page_sub_title" name="page_sub_title" type="text" class="form-control" placeholder="Enter Your Page Sub Title">
                        </div>
                        <div class="form-group">
                            <label>Page Meta Tag</label>
                            <textarea required id="page_meta_tag" name="page_meta_tag" class="form-control" rows="3" placeholder="Enter Your Page Meta Tag"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Page Keyword</label>
                            <textarea required id="page_keyword" name="page_keyword" class="form-control" rows="3" placeholder="Enter Your Page Keyword"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Page SEO Description</label>
                            <textarea required id="page_seo_description" name="page_seo_description" class="form-control" rows="3" placeholder="Enter Your Page SEO Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Product Name</label>
                            <input required id="product_name" name="product_name" type="text" class="form-control" placeholder="Enter Your Product Name">
                        </div>
                        <div class="form-group">
                            <label>Background Color</label>
                            <input required id="background_color" name="background_color" type="text" class="form-control" placeholder="Enter Your Background Color">
                        </div>
                        <div class="form-group">
                            <label>Text Color</label>
                            <input required id="text_color" name="text_color" type="text" class="form-control" placeholder="Enter Your Text Color">
                        </div>
                        <div class="form-group">
                            <label>Frist Color</label>
                            <input required id="first_color" name="first_color" type="text" class="form-control" placeholder="Enter Your First Color">
                        </div>
                        <div class="form-group">
                            <label>Second Color</label>
                            <input required id="second_color" name="second_color" type="text" class="form-control" placeholder="Enter Your Second Color">
                        </div>
                        <div class="form-group">
                            <label>Third Color</label>
                            <input required id="third_color" name="third_color" type="text" class="form-control" placeholder="Enter Your Third Color">
                        </div>
                        <!-- <div class="form-group mb-0">
                            <label>Icon</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="file" name="file">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                            </div>
                        </div> -->
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
                        <!-- <div class="form-group">
                            <label>Product Status</label>
                            <select class="form-control" name="product_status" id="product_status">
                                <option value="paid">Paid</option>
                                <option value="free">Free</option>
                            </select>
                        </div> -->
                        <!-- <div class="form-group">
                            <label>Page Status</label>
                            <select class="form-control" name="page_status" id="page_status">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div> -->
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