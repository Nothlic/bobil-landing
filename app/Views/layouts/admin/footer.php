<!--Start Rightbar-->
<!--Start Rightbar/offcanvas-->
<div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
    <div class="offcanvas-header border-bottom">
        <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
        <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <h6>Account Settings</h6>
        <div class="p-2 text-start mt-3">
            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" id="settings-switch1">
                <label class="form-check-label" for="settings-switch1">Auto updates</label>
            </div>
            <!--end form-switch-->
            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
                <label class="form-check-label" for="settings-switch2">Location Permission</label>
            </div>
            <!--end form-switch-->
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="settings-switch3">
                <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
            </div>
            <!--end form-switch-->
        </div>
        <!--end /div-->
        <h6>General Settings</h6>
        <div class="p-2 text-start mt-3">
            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" id="settings-switch4">
                <label class="form-check-label" for="settings-switch4">Show me Online</label>
            </div>
            <!--end form-switch-->
            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
                <label class="form-check-label" for="settings-switch5">Status visible to all</label>
            </div>
            <!--end form-switch-->
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="settings-switch6">
                <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
            </div>
            <!--end form-switch-->
        </div>
        <!--end /div-->
    </div>
    <!--end offcanvas-body-->
</div>
<!--end Rightbar/offcanvas-->
<!--end Rightbar-->


<!--Start Footer-->
<!-- Footer Start -->
<footer class="footer text-center text-sm-start">
    &copy; <script>
        document.write(new Date().getFullYear())
    </script> Boss Mobil <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i class="mdi mdi-heart text-danger"></i> by Developer Bobil</span>
</footer>
<!-- end Footer -->
<!--end footer-->
</div>
<!-- end page content -->
</div>
<!-- end page-wrapper -->
<!-- Javascript  -->
<script src="<?= base_url('assets') ?>/plugins/chartjs/chart.js"></script>
<script src="<?= base_url('assets') ?>/plugins/lightpicker/litepicker.js"></script>
<script src="<?= base_url('assets') ?>/plugins/apexcharts/apexcharts.min.js"></script>
<script src="<?= base_url('assets') ?>/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/uppy/uppy.min.js"></script>
<script src="<?= base_url('assets') ?>/pages/file-upload.init.js"></script>

<script src="<?= base_url('assets') ?>/plugins/datatables/simple-datatables.js"></script>
<script src="<?= base_url('assets') ?>/pages/datatable.init.js"></script>

<script src="<?= base_url('assets') ?>/plugins/toastr/js/toastr.min.js"></script>
<script src="<?= base_url('assets') ?>/plugins/lightpicker/litepicker.js"></script>
<script src="<?= base_url('assets') ?>/plugins/apexcharts/apexcharts.min.js"></script>
<script src="<?= base_url('assets') ?>/pages/projects-index.init.js"></script>
<script src="<?= base_url('assets') ?>/plugins/chartjs/chart.js"></script>

<script src="<?= base_url('assets') ?>/plugins/tinymce/tinymce.min.js"></script>
<script src="<?= base_url('assets') ?>/pages/form-editor.init.js"></script>

<!-- App js -->
<script src="<?= base_url('assets') ?>/js/app.js"></script>

<script>
    function showNotification(type, message, title) {
        toastr[type](message, title);
    }

    <?php if (session()->getFlashdata('toastr')) : ?>
        showNotification('<?= session()->getFlashdata("toastr")['type'] ?>', '<?= session()->getFlashdata("toastr")['msg'] ?>', '<?= session()->getFlashdata("toastr")['title'] ?>')
    <?php endif; ?>
</script>

</body>
<!--end body-->

</html>