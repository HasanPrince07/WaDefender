<!-- admin_links -->
<!-- Bootstrap core JavaScript-->
<script src="admin/js/jquery.min.js"></script>
<script src="admin/js/popper.min.js"></script>
<script src="admin/js/bootstrap.min.js"></script>

<!-- simplebar js -->
<script src="admin/plugins/simplebar/js/simplebar.js"></script>
<!-- sidebar-menu js -->
<script src="admin/js/sidebar-menu.js"></script>
<!-- loader scripts -->
<script src="admin/js/jquery.loading-indicator.html"></script>
<!-- Chart js -->
<script src="admin/plugins/Chart.js/Chart.min.js"></script>
<!-- Custom scripts -->
<script src="admin/js/app-script.js"></script>
<!--Sweet Alerts -->
<script src="admin/plugins/alerts-boxes/js/sweetalert.min.js"></script>
<script src="admin/plugins/alerts-boxes/js/sweet-alert-script.js"></script>
<!-- Vector map JavaScript -->
<script src="admin/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="admin/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- Easy Pie Chart JS -->
<script src="admin/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
<!-- Sparkline JS -->
<script src="admin/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
<script src="admin/plugins/jquery-knob/excanvas.js"></script>
<script src="admin/plugins/jquery-knob/jquery.knob.js"></script>
<script>
    $(function() {
        $(".knob").knob();
    });
    $(document).ready(function() {
        $(document).on("click", "#logout", function() {
            // window.sessionStorage.removeItem("username");
            // window.location.href = "login.php";
            var action = "destroy_session";
            $.ajax({
                url: "php/login_table.php",
                method: "POST",
                data: {
                    action: action
                },
                success: function() {
                    window.location.href = "login.php";
                },
                error: function(error) {
                    console.log(error);
                }
            });
        });

        var action = "show_username";
        $.ajax({
            url: "php/login_table.php",
            method: "POST",
            data: {
                action: action
            },
            success: function(data) {
                $("#show_username").html(data);
                // if (data[""] == undefined) {
                //     window.location.href = "login.php";
                // } else {
                //     $("#show_username").html(data);

                // }
            },
            error: function(error) {
                console.log(error);
            }
        });

    });
</script>

<!-- Index js -->
<script src="admin/js/index.js"></script>
<!--Data Tables js-->
<script src="admin/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
<script src="admin/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
<script src="admin/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
<script src="admin/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
<script src="admin/plugins/bootstrap-datatable/js/jszip.min.js"></script>
<script src="admin/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
<script src="admin/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
<script src="admin/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
<script src="admin/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
<script src="admin/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>