<div class="container-fluid py-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><?= $title ?></h4>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <form action="/information/saveLanding" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" class="form-control" id="id" aria-describedby="id" name="id" value="<?= $data['id'] ?>">
                    <input type="hidden" class="form-control" id="id" aria-describedby="id" name="oldImage1" value="<?= $json->image1 ?>">
                    <input type="hidden" class="form-control" id="id" aria-describedby="id" name="oldImage2" value="<?= $json->image2 ?>">
                    <input type="hidden" class="form-control" id="id" aria-describedby="id" name="oldImage3" value="<?= $json->image3 ?>">
                    <input type="hidden" class="form-control" id="id" aria-describedby="id" name="oldImage4" value="<?= $json->image4 ?>">

                    <div class="mb-3">
                        <label for="image">Image <small>Section 1</small></label>
                        <div class="col-md-6">
                            <div class="file-wrapper">
                                <?php if (isset($json->image1)) : ?>
                                    <div class="file-input is-file">
                                        <i class="fas fa-file icon" style="display:none"></i>
                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDelete(0)}"></i>
                                        <img class="preview-content" src="<?= base_url('upload') ?>/landing/<?= $json->image1 ?>" />
                                    </div>
                                <?php else : ?>
                                    <div class="file-input">
                                        <i class="fas fa-file icon"></i>
                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDelete(0)}"></i>
                                    </div>
                                <?php endif; ?>
                                <input type="file" class="input-file" id="image" name="image1" accept="image/*" onchange="{handleChange(0)}" />

                            </div>

                            <div class="invalid-feedback">
                                <?= $validation->getError('image') ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="image">Image <small>Section 2</small></label>
                        <div class="col-md-6">
                            <div class="file-wrapper">
                                <?php if (isset($json->image2)) : ?>
                                    <div class="file-input is-file">
                                        <i class="fas fa-file icon" style="display:none"></i>
                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDelete(1)}"></i>
                                        <img class="preview-content" src="<?= base_url('upload') ?>/landing/<?= $json->image2 ?>" />
                                    </div>
                                <?php else : ?>
                                    <div class="file-input">
                                        <i class="fas fa-file icon"></i>
                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDelete(1)}"></i>
                                    </div>
                                <?php endif; ?>
                                <input type="file" class="input-file" id="image" name="image2" accept="image/*" onchange="{handleChange(1)}" />
                            </div>
                            <div class="invalid-feedback">
                                <?= $validation->getError('image') ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="image">Image <small>Section 3</small></label>
                        <div class="col-md-6">
                            <div class="file-wrapper">
                                <?php if (isset($json->image3)) : ?>
                                    <div class="file-input is-file">
                                        <i class="fas fa-file icon" style="display:none"></i>
                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDelete(2)}"></i>
                                        <img class="preview-content" src="<?= base_url('upload') ?>/landing/<?= $json->image3 ?>" />
                                    </div>
                                <?php else : ?>
                                    <div class="file-input">
                                        <i class="fas fa-file icon"></i>
                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDelete(2)}"></i>
                                    </div>
                                <?php endif; ?>
                                <input type="file" class="input-file" id="image" name="image3" accept="image/*" onchange="{handleChange(2)}" />
                            </div>

                            <div class="invalid-feedback">
                                <?= $validation->getError('image') ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="image">Image <small>Section 4</small></label>
                        <div class="col-md-6">
                            <div class="file-wrapper">
                                <?php if (isset($json->image4)) : ?>
                                    <div class="file-input is-file">
                                        <i class="fas fa-file icon" style="display:none"></i>
                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDelete(3)}"></i>
                                        <img class="preview-content" src="<?= base_url('upload') ?>/landing/<?= $json->image4 ?>" />
                                    </div>
                                <?php else : ?>
                                    <div class="file-input">
                                        <i class="fas fa-file icon"></i>
                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDelete(3)}"></i>
                                    </div>
                                <?php endif; ?>
                                <input type="file" class="input-file" id="image" name="image4" accept="image/*" onchange="{handleChange(3)}" />
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