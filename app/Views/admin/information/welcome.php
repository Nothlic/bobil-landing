<div class="container-fluid py-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><?= $title ?></h4>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <form action="/information/saveWelcome" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" class="form-control" id="id" aria-describedby="id" name="id" value="<?= $data['id'] ?>">
                    <input type="hidden" class="form-control" id="id" aria-describedby="id" name="oldVideo" value="<?= $json->video ?>">
                    <div class="mb-3">
                        <label for="image">Video</label>
                        <div class="col-md-6">
                            <?php if (isset($json->video)) : ?>
                                <video width="320" height="100%" controls style="margin: 15px 0;border: 1px solid #eaeaeeae; padding:5px;border-radius:15px;">
                                    <source src="<?= base_url('upload') ?>/welcome/<?= $json->video ?>" type="video/mp4">
                                    <source src="movie.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            <?php endif; ?>
                            <div class="input-group">
                                <input type="file" class="form-control" name="video" accept="image/*,video/*" id="video">
                            </div>

                            <div class="invalid-feedback">
                                <?= $validation->getError('image') ?>
                            </div>
                        </div>
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