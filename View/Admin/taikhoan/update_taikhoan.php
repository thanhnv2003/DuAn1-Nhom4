<?php
if(is_array($fixaccount)){
    extract($fixaccount);
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

                <form action="index.php?url=sua-khach-hang" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Avatar</label>
                        <img style="width: 120px;" src="$anh"  class="form-control" alt="ảnh">
                        <input class="form-control mt-2" type="file" name="anh" id="" multiple="multiple">
                    </div>
                    <div class="form-group">
                        <label for="">Fulname</label>
                        <input type="text" class="form-control" name="fullname" value="<?php echo $fullname; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" value="<?php echo $password; ?> ">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $email; ?> ">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $address; ?> ">
                    </div>
                    <div class="form-group">
                        <label for="">Phone</label>
                        <input type="phone" class="form-control" name="phone" value="<?php echo $tel ; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Vai trò</label> <br>
                        <input type="radio" class="form-check-input" name="role" value="<?php echo $role;?>"> Khách hàng
                        <input type="radio" class="form-check-input role" name="role" value="<?php echo $role;?>"> Admin
                    </div>
                    <input type="hidden" name="account_id" value=" $user_id ">
<!--                    <button type="submit" class="mt-3 btn btn-primary" name="sau-khach-hang">Cập nhật</button>-->
                    <input type="submit" value="Cập nhật" class="mt-3 btn btn-primary" name="capnhat">
                    <input type="reset" class="mt-3 btn btn-primary" value="Nhập lại">
                </form>
            </div>
        </div>
    </div>