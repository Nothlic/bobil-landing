<div class="container-fluid py-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><?= $title ?></h4>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <form action="/setting/save" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" class="form-control" id="id" aria-describedby="id" name="id" value="<?= $data['id'] ?>">
                    <div class="mb-3">
                        <label for="name">Company Name</label>
                        <input type="text" class="form-control" id="companyName" aria-describedby="companyName" name="companyName" placeholder="Company Name" value="<?= $data['companyName'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="name">Address</label>
                        <input type="text" class="form-control" id="address" aria-describedby="address" name="address" placeholder="Address" value="<?= $data['address'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="name">Gmaps Link Address</label>
                        <input type="text" class="form-control" id="iframeAddress" aria-describedby="iframeAddress" name="iframeAddress" placeholder="Gmaps Link" value="<?= $data['iframeAddress'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="name">Email</label>
                        <input type="text" class="form-control" id="email" aria-describedby="email" name="email" placeholder="Email" value="<?= $data['email'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="name">Phone Number</label>
                        <input type="text" class="form-control" id="phoneNumber" aria-describedby="phoneNumber" name="phoneNumber" placeholder="Phone Number" value="<?= $data['phoneNumber'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="name">Twitter Link</label>
                        <input type="text" class="form-control" id="twitterLink" aria-describedby="twitterLink" name="twitterLink" placeholder="Twitter Link" value="<?= $data['twitterLink'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="name">Instagram Link</label>
                        <input type="text" class="form-control" id="instagramLink" aria-describedby="instagramLink" name="instagramLink" placeholder="Instagram Link" value="<?= $data['instagramLink'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="name">Whatsapp Link</label>
                        <input type="text" class="form-control" id="whatsappLink" aria-describedby="whatsappLink" name="whatsappLink" placeholder="Whatsapp Link" value="<?= $data['whatsappLink'] ?>">
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