<?php
    class Database{
        private $hostname = 'localhost';
        private $username = 'root';
        private $pass = '';
        private $dbName = 'test2';

        private $conn = NULL;
        private $result = NULL;


        public function connect(){
            $this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbName);
            if(!$this->conn){
                echo "Kết nối thất bại!!";
                exit();
            }
            else{
                mysqli_set_charset($this->conn, 'utf8');
            }
            return $this->conn;
        }

        public function execute($sql){
            $this->result = $this->conn->query($sql);
            return $this->result;
        }
        public function getData(){
            if($this->result){
                $data = mysqli_fetch_array($this->result);
            }else{
                $data = 0;
            }
            return $data;
        }
        public function getAllData(){
            if(!$this->result){
                $data = 0;
            }else{
                while($datas = $this->getData()){
                    $data[] = $datas;
                }
            }
            return $data;
        }
        public function AddCategory($name, $parent){
            $sql = "INSERT INTO category(id,name_category,parent_category)VALUES(null,'$name','$parent')";
            return $this->execute($sql);
        }
        public function UpdateCategory($id ,$name, $parent){
            $sql = "UPDATE category SET  name_category = '$name', parent_category = '$parent' WHERE id = '$id'";
            return $this->execute($sql);
        }
    }
?>