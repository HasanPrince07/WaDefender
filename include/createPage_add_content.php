<div class="container bg-white my-2">
    <div class="row">
        <div class="col-md-12">
            <form method="post" id="createPage_form" enctype="multipart/form-data">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <h3 class="text-center mt-2">CreatePage Form</h3>
                    </div>
                    <div class="col-md-1">
                        <button id="back_btn" class="btn btn-dark">Back</button>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="form-group col-md-6">
                        <label>Page Title</label>
                        <input required id="page_title" name="page_title" type="text" class="form-control" placeholder="Enter Your Page Title">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Page Sub Title</label>
                        <input required id="page_sub_title" name="page_sub_title" type="text" class="form-control" placeholder="Enter Your Page Sub Title">
                    </div>
                </div>
                <div class="form-group col-md-12">
                    <label>Page Meta Tag</label>
                    <textarea required id="page_meta_tag" name="page_meta_tag" class="form-control" rows="3" placeholder="Enter Your Page Meta Tag"></textarea>
                </div>
                <div class="form-group col-md-12">
                    <label>Page Keyword</label>
                    <textarea required id="page_keyword" name="page_keyword" class="form-control" rows="3" placeholder="Enter Your Page Keyword"></textarea>
                </div>
                <div class="form-group col-md-12">
                    <label>Page SEO Description</label>
                    <textarea required id="page_seo_description" name="page_seo_description" class="form-control" rows="3" placeholder="Enter Your Page SEO Description"></textarea>
                </div>
                <div class="d-flex">
                    <div class="form-group col-md-6">
                        <label>Product Name</label>
                        <input required id="product_name" name="product_name" type="text" class="form-control" placeholder="Enter Your Product Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Background Color</label>
                        <input required id="background_color" name="background_color" type="text" class="form-control" placeholder="Enter Your Background Color">
                    </div>
                </div>
                <div class="d-flex">
                    <div class="form-group col-md-6">
                        <label>Text Color</label>
                        <input required id="text_color" name="text_color" type="text" class="form-control" placeholder="Enter Your Text Color">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Frist Color</label>
                        <input required id="first_color" name="first_color" type="text" class="form-control" placeholder="Enter Your First Color">
                    </div>
                </div>
                <div class="d-flex">
                    <div class="form-group col-md-6">
                        <label>Second Color</label>
                        <input required id="second_color" name="second_color" type="text" class="form-control" placeholder="Enter Your Second Color">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Third Color</label>
                        <input required id="third_color" name="third_color" type="text" class="form-control" placeholder="Enter Your Third Color">
                    </div>
                </div>
                <div class="input-group mb-3 col-md-12">
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
                <input type="hidden" id="action" value="add">
                <div class="form-group col-md-12">
                    <button id="form_btn" type="submit" class="btn btn-primary px-5">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>