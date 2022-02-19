<div class="container-fluid">
    <!-- end page title end breadcrumb -->
    <div class="row py-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title">Mail Template</h4>
                        <div class="btn btn-sm btn-outline-success" onclick={submitButton()}><i class="fa fa-save me-2"></i>Save</div>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="name">Name Template</label>
                    <input type="text" class="form-control" id="name" aria-describedby="name" name="name" placeholder="Name" value="<?= $mail['name'] ?>">
                    <input type="hidden" class="form-control" id="id" aria-describedby="id" name="id" placeholder="id" value="<?= $mail['id'] ?>">
                </div>
            </div>
        </div>
    </div>

    <div id="editor-container" class="mb-3" style="height:90vh;"></div>
</div>


<script src="//editor.unlayer.com/embed.js"></script>

<script>
    unlayer.init({
        id: 'editor-container',
        projectId: 1234,
        displayMode: 'email',
    })


    unlayer.loadDesign(<?= $mail['design'] ?>);

    // unlayer.addEventListener('design:updated', function(updates) {
    //     // Design is updated by the user
    //     unlayer.exportHtml(function(data) {
    //         var json = data.design; // design json
    //         var html = data.html; // design html

    //         // Save the json, or html here
    //     })
    // })

    function submitButton() {
        var baseUrl = `<?= base_url() ?>`;
        var nameVal = $('#name').val();
        var idVal = $('#id').val();
        unlayer.exportHtml(function(data) {
            $.ajax({
                url: `${baseUrl}/EmailBlast/save`,
                type: 'POST',
                data: {
                    id: idVal,
                    name: nameVal,
                    design: data.design,
                    html: data.html,
                },
                dataType: 'JSON',
                error: function(error) {
                    if (error.status === 200) {
                        window.location.href = `${baseUrl}/bobil-core/mailblast`;
                    }
                }
            })

        });

    }
</script>