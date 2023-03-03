<?php
    include("../template/header.php");
    include("../includes/connect.inc.php")

?>
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Student Table</h1> 
                           
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    DataTables Advanced Tables
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Student ID</th>
                                                    <th>Student Name</th>
                                                    <th>Gender</th>
                                                    <th>Status</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                 $database = new Connection();
                                                 $db = $database->open();

                                                 try{
                                                    $sql = "SELECT * FROM students";

                                                    foreach($db->query($sql)as $rows){

                                                    
                                                 
                                                ?>
    
                                                <tr class="odd gradeX">
                                                    <td><?php echo $rows["s_id"]?></td>
                                                    <td><?php echo $rows["s_names"]?></td>
                                                    <td><?php echo $rows["s_gender"]?></td>
                                                    <td><?php echo $rows["s_status"]?></td>
                                                </tr>
                                            
                                                <?php
                                                }
                                            }catch(exception $e){
                                                echo "Error in" .$e->getmessage();
                                            }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                    <div class="well">
                                        <h4>DataTables Usage Information</h4>
                                        <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                        <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
<?php
    include("../template/footer.php")
?>