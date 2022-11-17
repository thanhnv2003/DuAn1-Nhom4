<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Thêm mới loại hàng</h4>
                <form class="forms-sample" action="index.php?act=add_danhmuc" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Mã loại</label>
                        <input disabled name="maloai" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tên loại
                        </label>
                        <input name="tenloai" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">ảnh
                        </label>
                        <input name="image" type="file" class="form-control">
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
                        <input class="btn btn-gradient-primary me-2" type="submit" name="themmoi" value="Thêm mới">
                        <input class="btn btn-secondary" type="reset" name="reset" value="Nhập lại">
                        <a href="index.php?act=list_danhmuc"><input class="btn btn-primary" type="button" value="Danh sách"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>