<?php include("template/header.php"); ?>
<h1 class="text-center text-info mt-5">Quản lý thư viện</h1>
<div class="container">
    <div>
        <a class="btn btn-primary" href="index.php?act=add">Thêm</a>
    </div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">Mã độc giả</th>
                <th scope="col">Tên độc giả</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Năm sinh</th>
                <th scope="col">Nghề nghiệp</th>
                <th scope="col">Ngày cấp thẻ</th>
                <th scope="col">Ngày hết hạn</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Sửa</th>
                <th scope="col">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($datas as $data) {
            ?>
                <tr>
                    <th scope="row"><?php echo $data['madg']; ?></th>
                    <td><?php echo $data['hovaten']; ?></td>
                    <td><?php echo $data['gioitinh']; ?></td>
                    <td><?php echo $data['namsinh']; ?></td>
                    <td><?php echo $data['nghenghiep']; ?></td>
                    <td><?php echo $data['ngaycapthe']; ?></td>
                    <td><?php echo $data['ngayhethan']; ?></td>
                    <td><?php echo $data['diachi']; ?></td>
                    <td><a href="index.php?act=edit&id=<?php echo $data['madg']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a href="index.php?act=delete&id=<?php echo $data['madg']; ?>"><i class="bi bi-trash"></i></a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
<?php include("template/footer.php"); ?>