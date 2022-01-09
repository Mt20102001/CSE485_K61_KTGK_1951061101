<?php
    require_once 'config/db.php';
    class model{
        public function connectDb() {
            $connection = mysqli_connect(DB_HOST, DB_DataNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
            return $connection;
        }
    
        public function closeDb($connection = null) {
            mysqli_close($connection);
        }

        public function getAllDatas(){

            $conn = $this->connectDb();

            $sql = "SELECT * FROM docgia";
            $result = mysqli_query($conn,$sql);

            $arr_datas = [];

            if(mysqli_num_rows($result) > 0){
                $arr_datas = mysqli_fetch_all($result, MYSQLI_ASSOC);
            }
            $this->closeDb($conn);

            return $arr_datas;
        }

        public function addData($data = []){
            $conn = $this->connectDb();
            $sql = "INSERT INTO docgia(hovaten,gioitinh,namsinh,nghenghiep,ngaycapthe,ngayhethan,diachi) VALUES ('{$data['hovaten']}', '{$data['gioitinh']}', '{$data['namsinh']}', '{$data['nghenghiep']}', '{$data['ngaycapthe']}', '{$data['ngayhethan']}', '{$data['diachi']}')";
            $result = mysqli_query($conn,$sql);
            $this->closeDb($conn);
            return $result;
        }


        public function getData($id){
            $conn = $this->connectDb();

            $sql = "SELECT * FROM docgia WHERE madg = '$id'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0)
                $data = mysqli_fetch_assoc($result);
            $this->closeDb($conn);
            return $data;
        }

        public function updateData($data = []){
            $conn = $this->connectDb();

            $sql = "UPDATE docgia SET hovaten='{$data['hovaten']}', gioitinh='{$data['gioitinh']}', namsinh='{$data['namsinh']}', nghenghiep='{$data['nghenghiep']}', ngaycapthe='{$data['ngaycapthe']}',ngayhethan='{$data['ngayhethan']}',diachi='{$data['diachi']}' WHERE madg = '{$data['madg']}'";
            $result = mysqli_query($conn,$sql);

            $this->closeDb($conn);
            return $result;
        }

        function deleteData($id){
            $conn = $this->connectDb();

            $sql = "DELETE FROM docgia WHERE madg = '$id'";
            $result = mysqli_query($conn,$sql);

            $this->closeDb($conn);
            return $result;
        }
    }
?>