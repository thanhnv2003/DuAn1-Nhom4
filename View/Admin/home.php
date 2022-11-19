<style>
    .thaotac {
        display: flex;
        flex-direction: row;
        gap: 10px;
    }

    a {
        text-decoration: none;
    }

    td {
        line-height: 40px;
    }

    .btn1 input:nth-child(1) {
        margin-right: 10px;
    }

    .btn2 {
        padding-left: 30px;
        padding-right: 30px;
    }

    .table1 thead tr th {
        font-weight: 600;
        font-size: 1rem;
    }
</style>
<div class="row">
<!--    --><?php //var_dump($_SESSION['account']); ?>
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Giao diện trang chủ</h4>
                <div class="table-responsive">
                    <table class="table text-center table-bordered table1">
                        <thead>
                        <tr>
                            <th style="width: 9%;">#</th>
                            <th>LOGO</th>
                            <th>ADDRESS</th>
                            <th>TEL</th>
                            <th>EMAIL</th>
                            <th>COPYRIGHT</th>
                            <th style="width: 22%;">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input class="form-check-input" type="checkbox" name="" id=""></td>
                            <td>' . $danhmuc_id . '</td>
                            <td>' . $danhmuc_name . '</td>
                            <td>' . $danhmuc_name . '</td>
                            <td>' . $danhmuc_name . '</td>
                            <td>' . $danhmuc_name . '</td>
                            <td class="btn1"><a href="' . $update_dm . '"><input class="btn btn-primary btn2" type="button" value="Sửa"></a><a href="' . $delete_dm . '" onclick="return confirm(`Bạn muốn xóa?`)" ; id="delete"><input class="btn btn-danger btn2" type="button" value="Xóa"></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="card-body">
                <h4 class="card-title">Ảnh Slider</h4>
                <div class="table-responsive">
                    <table class="table text-center table-bordered table1">
                        <thead>
                        <tr>
                            <th style="width: 9%;">ID IMG</th>
                            <th>IMAGE</th>
                            <th>URL</th>
                            <th>TITLE</th>
                            <th>DESCRIPTION</th>
                            <th style="width: 22%;">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td>' . $danhmuc_id . '</td>
                            <td>' . $danhmuc_name . '</td>
                            <td>' . $danhmuc_name . '</td>
                            <td>' . $danhmuc_name . '</td>
                            <td class="btn1"><a href="' . $update_dm . '"><input class="btn btn-primary btn2" type="button" value="Sửa"></a><a href="' . $delete_dm . '" onclick="return confirm(`Bạn muốn xóa?`)" ; id="delete"><input class="btn btn-danger btn2" type="button" value="Xóa"></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="thaotac">
                    <div class="">
                        <a href="index.php?act=add_danhmuc"><input class="btn btn-primary" type="button" value="Thêm mới ảnh"></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Ảnh Loại Phòng</h4>
                <div class="table-responsive">
                    <table class="table text-center table-bordered table1">
                        <thead>
                        <tr>
                            <th style="width: 9%;">ID IMG</th>
                            <th>IMAGE</th>
                            <th>ID ROOM</th>
                            <th style="width: 22%;">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td>' . $danhmuc_id . '</td>
                            <td>' . $danhmuc_name . '</td>
                            <td class="btn1"><a href="' . $update_dm . '"><input class="btn btn-primary btn2" type="button" value="Sửa"></a><a href="' . $delete_dm . '" onclick="return confirm(`Bạn muốn xóa?`)" ; id="delete"><input class="btn btn-danger btn2" type="button" value="Xóa"></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="thaotac">
                    <div class="">
                        <a href="index.php?act=add_danhmuc"><input class="btn btn-primary" type="button" value="Thêm mới ảnh"></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <h4 class="card-title">Ảnh Khách Sạn</h4>
                <div class="table-responsive">
                    <table class="table text-center table-bordered table1">
                        <thead>
                        <tr>
                            <th style="width: 9%;">ID IMG</th>
                            <th>IMAGE</th>
                            <th>URL</th>
                            <th>DESCRIPTION</th>
                            <th style="width: 22%;">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                            <td>' . $danhmuc_id . '</td>
                            <td>' . $danhmuc_name . '</td>
                            <td>' . $danhmuc_name . '</td>
                            <td class="btn1"><a href="' . $update_dm . '"><input class="btn btn-primary btn2" type="button" value="Sửa"></a><a href="' . $delete_dm . '" onclick="return confirm(`Bạn muốn xóa?`)" ; id="delete"><input class="btn btn-danger btn2" type="button" value="Xóa"></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="thaotac">
                    <div class="">
                        <a href="index.php?act=add_danhmuc"><input class="btn btn-primary" type="button" value="Thêm mới ảnh"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

