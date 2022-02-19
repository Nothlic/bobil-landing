<div class="container-fluid">

    <!-- end page title end breadcrumb -->
    <div class="row py-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title"><?= $title ?> </h4>
                        <a href="/bobil-core/mailblast/create" class="btn btn-sm btn-outline-success"><i class="fa fa-plus me-2"></i>Create</a>
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
                                <?php foreach ($mails as $mail) : ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $mail['name'] ?></td>
                                        <td>
                                            <div class="d-flex" style="gap:5px;">
                                                <a href="/bobil-core/mailblast/<?= $mail['id'] ?>" class="btn btn-sm btn-de-primary">Edit</a>

                                                <form action="/emailblast/delete/<?= $mail['id'] ?>" method="post">
                                                    <?= csrf_field() ?>
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-sm btn-de-danger">Delete</button>
                                                </form>
                                            </div>
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

</div><!-- container -->