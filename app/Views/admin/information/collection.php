<div class="container-fluid py-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><?= $title ?></h4>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <form action="/information/saveCollections" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" class="form-control" id="id" aria-describedby="id" name="id" value="<?= $data['id'] ?>">

                    <div class="mb-3">
                        <label for="name">Title Collections</label>
                        <input type="text" class="form-control" id="titleCollections" aria-describedby="titleCollections" name="titleCollections" placeholder="Title Collections" <?php if (isset($json->titleCollections)) : ?> value="<?= $json->titleCollections ?>" <?php else : ?> <?php endif ?>>
                    </div>

                    <div class="mb-3">
                        <label for="name">Slider</label>
                        <input type="file" name="slider[]" class="form-control" id="file" multiple>
                    </div>


                    <div class="float-end">
                        <button type="submit" class="btn btn-de-primary">Submit</button>
                        <a href="/admin" class="btn btn-de-danger">Cancel</a>
                    </div>

                </form>
            </div>
            <!--end card-body-->
        </div>
    </div>
</div>