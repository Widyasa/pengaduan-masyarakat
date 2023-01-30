<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
                                                                   href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
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