<?php
if(is_array($lienhe)){
    extract($lienhe);
}
?>
<style>
    .role {
        margin-left: 1rem;
    }

</style>
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Cập nhật tài khoản</h4>

                <form action="index.php?url=cap-nhat-lien-he" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for=""> </label>
                        <input type="hidden" class="form-control" name="id_contact" value="<?php echo $id_contact ; ?>">
                    </div>
                        <div class="form-group">
                            <label for="">giới tính</label>
                            <input type="" disabled class="form-control" name="sex" value="<?php echo $sex; ?> ">
                        </div>
                    <div class="form-group">
                        <label for="">Fullname</label>
                        <input type="text" class="form-control" name="fullname" value="<?php echo $fullname; ?>">
                        <?php echo isset($error['fullname']) ? $error['fullname'] : "" ?>
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="" disabled class="form-control" name="email" value="<?php echo $email; ?> ">
                    </div>
                    <div class="form-group">
                        <label for="">tel</label>
                        <input type="" disabled class="form-control" name="tel" value="<?php echo $tel; ?>">
                    </div>
                        <div class="form-group">
                            <label for="">content</label>
                            <input type="" disabled class="form-control" name="content" value="<?php echo $content; ?>">
                        </div>

                        <div class="form-group">
                        <label for="">trạng thái</label> <br>
                        <select name="status">
                           <option value="0">Chửa trả lời</option>
                            <option value="1">Đã trả lời</option>
                        </select>
                    </div>
                    <input type="hidden" name="account_id" value=" $user_id ">
                    <!--                    <button type="submit" class="mt-3 btn btn-primary" name="sau-khach-hang">Cập nhật</button>-->
                    <input type="submit" value="Cập nhật" class="mt-3 btn btn-primary" name="capnhat">
                    <input type="reset" class="mt-3 btn btn-primary" value="Nhập lại">
                    <?php
                    if(isset($thongbao)&& $thongbao!= ""){
                        echo $thongbao;
                    }
                    ?>
                </form>
            </div>
        </div>
    </div>
