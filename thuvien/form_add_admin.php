<button type="button" id="sidebarToggle" class="bi bi-person-add btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Thêm người dùng</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form class="p-md-3" action="add_admin.php" method="post">
                <h5 class="text-center">Thêm người dùng</h5>
                <div class="mb-3">
                    <label for="exampleInputMaNV" class="form-label">Mã nhân Viên</label>
                    <input class="form-control" type="text" name="manv" placeholder="Mã Nhân Viên">
                </div>
                <div class="mb-3">
                    <label for="exampleInputUsername" class="form-label">UserName</label>
                    <input class="form-control" type="text" name="username" placeholder="Tên Đăng Nhập">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword" class="form-label">Password</label>
                    <input class="form-control" type="text" name="password" placeholder="Mật Khẩu">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input class="btn btn-primary" type="submit" name="capnhat">
                </div>
            </form>
        </div>
    </div>
</div>