<button type="button" id="sidebarToggle" class="bi bi-patch-plus btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Thêm Sách</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form class="p-md-3" action="add_book.php" method="post">
                <h5 class="text-center">Thêm Sách</h5>
                <div class="mb-3">
                    <label for="exampleInputMaNV" class="form-label">Mã Sách</label>
                    <input class="form-control" type="text" name="masach" placeholder="Mã Sách">
                </div>
                <div class="mb-3">
                    <label for="exampleInputUsername" class="form-label">Tên Sách</label>
                    <input class="form-control" type="text" name="tensach" placeholder="Tên Sách">
                </div>
                <div class="mb-3">
                    <div class="control-group">
                        <label class="control-label" for="inputtheloai">Tên Thể Loại</label>
                        <select class="form-select" name="matheloai">
                            <option></option>
                            <?php
                            include("../connect.php");
                            $cat_query = mysqli_query($connect, "select * from theloai");
                            while ($cat_row = mysqli_fetch_array($cat_query)) {
                            ?>
                                <option value="<?php echo $cat_row['matheloai']; ?>"><?php echo $cat_row['tentheloai']; ?></option>
                            <?php  } ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputUsername" class="form-label">Tác Giả</label>
                    <input class="form-control" type="text" name="tacgia" placeholder="Tác Giả">
                </div>
                <div class="mb-3">
                    <div class="control-group">
                        <label class="control-label" for="inputtheloai">Nhà Xuất Bản</label>
                        <select class="form-select" name="manxb" >
                            <option></option>
                            <?php
                            include("../connect.php");
                            $cat_query = mysqli_query($connect, "select * from nhaxuatban");
                            while ($cat_row = mysqli_fetch_array($cat_query)) {
                            ?>
                                <option value="<?php echo $cat_row['manxb']; ?>"><?php echo $cat_row['tennxb']; ?></option>
                            <?php  } ?>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputUsername" class="form-label">Năm Xuất Bản</label>
                    <input class="form-control" type="text" name="namxuatban" placeholder="Năm Xuất Bản">
                </div>
                <div class="mb-3">
                    <label for="exampleInputUsername" class="form-label">Tình Trạng</label>
                    <input class="form-control" type="text" name="hientrang" placeholder="Hiện Trạng">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input class="btn btn-primary" type="submit" name="capnhat">
                </div>
            </form>
        </div>
    </div>
</div>