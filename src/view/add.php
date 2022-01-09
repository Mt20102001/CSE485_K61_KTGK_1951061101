<?php include("template/header.php"); ?>
<div class="container">
    <h1 class="text-center text-primary mt-5">Thêm dữ liệu</h1>
    <form method="post">
        <div class="form-group">
            <label for="txtTen_dg">Tên độc giả</label>
            <input class="form-control" type="text" placeholder="Tên Độc Giả" id="txtTen_dg" name="txtTen_dg">
        </div>

        <div class="form-group">
            <label for="txtgioitinh">Giới tính</label>
            <input class="form-control" type="text" id="txtgioitinh" name="txtgioitinh" value="">
        </div>

        <div class="form-group">
            <label for="txtnamsinh">Năm sinh</label>
            <input class="form-control" type="text" id="txtnamsinh" name="txtnamsinh" value="">
        </div>

        <div class="form-group">
            <label for="txtnghenghiep">Nghề nghiệp</label>
            <input class="form-control" type="text" id="txtnghenghiep" name="txtnghenghiep" value="">
        </div>

        <div class="form-group">
            <label for="txtngaycap">Ngày cấp thẻ</label>
            <input class="form-control" type="text" id="txtngaycap" name="txtngaycap" value="">
        </div>

        <div class="form-group">
            <label for="txtngayhethan">Ngày hết hạn</label>
            <input class="form-control" type="text" id="txtngayhethan" name="txtngayhethan" value="">
        </div>

        <div class="form-group">
            <label for="txtdiachi">Địa chỉ</label>
            <input class="form-control" type="text" id="txtdiachi" name="txtdiachi" value="">
        </div>

        <button class="btn btn-primary" type="submit">Lưu</button>
    </form>
</div>

<?php include("template/footer.php"); ?>