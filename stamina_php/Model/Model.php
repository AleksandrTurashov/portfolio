<?php
    require_once("config.php");

    class Model{

        protected function connect(){
            $link = mysqli_connect(HOST, USER, PASSWORD, DB);
            if(!$link){
                die();
            }
            return $link;
        }

        protected function statusRequest($sql){
            $result = mysqli_query($this->connect(), $sql);
            return $result;
        }

        protected function getData($sql){
            $result = mysqli_query($this->connect(), $sql);
            $data = [];
            while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                $data[] = $row;
            }
            return $data;
        }

        protected function setData($sql){
            $status=[];
            $result = mysqli_query($this->connect(), $sql);
            if($result)
                return $status=['status'=>'success'];
            else
                return $status=['status'=>'error'];
        }
    }