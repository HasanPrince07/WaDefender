<div class="content-wrapper pb-1">
    <form id="pagedata_form" method="post" enctype="multipart/form-data">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 p-2">
                    <div style="border-top: 2px solid purple;" class="bg-white py-2">
                        <h5 class="fw-bold px-3">PAGE INFORMATION</h5>
                        <div class="form-group col-md-12">
                            <label>Page Name</label>
                            <input required id="page_name" name="page_name" type="text" class="form-control" placeholder="Enter Page Name">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Tagline</label>
                            <input required id="tagline" name="tagline" type="text" class="form-control" placeholder="Enter Tagline">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Short Description</label>
                            <textarea id="short_description" name="short_description" rows="4" placeholder="Enter Your Short Description"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Long Description</label>
                            <textarea id="long_description" name="long_description" rows="4" placeholder="Enter Your Long Description"></textarea>
                        </div>
                        <label class="form-label mx-2" for="">Thumbnail Image</label>
                        <div class="input-group mb-3 col-md-12">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file" name="file">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                        <div class="m-3" id="image_file"></div>
                        <!-- <div class="form-group col-md-12">
                            <label>You Tube URL</label>
                            <input required id="youtube_url" name="youtube_url" type="text" class="form-control" placeholder="Enter You Tube URL">
                        </div> -->
                    </div>

                    <div style="border-top: 2px solid purple;" class="bg-white py-2 mt-4">
                        <h5 class="fw-bold px-3">PAGE STATUS AND ACTION</h5>
                        <div class="d-flex">
                            <div class="form-group col-md-6">
                                <label>Lead Generate</label>
                                <select class="form-control" name="lead_generate" id="lead_generate">
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Page Status</label>
                                <select class="form-control" name="page_status" id="page_status">
                                    <option value="public">public</option>
                                    <option value="private">private</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="form-group col-md-6">
                                <label>Button Label</label>
                                <input required id="button_label" name="button_label" type="text" class="form-control" placeholder="#">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Button Url</label>
                                <input required id="button_url" name="button_url" type="text" class="form-control" placeholder="#">
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Button Success Url</label>
                            <input required id="button_success_url" name="button_success_url" type="text" class="form-control" placeholder="#">
                        </div>
                    </div>

                    <div style="border-top: 2px solid purple;" class="bg-white py-2 mt-3">
                        <h5 class="fw-bold px-3">SOCIAL MEDIA LINKS</h5>
                        <div class="d-flex">
                            <div class="form-group col-md-6">
                                <label>Whatsapp number</label>
                                <input required id="whatsapp_number" name="whatsapp_number" type="text" class="form-control" placeholder="whatsapp number">
                            </div>
                            <div class="form-group col-md-6">
                                <label>facebook Page Url</label>
                                <input required id="facebook_page_url" name="facebook_page_url" type="text" class="form-control" placeholder="facebook page url">
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="form-group col-md-6">
                                <label>Instagram page url</label>
                                <input required id="instagram_page_url" name="instagram_page_url" type="text" class="form-control" placeholder="instagram page url">
                            </div>
                            <div class="form-group col-md-6">
                                <label>youtube channel url</label>
                                <input required id="youtube_channel_url" name="youtube_channel_url" type="text" class="form-control" placeholder="youtube channel url">
                            </div>
                        </div>
                        <div id="youtube_channel_url_div" class="form-group col-md-12">
                        </div>
                    </div>
                </div>

                <div class="col-md-4 p-2">
                    <div style="border-top: 2px solid purple;" class="bg-white py-2">
                        <h5 class="fw-bold px-3">PAGE THEMES COLORS & STATUS</h5>
                        <div class="form-group col-md-12">
                            <label>Background Color Code</label>
                            <input required id="background_color_code" name="background_color_code" type="text" class="form-control" placeholder="#">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Text Color Code</label>
                            <input required id="text_color_code" name="text_color_code" type="text" class="form-control" placeholder="#">
                        </div>
                        <div class="form-group col-md-12">
                            <label>First Color Code</label>
                            <input required id="first_color_code" name="first_color_code" type="text" class="form-control" placeholder="#">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Second Color Code</label>
                            <input required id="second_color_code" name="second_color_code" type="text" class="form-control" placeholder="#">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Third Color Code</label>
                            <input required id="third_color_code" name="third_color_code" type="text" class="form-control" placeholder="#">
                        </div>
                    </div>

                    <div style="border-top: 2px solid purple;" class="bg-white mt-3 py-2">
                        <h5 class="fw-bold px-3">SEO INFORMATION</h5>
                        <div class="form-group col-md-12">
                            <label>Meta Tag</label>
                            <input required id="meta_tag" name="meta_tag" type="text" class="form-control" placeholder="#">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Keywords</label>
                            <input required id="keywords" name="keywords" type="text" class="form-control" placeholder="#">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Meta Description</label>
                            <input required id="meta_description" name="meta_description" type="text" class="form-control" placeholder="#">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Fevicon</label>
                            <input required id="fevicon" name="fevicon" type="text" class="form-control" placeholder="#">
                        </div>
                    </div>

                    <div style="border-top: 2px solid purple;" class="bg-white py-2 mt-3">
                        <h5 class="fw-bold px-3">PRICING INFORMATION</h5>
                        <div class="form-group col-md-12">
                            <label>Page Type</label>
                            <select class="form-control" name="page_type" id="page_type">
                                <option value="paid">paid</option>
                                <option value="unpaid">unpaid</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Cost</label>
                            <input required id="cost" name="cost" type="text" class="form-control" placeholder="Enter Cost">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Discount</label>
                            <input required id="discount" name="discount" type="text" class="form-control" placeholder="Enter Discount">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Coupon Code</label>
                            <input required id="coupon_code" name="coupon_code" type="text" class="form-control" placeholder="Enter Code">
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" id="id" name="id">
            <input type="hidden" id="action" value="add">
            <div class="col-md-12 d-flex my-2 p-0">
                <button style="margin-right: 10px;margin-left:-5px" type="submit" class="btn btn-danger px-5"><i class="fa fa-close px-1"></i>Cancel</button>
                <button id="submit_btn" type="submit" class="btn btn-success px-5"><i class="fa fa-check px-1"></i>Submit</button>
            </div>
        </div>
    </form>
</div>