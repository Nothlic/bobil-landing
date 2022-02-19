<div class="container-fluid py-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><?= $title ?></h4>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <form action="/car/save" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <?php if (isset($isEdit)) : ?>
                        <input type="hidden" class="form-control" id="id" aria-describedby="id" name="id" value="<?= $car['id'] ?>">
                    <?php endif; ?>

                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="name" name="name" placeholder="Name" <?php if (isset($isEdit)) : ?> value="<?= $data->name ?>" <?php endif ?>>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlSelect1">Brand</label>
                        <select class="form-select" name="idBrand" id="exampleFormControlSelect1">
                            <?php foreach ($brands as $brand) : ?>
                                <option value="<?= $brand['id'] ?>" <?php if ($car['idBrand'] === $brand['id']) : ?> selected <?php endif; ?>><?= $brand['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="name">Year</label>
                        <input type="text" class="form-control" id="year" aria-describedby="year" name="year" placeholder="Year" <?php if (isset($isEdit)) : ?> value="<?= $data->year ?>" <?php endif ?>>
                    </div>


                    <div class="mb-3">
                        <label for="name">Price</label>
                        <input type="text" class="form-control" id="price" aria-describedby="price" name="price" placeholder="Price" <?php if (isset($isEdit)) : ?> value="<?= $data->price ?>" <?php endif ?>>
                    </div>

                    <div class="mb-3">
                        <label for="name">Decsription</label>
                        <textarea id="basic-conf" name="description">
                            <?php if (isset($data->description)) : ?>
                                <?= $data->description ?>
                            <?php endif; ?>
                        </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="name">Exterior</label>
                        <textarea id="basic-conf1" name="exterior">
                            <?php if (isset($data->exterior)) : ?>
                                <?= $data->exterior ?>
                            <?php endif; ?>
                        </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="name">Interior</label>
                        <textarea id="basic-conf2" name="interior">
                            <?php if (isset($data->interior)) : ?>
                                <?= $data->interior ?>
                            <?php endif; ?>
                        </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="name">Image</label>
                        <input type="file" name="image[]" class="form-control" id="image" multiple>
                    </div>

                    <div class="float-end">
                        <button type="submit" class="btn btn-de-primary">Submit</button>
                        <a href="/car" class="btn btn-de-danger">Cancel</a>
                    </div>


                </form>
            </div>
            <!--end card-body-->
        </div>
    </div>
</div>