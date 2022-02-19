<div class="container-fluid">

    <!-- end page title end breadcrumb -->
    <div class="row py-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title"><?= $title ?> </h4>
                    </div>

                </div>
                <!--end card-header-->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th>No.</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                <?php foreach ($subscribe as $subss) : ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $subss['email'] ?></td>
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