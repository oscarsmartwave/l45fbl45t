<body>
    <div id ="wrapper">

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Suspend Operator</h1>
                    </div>
                <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Email</td>
                                        <th>Address</th>
                                        <th>Contact Number</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                            if(isset($operators))
                            {
                                echo "
                                    <tr>
                                    <td>".$operators[0]->get("username")."</td>
                                    <td>".$operators[0]->get("lastName")."</td>
                                    <td>".$operators[0]->get("firstName")."</td>
                                    <td>".$operators[0]->get("email")."</td>
                                    <td>".$operators[0]->get("homeAddress")."</td>
                                    <td>".$operators[0]->get("phoneNumber")."</td>

                                    ";
                            }
                            else if(isset($Message))
                            {
                                echo "
                                <tr>
                                    <td colspan=4>".$Message."
                                    </td>
                                </tr>
                                ";
                            }  

                                    ?>
                                </tbody>
                            </table>
                            <div class="container">
                            <p>
                            <?php
                            if($operators[0]->getObjectId() != null)
                            {
                                ?>
                                <form method="post">
                                    <input type="hidden" name="objectId" id="objectId" value="<?php echo $operators[0]->getObjectId(); ?>" />
                                    <button class="btn btn-large btn-primary" type="button" id="btnSuspend" name="btn-suspend"><i class="fa fa-bomb"></i> &nbsp; YES</button>
                                    <a href="<?php echo base_url(); ?>index.php/operators/" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; NO</a>
                                </form>  
                                <?php
                            }
                            else
                            {
                                ?>
                                <a href="<?php echo base_url(); ?>index.php/operators/" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to index</a>
                                <?php
                            }
                            ?>
                            </p>
                            </div>
                        </div>
                            <!-- /.panel-body -->

                    </div>
                    <!-- /.col-lg-12 -->
                </div>
            <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div> <!-- /#wrapper> -->
</body>