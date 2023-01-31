<div class="col-lg-10 col-12 content-wrapper ">
    <div class="container">
        <div class=" mt-5">

            <!-- Page Heading -->
            <div class="d-flex flex-row justify-content-between mb-3">
                <h1 class="h3 mb-2 text-gray-800">Citizen Table</h1>
                <button type="button" class="btn btn-color" data-bs-toggle="modal" data-bs-target="#addModal">
                    Add Data
                </button>
            </div>


            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Citizen Table</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table " id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Citizen Id</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php $i=1;?>
                            <?php foreach($data['citizens'] as $citizen) :?>

                                <tr>
                                    <td><?=$i++?></td>
                                    <td><?=$citizen['name']?></td>
                                    <td><?=$citizen['number']?></td>
                                    <td><?=$citizen['phone_number']?></td>
                                    <td><?=$citizen['address']?></td>
                                    <td class="d-flex flex-row gap-3">
                                        <button type="button"  class="btn btn-warning edit-modal" href="#" data-bs-toggle="modal" data-bs-target="#editModal<?=$citizen['citizen_id']?>">
                                            edit
                                        </button>
                                        <form action="<?=BASEURL?>citizens/delete/<?=$citizen['citizen_id']?>" method="post">
                                            <button type="submit" class="btn btn-danger ml-3" onclick="return confirm('yakin mau hapus?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
     aria-hidden="true" >
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-body p-5">
                <p class="fs-3 text-center">Add New Citizen</p>
                <form action="<?=BASEURL?>citizens/store" method="post">
                    <div class="row gy-4 pt-4">
                        <div class="col-6">
                            <div class="input-modal w-100">
                                <label>Name</label>
                                <div class="input-text-wrapper w-100 mt-2">
                                    <input type="text" name="name" class="w-100 border-0" placeholder="Enter Citizens Name" >
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-modal w-100">
                                <label>Username</label>
                                <div class="input-text-wrapper w-100 mt-2">
                                    <input type="text" name="username" class="w-100 border-0" placeholder="Enter Citizens Username" >
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-modal w-100">
                                <label>Id Number</label>
                                <div class="input-text-wrapper w-100 mt-2">
                                    <input type="text" name="number" class="w-100 border-0" placeholder="Enter Citizens Id Number" >
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-modal w-100">
                                <label>Phone Number</label>
                                <div class="input-text-wrapper w-100 mt-2">
                                    <input type="text" name="phone_number" class="w-100 border-0" placeholder="Enter Citizens Phone Number" >
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-modal w-100">
                                <label>Password</label>
                                <div class="input-text-wrapper w-100 mt-2">
                                    <input type="password" name="password" class="w-100 border-0" placeholder="Enter Password" >
                                </div>
                            </div>
                        </div>
                        <div class="pt-3 input-modal w-100">
                            <label>Address</label>
                            <div class="input-text-wrapper w-100 mt-2">
                                <textarea type="text" name="address" class="w-100 input-text-wrapper border-0" placeholder="Enter Citizens Address" ></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-center gap-3 pt-4">
                        <button type="reset" class="btn btn-modal-close" data-bs-dismiss="modal">Cancel Save</button>
                        <button type="submit" class="btn btn-modal-enter">Add Citizens </button>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php foreach ($data['citizens'] as $citizen) :?>
    <div class="modal fade" id="editModal<?=$citizen['citizen_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-body p-5">
                <p class="fs-3 text-center"> Citizen</p>
                <form action="<?=BASEURL?>citizens/edit" method="post">
                    <div class="row gy-4 pt-4">
                        <input type="hidden" value="<?=$citizen['citizen_id']?>" name="citizen_id">
                        <div class="col-6">
                            <div class="input-modal w-100">
                                <label>Name</label>
                                <div class="input-text-wrapper w-100 mt-2">
                                    <input type="text" name="name" class="w-100 border-0" value="<?=$citizen['name']?>" >
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-modal w-100">
                                <label>Username</label>
                                <div class="input-text-wrapper w-100 mt-2">
                                    <input type="text" name="username" class="w-100 border-0" value="<?=$citizen['username']?>" >
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-modal w-100">
                                <label>Id Number</label>
                                <div class="input-text-wrapper w-100 mt-2">
                                    <input type="text" name="number" class="w-100 border-0" value="<?=$citizen['number']?>" >
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-modal w-100">
                                <label>Phone Number</label>
                                <div class="input-text-wrapper w-100 mt-2">
                                    <input type="text" name="phone_number" class="w-100 border-0" value="<?=$citizen['phone_number']?>" >
                                </div>
                            </div>
                        </div>
<!--                        <div class="col-12">-->
<!--                            <div class="input-modal w-100">-->
<!--                                <label>Password</label>-->
<!--                                <div class="input-text-wrapper w-100 mt-2">-->
<!--                                    <input type="password" name="password" class="w-100 border-0" placeholder="Enter Password" >-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="pt-3 input-modal w-100">
                            <label>Address</label>
                            <div class="input-text-wrapper w-100 mt-2">
                                <textarea type="text" name="address" class="w-100 input-text-wrapper border-0"><?=$citizen['address']?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-center gap-3 pt-4">
                        <button type="reset" class="btn btn-modal-close" data-bs-dismiss="modal">Cancel Save</button>
                        <button type="submit" class="btn btn-modal-enter">Add Citizens </button>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>