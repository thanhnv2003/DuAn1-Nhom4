
<?php
if(is_array($donhang)){
    extract($donhang);
}
?>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Cập nhật đơn hàng</h4>
                <form class="forms-sample" action="index.php?url=cap-nhat-don-hang" method="post">
                    <div class="form-group">
                        <label for="">Mã đơn hàng</label>
                        <input disabled name="id_book" value="<?php echo $id_book; ?>" type="text" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Tên đơn hàng</label>
                        <input disabled name="tendonhang" type="text" value="<?php echo $fullname; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">TEl</label>
                        <input disabled name="tel" type="text" value="<?php echo $tel; ?>" class="form-control">
                    </div>
                    <div class="form-group">                        
                        <label for="Email"></label>
                        <input disabled name="email" type="text" value="<?php echo $email; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Voucher</label>
                        <input disabled name="id_voucher" type="text" value="<?php echo $id_voucher; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tổng giá</label>
                        <input disabled name="total_price" type="text" value="<?php echo $total_price; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Trạng thái</label>
                        <input name="status" type="text" value="<?php echo $status; ?>" class="form-control">
                        <div class="form-group">
                        <label for="bill_status">Tình trạng đơn hàng</label>
                        <select name="status" id="" class="form-select">
                            <option value="0">Trống</option>
                            <option value="1">Đang được thuê </option>

                        </select>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="">Ngày đặt</label>
                        <input disabled name="date_time" type="text" value="<?php echo $date_time; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Check-in</label>
                        <input name="check_in_date" type="text" value="<?php echo $check_in_date; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Check-out</label>
                        <input name="check_out_date" type="text" value="<?php echo $check_out_date; ?>" class="form-control">
                    </div>
                    
                    <div class="form-group mt-3">
                    <input type="hidden" name="id" value="<?php echo $id_book; ?>">
                        <input class="btn btn-primary" type="submit" name="capnhat" value="Cập nhật">
                        <a href="index.php?url=quan-ly-don-hang"><input class="btn btn-dark" type="button" value="Danh sách"></a>
                    </div>
                    <?php 
                    if(isset($thongbao)&&($thongbao!=""))echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>