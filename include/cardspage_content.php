<div class="content-wrapper bg-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h5 id="form_title"></h5>
                <form method="post" id="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>First Title</label>
                        <textarea id="title1" name="title1" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Second Title</label>
                        <textarea id="title2" name="title2" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Third Title</label>
                        <textarea id="title3" name="title3" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label>First Text</label>
                        <textarea id="text1" name="text1" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Second Text</label>
                        <textarea id="text2" name="text2" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Third Text</label>
                        <textarea id="text3" name="text3" rows="2"></textarea>
                    </div>
                    <label class="form-label">Image 1</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                            <input required type="file" class="custom-file-input" id="file1" name="file1">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>
                    <div class="mb-2" id="image_file1"></div>
                    <label class="form-label">Image 2</label>
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