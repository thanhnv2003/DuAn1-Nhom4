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
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Danh sách loại hàng</h4>
                <div class="table-responsive">
                    <table class="table text-center table-bordered table1">
                        <thead>
                        <tr>
                            <th style="width: 9%;">#</th>
                            <th>Id-voucher</th>
                            <th>Tên</th>
                            <th>Mã voucher</th>
                            <th>Giá tiền</th>
                            <th style="width: 22%;">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input class="form-check-input" type="checkbox" name="" id=""></td>
                            <td>' .id . '</td>
                            <td>' .name . '</td>
                            <td>' . mã voucher . '</td>
                            <td>' . tiền. '</td>
                            <td class="btn1"><a href="' . $update_dm . '"><input class="btn btn-primary btn2" type="button" value="Sửa"></a><a href="' . $delete_dm . '" onclick="return confirm(`Bạn muốn xóa?`)" ; id="delete"><input class="btn btn-danger btn2" type="button" value="Xóa"></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="thaotac">
    <div class="">
        <a href="index.php?act=add_danhmuc"><input class="btn btn-primary" type="button" value="Thêm danh mục"></a>
    </div>
</div>
