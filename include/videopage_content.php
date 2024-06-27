<div class="content-wrapper bg-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h5 id="form_title"></h5>
                <form method="post" id="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Heading One</label>
                        <input required id="heading_one" name="heading_one" type="text" class="form-control" placeholder="Enter Your Heading One">
                    </div>
                    <div class="form-group">
                        <label>Heading Two</label>
                        <input required id="heading_two" name="heading_two" type="text" class="form-control" placeholder="Enter Your Heading Two">
                    </div>
                    <div class="form-group">
                        <label>Offer Text</label>
                        <input required id="offer_text" name="offer_text" type="text" class="form-control" placeholder="Enter Your Offer Text">
                    </div>
                    <div class="form-group">
                        <label>Text</label>
                        <input required id="text" name="text" type="text" class="form-control" placeholder="Enter Your Text">
                    </div>
                    <div class="form-group">
                        <label>Video URL</label>
                        <input required id="video_url" name="video_url" type="text" class="form-control" placeholder="Video url">
                    </div>
                    <div id="video_url_div" class="form-group col-md-12"></div>
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