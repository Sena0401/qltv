<td><button type="button" id="sidebarToggle" class="bi bi-journal-plus btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Mượn Sách</button></td>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form class="p-md-3" action="muon.php" method="post">
                <h5 class="text-center">Mượn Sách</h5>
                
                <div class="mb-3">
                    <div class="control-group">
                        <label class="control-label" for="inputtendocgia">Tên Độc Giả</label>
                        <select class="form-select" name="madg">
                            <option></option>
                            <?php
                            include("../connect.php");
                            $cat_query = mysqli_query($connect, "select * from docgia");
                            while ($cat_row = mysqli_fetch_array($cat_query)) {
                            ?>
                                <option value="<?php echo $cat_row['madg']; ?>"><?php echo $cat_row['tendg']; ?></option>
                            <?php  } ?>
                        </select>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="exampleInputdate" class="form-label">Ngày Trả</label>
                    <input class="form-control" type="date" name="ngaytra" placeholder="Ngày Trả">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input class="btn btn-primary" type="submit" name="capnhat">
                </div>
            </form>
        </div>
    </div>
</div>
</tr> 