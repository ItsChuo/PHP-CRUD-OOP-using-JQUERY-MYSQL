<?php 
class infoModule {

    public function saveData($db){
        $name = $_POST['nm'];
        $address = $_POST['ad'];
        $emailad = $_POST['em'];
        $stmnt = $db->prepare("insert into info values('',?,?,?)");
        $stmnt->bindParam(1,$name);
        $stmnt->bindParam(2,$emailad);
        $stmnt->bindParam(3,$address);
        $stmnt->execute();
    }
    public function deleteData($db){
        $id = $_GET['id'];
        $stmnt = $db->prepare("delete from info where id=?");
        $stmnt->bindParam(1, $id);    
        $stmnt->execute();
    }
    public function updateData($db){
        $id =  $_POST['id'];
        $name = $_POST['nme'];
        $emailad = $_POST['ema'];
        $address = $_POST['adr'];
        $stmnt = $db->prepare("update info set name=?, email=?, adress=? where id=?");
        $stmnt->bindParam(1,$name);
        $stmnt->bindParam(2,$emailad);
        $stmnt->bindParam(3,$address);
        $stmnt->bindParam(4,$id);
        $stmnt->execute();
    }
    public function viewAllData($db){
        $stmnt = $db->prepare("select *from info");
        $stmnt->execute();

        while ($row = $stmnt->fetch()) {
            ?>
            
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['adress'] ?></td>
                        <td><button data-toggle="modal" data-target="#EditModal-<?php echo $row['id'] ?>">Edit</button>
                        <button onclick="deletemyDatas(<?php echo $row['id'] ?>)">Delete</button>
                        <div id="EditModal-<?php echo $row['id'] ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <div class="modal-content">
                                    <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Edit Data</h4>
                                    </div>
                                        <div class="modal-body">
                                                <form >
                                                            <div class="form-group">
                                                            
                                                                <label for="">Name:</label>
                                                                <input type="text" class="form-control" id="nme<?php echo $row['id'] ?>" value="<?php echo $row['name'] ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Email:</label>
                                                                <input type="email" class="form-control" id="ema<?php echo $row['id'] ?>" value="<?php echo $row['email'] ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Address:</label>
                                                                <input type="text" class="form-control" id="adr<?php echo $row['id'] ?>" value="<?php echo $row['adress'] ?>">
                                                            </div>
                                                        
                                                            <button type="submit"  class="btn btn-default" onclick="Updatemydatas(<?php echo $row['id'] ?>)"data-dismiss="modal"><span class="glyphicon glyphicon-plus"></span>Submit</button>
                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            </div>
                                        </div>

                                </div>
                </div>

                        </td>
                        
                    </tr>
                
            <?php
        }

    

    }
}

?>