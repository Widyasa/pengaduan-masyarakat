<div class="container-fluid mt-5">

    <!-- Page Heading -->
    <div class="d-flex flex-row justify-content-between mb-3">
        <h1 class="h3 mb-2 text-gray-800">Citizen Table</h1>
        <button type="button" class="btn btn-primary add-modal" href="#" data-toggle="modal" data-target="#formModalAdd">Add Data</button>
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
                                <td class="d-flex flex-row ">
                                    <button type="button"  class="btn btn-warning edit-modal" href="#" data-toggle="modal" data-target="#formModalEdit<?=$kelas['id_kelas']?>">
                                        edit
                                    </button>
                                    <form action="<?=BASEURL?>kelas/delete/<?=$kelas['id_kelas']?>" method="post">
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


<div class="modal fade" id="formModalAdd" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Tambah Siswa</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="<?= BASEURL ?>kelas/store" method="post">
                <div class="modal-body">

                    <div class="input-grup mt-3">
                        <label for="nama_kelas">nama Kelas</label>
                        <input type="text" name="nama_kelas" placeholder="input nama" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary"  data-dismiss="modal">Cancel</button>
                    <button type="submit" value="submit" class="btn btn-primary" >tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
