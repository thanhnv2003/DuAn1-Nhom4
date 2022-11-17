
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Cập nhật loại hàng</h4>
                <form class="forms-sample" action="index.php?act=updatedm" method="post">
                    <div class="form-group">
                        <label for="">Mã loại</label>
                        <input disabled name="maloai" value="11" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tên loại</label>
                        <input name="tenloai" type="text" value="Giày nam" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">ảnh
                        </label>
                        <input name="image" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả
                        </label>
                        <input name="mota" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">giá
                        </label>
                        <input name="price" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">chất lượng
                        </label>
                        <input name="chatluong" type="text" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <input class="btn btn-gradient-primary me-2" type="submit" name="capnhat" value="Cập nhật">
                        <input class="btn btn-secondary" type="reset" value="Nhập lại">
                        <a href="index.php?act=list_danhmuc"><input class="btn btn-gradient-primary me-2" type="button" value="Danh sách"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
