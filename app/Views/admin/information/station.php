<div class="container-fluid py-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><?= $title ?></h4>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <form action="/information/saveStation" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" class="form-control" id="id" aria-describedby="id" name="id" value="<?= $data['id'] ?>">

                    <div class="mb-3">
                        <label for="name">Small Label Station</label>
                        <input type="text" class="form-control" id="smallLabelStation" aria-describedby="smallLabelStation" name="smallLabelStation" placeholder="Small Label Station" <?php if (isset($json->smallLabelStation)) : ?> value="<?= $json->smallLabelStation ?>" <?php else : ?> <?php endif ?>>
                    </div>

                    <div class="mb-3">
                        <label for="name">Title Label Station</label>
                        <input type="text" class="form-control" id="titleLabelStation" aria-describedby="titleLabelStation" name="titleLabelStation" placeholder="Title Label Station" <?php if (isset($json->titleLabelStation)) : ?> value="<?= $json->titleLabelStation ?>" <?php else : ?> <?php endif ?>>
                    </div>

                    <div class="mb-3">
                        <label for="name">Address Station</label>
                        <input type="text" class="form-control" id="addressStation" aria-describedby="addressStation" name="addressStation" placeholder="Address Station" <?php if (isset($json->addressStation)) : ?> value="<?= $json->addressStation ?>" <?php else : ?> <?php endif ?>>
                    </div>


                    <div class="mb-3">
                        <label for="name">Subscribe Label</label>
                        <input type="text" class="form-control" id="subscribeLabel" aria-describedby="subscribeLabel" name="subscribeLabel" placeholder="Subscribe Label" <?php if (isset($json->subscribeLabel)) : ?> value="<?= $json->subscribeLabel ?>" <?php else : ?> <?php endif ?>>
                    </div>

                    <div class="mb-3">
                        <label for="name">Subscribe Title</label>
                        <input type="text" class="form-control" id="subscribeTitle" aria-describedby="subscribeTitle" name="subscribeTitle" placeholder="Subscribe Title" <?php if (isset($json->subscribeTitle)) : ?> value="<?= $json->subscribeTitle ?>" <?php else : ?> <?php endif ?>>
                    </div>

                    <div class="mb-3">
                        <label for="name">Subscribe Subtitle</label>
                        <input type="text" class="form-control" id="subscribeSubtitle" aria-describedby="subscribeSubtitle" name="subscribeSubtitle" placeholder="Subscribe Subtitle" <?php if (isset($json->subscribeSubtitle)) : ?> value="<?= $json->subscribeSubtitle ?>" <?php else : ?> <?php endif ?>>
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