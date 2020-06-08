<br>
<div class="container">
    <h5 style="color:#c61c2e;" >Manage Service Location: </h5>
    <br>
    <div style="background-color:white;color:black">

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Locaion Name</th>

                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($service as $s_service) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $s_service->service_location_id ?></th>
                        <td><?php echo $s_service->service_location_name ?></td>
                        <td> <?php
                            $pd = $s_service->publication_status;
                            if ($pd == 1) {
                                ?>

                                <a class="btn btn-success" href="">Published

                                </a>

                            <?php } else { ?>


                                <a class="btn btn-danger" href="">Unpublished

                                </a>

                            
                        <?php } ?>
                            <a class="btn btn-info" href="">Edit

                                </a>
                      </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</div>