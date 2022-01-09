<?php
    require_once 'model/model.php';
    class controller{
        function index(){
            $model = new model;
            $datas = $model->getAllDatas();
            require_once('view/index.php');
        }

        function add(){
            require_once 'view/add.php';
            if(isset($_POST['txtTen_dg'])){
                $hovaten = $_POST['txtTen_dg'];
                $gioitinh = $_POST['txtgioitinh'];
                $namsinh = $_POST['txtnamsinh'];
                $nghenghiep = $_POST['txtnghenghiep'];
                $ngaycapthe = $_POST['txtngaycap'];
                $ngayhethan = $_POST['txtngayhethan'];
                $diachi = $_POST['txtdiachi'];
                if(empty($hovaten)){
                    echo("<script>alert('Ban phai dien du thong tin');</script>");
                }
                else{
                    $data = [
                        'hovaten' => $hovaten,
                        'gioitinh' => $gioitinh,
                        'namsinh' => $namsinh,
                        'nghenghiep' => $nghenghiep,
                        'ngaycapthe' => $ngaycapthe,
                        'ngayhethan' => $ngayhethan,
                        'diachi' => $diachi
                    ];
                    $model = new model;
                    $result = $model->addData($data);
                    if($result){
                        header("location:index.php");
                        exit();
                    }
                    else{
                        $_SESSION['error'] = "Thêm mới thất bại";
                        header("error.php");
                    }
                    
                }
                
            }
        }

        function edit(){
            $model = new model;
            $id = $_GET['id'];
            $datas = $model->getData($id);
            require_once('view/edit.php');
            if (isset($_POST['txtTen_dg'])) {
                $hovaten = $_POST['txtTen_dg'];
                $gioitinh = $_POST['txtgioitinh'];
                $namsinh = $_POST['txtnamsinh'];
                $nghenghiep = $_POST['txtnghenghiep'];
                $ngaycapthe = $_POST['txtngaycap'];
                $ngayhethan = $_POST['txtngayhethan'];
                $diachi = $_POST['txtdiachi'];
                $data = [
                    'madg' => $id,
                    'hovaten' => $hovaten,
                    'gioitinh' => $gioitinh,
                    'namsinh' => $namsinh,
                    'nghenghiep' => $nghenghiep,
                    'ngaycapthe' => $ngaycapthe,
                    'ngayhethan' => $ngayhethan,
                    'diachi' => $diachi
                ];

                $result = $model->updateData($data);
                if($result){
                    header("location:index.php");
                    exit();
                }
                else{
                    $_SESSION['error'] = "Chỉnh sửa thất bại";
                    header("error.php");
                }
            }
        }

        function delete(){
            $model = new model;
            $id = $_GET['id'];
            $result = $model->deleteData($id);
            if($result){
                header("location:index.php");
                exit();
            }
            else{
                $_SESSION['error'] = "Xóa thất bại";
                header("error.php");
            }
        }
    
    }
