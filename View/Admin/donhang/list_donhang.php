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

    .boloc {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        margin-bottom: 15px;
    }

    .boloc2 {
        display: flex;
        flex-direction: row;
        gap: 10px;
    }

    .boloc select {
        height: 38px;
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
                <h2 class="card-title">Danh sách đơn hàng</h2>
                <form class="boloc" action="index.php?act=list_bill" method="post">
                    <div class="boloc2 form-group">
                        <select style="width: 11rem;" class="form-select" name="id_search_bill" id="tt">
                            <option value="0" selected>Tất cả</option>
                            <option value="">Giày nam</option>
                            <option value="">Giày nam</option>
                        </select>
                        <button type="submit" class="btn btn-primary" name="search_bill" value="Search">Tìm kiếm</button>
                    </div>
                </form>
                <div class="table-responsive">
                    <table class="table text-center">
                        <table class="table table-bordered text-center table1">
                            <thead>
                            <tr>
                                <th>Id_book</th>
                                <th>Họ tên</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Id_voucher</th>
                                <th>Tổng giá</th>
                                <th>Trạng thái</th>
                                <th>Ngày đặt</th>
                                <th>Check-in</th>
                                <th>Check-out</th>
                                <th style="width: 22%;">Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>id_book</td>
                                <td>Họ tên</td>
                                <td>Số điện thoại</td>
                                <td>email</td>
                                <td>id_voucher</td>
                                <td>tổng giá</td>
                                <td>trạng thái</td>
                                <td>ngày đặt</td>
                                <td>check-in</td>
                                <td>check-out</td>

                                <td class="btn1">
                                    <a href="index.php?url=sua-don-hang"><input class="btn btn-primary btn2" type="button" value="Update"></a>
                                    <a><input type="button" class="btn btn-primary btn2" value="Detail"></a>
                                    <input type="button" class="btn btn-primary btn2" value="Delete" onclick="confirm('Bạn có muốn xóa đơn hàng \( <?php echo $value['name']?> \) hay không!') == true ? location.href='index.php?url=xoa-don-hang&id=<?php echo $value['id']?>' : '' ">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>

