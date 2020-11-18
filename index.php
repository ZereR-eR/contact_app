<?php include "template/header.php" ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2 class="text-center mt-4 font-weight-bolder text-light"><img src="<?php echo $url; ?>assets/img/contact-book.svg" alt="" class="logo"> Contact App</h2>
            <div class="card mt-4">
                <div class="card-body">
                    <div class="">
                        <h4>
                            <i class="feather-user-plus text-primary"></i> Add Contact
                        </h4>

                        <hr>

                        <?php

                        if (isset($_POST['addCon'])){
                            saveContact();
                        }

                        ?>

                        <form class="justify-content-between" method="post" enctype="multipart/form-data">
                            <div class="form-row align-items-center justify-content-between">
                                <div class="form-group col-12 col-lg-4">
                                    <label for="name" class="mr-2"><i class="feather-user text-primary"></i> Name</label>
                                    <input type="text" id="name" name="name" class="form-control" autofocus value="<?php echo old('name'); ?>">
                                    <small class="text-danger font-weight-bold"><?php echo getError('name'); ?></small>
                                </div>
                                <div class="form-group col-12 col-lg-3">
                                    <label for="phone" class="mr-2"><i class="feather-phone text-primary"></i> Phone Number</label>
                                    <input type="number" id="phone" name="phone" class="form-control" value="<?php echo old('phone'); ?>">
                                    <small class="text-danger font-weight-bold"><?php echo getError('phone'); ?></small>
                                </div>
                                <div class="form-group col-12 col-lg-4">
                                    <label for="photo" class="mr-2"><i class="feather-image text-primary"></i> Photo (Size 3MB or Lower)</label>
                                    <input type="file" id="photo" name="photo"  class="form-control p-1 overflow-hidden">
                                    <small class="text-danger font-weight-bold"><?php echo getError('photo'); ?></small>
                                </div>

                                <div class="form-group col-12 col-lg-1 text-right mb-0">
                                    <button class="btn btn-primary mt-3" name="addCon">Save</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="card mt-5">
                <div class="card-body">
                    <h4><i class="feather-list text-primary"></i> Contact List</h4>

                    <hr class="pb-2">

                    <table class="table table-striped">
                        <thead>
                            <tr class="text-center">
                                <th>#</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Control</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (contacts() as $c){ ?>
                                <tr class="text-center">
                                    <td><?php echo $c['id']; ?></td>
                                    <td><img src="<?php echo $c['photo'] ?>" alt="" class="rounded-circle contact-photo"></td>
                                    <td><?php echo $c['name']; ?></td>
                                    <td><?php echo $c['phone']; ?></td>
                                    <td><a href="delete.php?id=<?php echo $c['id'];?>"><i class="feather-trash-2 text-danger" title="Delete" style="font-size: 22px"></i></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php clearError(); ?>

<?php include "template/footer.php" ?>


<script>
    $(document).ready(function() {
        $('.table').DataTable();
    } );

</script>

