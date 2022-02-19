<div class="container-fluid">

    <!-- end page title end breadcrumb -->
    <div class="row py-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title"><?= $title ?> </h4>
                        <a href="/brand/create" class="btn btn-sm btn-outline-success"><i class="fa fa-plus me-2"></i>Create</a>
                    </div>

                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($brands as $brand) : ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $brand['name'] ?></td>
                                        <td>
                                            <div class="d-flex" style="gap:5px;">
                                                <a href="/brand/<?= $brand['id'] ?>" class="btn btn-sm btn-de-primary">Edit</a>

                                                <form action="/brand/delete/<?= $brand['id'] ?>" method="post">
                                                    <?= csrf_field() ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-sm btn-de-danger">Delete</button>
                                                </form>
                                            </div>
                                            <!-- <button type="button" class="btn btn-sm btn-de-danger" data-id="<?= $brand['id'] ?>" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button> -->

                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->


    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title m-0" id="deleteModalTitle">Confirm Action</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!--end modal-header-->
                <div class="modal-body">
                    <div class="row text-center">
                        <h5>Are you sure to continue this action?</h5>
                    </div>
                    <!--end row-->
                </div>
                <!--end modal-body-->
                <div class="modal-footer">
                    <button type="button" class="btn btn-de-secondary btn-sm" data-bs-dismiss="modal">Cancel</button>
                    <form action="/brand/delete/>" method="post">
                        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
                    </form>

                </div>
                <!--end modal-footer-->
            </div>
            <!--end modal-content-->
        </div>
        <!--end modal-dialog-->
    </div>
    <!--end modal-->

</div><!-- container -->