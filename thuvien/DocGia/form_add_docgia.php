<button type="button" id="sidebarToggle" class="bi bi-person-fill-add btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Thêm Độc Giả</button>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form class="p-md-3" action="add_docgia.php" method="post">
                <h5 class="text-center">Thêm Độc Giả</h5>
                <div class="mb-3">
                    <label class="form-label">Mã Độc Giả</label>
                    <input class="form-control" type="text" name="madg" placeholder="Mã Độc Giả">
                </div>
                <div class="mb-3">
                    <label class="form-label">Tên Độc Giả</label>
                    <input class="form-control" type="text" name="tendg" placeholder="Tên Độc Giả">
                </div>
                <div class="mb-3">
                    <label for="exampleInputUsername" class="form-label">Địa Chỉ</label>
                    <input class="form-control" type="text" name="diachidg" placeholder="Địa Chỉ">
                </div>
                <div class="mb-3">
                    <label for="exampleInputUsername" class="form-label">Số Thẻ</label>
                    <input class="form-control" type="number" name="sothe" placeholder="Số Thẻ">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <input class="btn btn-primary" type="submit" name="them">
                </div>
            </form>
        </div>
    </div>
</div>