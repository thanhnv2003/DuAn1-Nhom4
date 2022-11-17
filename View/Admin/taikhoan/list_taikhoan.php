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
                <h4 class="card-title">Danh sách khách hàng</h4>
                <div class="table-responsive">
                    <table class="table table-bordered text-center table1">
                        <thead>
                        <tr>
                            <th style="width: 5%;">#</th>
                            <th>ID</th>
                            <th>Img</th>
                            <th>Họ và tên </th>
                            <th>Mật khẩu</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>số điện thoại </th>
                            <th>Vai trò</th>
                            <th style="width: 17%;">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>User_id</td>
                            <td><img src="" alt="Avatar"></td>
                            <td>Họ tên</td>
                            <td>Mật khẩu</td>
                            <td>Email</td>
                            <td>Địa chỉ </td>
                            <td>Số điện thoại </td>
                            <td>Role1</td>
                            <td class="btn1">
                                <a href="index.php?url=sua-khach-hang"><input class="btn btn-primary btn2" type="button" value="Sửa"></a>
                                <a href="" onclick="return confirm(`Bạn muốn xóa?`)" ; id="delete">
                                    <input class="btn btn-danger btn2" type="button" value="Xóa"></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

