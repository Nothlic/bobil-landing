<div class="container-fluid py-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><?= $title ?></h4>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <form action="/brand/save" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="image">Logo</label>
                        <div class="col-md-6">
                            <div class="file-wrapper">
                                <?php if (isset($isEdit) && isset($brand['image'])) : ?>
                                    <div class="file-input is-file">
                                        <i class="fas fa-file icon" style="display:none"></i>
                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDelete(0)}"></i>
                                        <img class="preview-content" src="<?= base_url('upload/' . $brand['image']) ?>" />
                                    </div>
                                <?php else : ?>
                                    <div class="file-input">
                                        <i class="fas fa-file icon"></i>
                                        <i class="fa fa-trash image-delete-icon" onclick="{handleDelete(0)}"></i>
                                    </div>
                                <?php endif; ?>
                                <input type="file" class="input-file <?= ($validation->hasError('image')) ? 'is-invalid' : '' ?>" id="image" name="image" accept="image/*" onchange="{handleChange(0)}" />
                            </div>
                            <div class="invalid-feedback">
                                <?= $validation->getError('image') ?>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control 
                            <?= ($validation->hasError('name')) ? 'is-invalid' : '' ?>" id="name" aria-describedby="name" name="name" placeholder="Name" <?php if (isset($isEdit)) : ?> value="<?= $brand['name'] ?>" <?php else : ?> value="<?= old('name') ?>" <?php endif ?>>
                        <div class="invalid-feedback">
                            <?= $validation->getError('name') ?>
                        </div>
                        <?php if (isset($isEdit)) : ?>
                            <input type="hidden" class="form-control" id="id" aria-describedby="id" name="id" value="<?= $brand['id'] ?>">
                            <input type="hidden" class="form-control" id="oldImage" aria-describedby="oldImage" name="oldImage" value="<?= $brand['image'] ?>">
                        <?php endif; ?>
                    </div>

                    <div class="float-end">
                        <button type="submit" class="btn btn-de-primary">Submit</button>
                        <a href="/brand" class="btn btn-de-danger">Cancel</a>
                    </div>

                </form>
            </div>
            <!--end card-body-->
        </div>
    </div>
</div>