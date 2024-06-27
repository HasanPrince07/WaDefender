<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-table"></i>
                            <span>User Page</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="user_table" class="table-responsive"></div>
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
                    <h5 class="modal-title">User Table</h5>
                    <button id="close_modal" type="button" class="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" id="user_form" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Username</label>
                            <input required id="username" name="username" type="text" class="form-control" placeholder="Enter Your Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input required id="password" name="password" type="text" class="form-control" placeholder="Enter Your Password">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input required id="email" name="email" type="email" class="form-control" placeholder="Enter Your Email">
                        </div>
                        <input type="hidden" id="id" name="id">
                        <input type="hidden" id="action" value="add">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary px-5">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>