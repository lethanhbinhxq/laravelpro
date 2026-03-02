<?php

require 'config.php';
class DB
{
    public $conn;

    public function __construct()
    {
        $this->connection();
    }

    public function connection()
    {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->conn->connect_error) {
            die("Kết nối cơ sở dữ liệu không thành công: " . $this->conn->connect_error);
        } else {
            // echo "Kết nối cơ sở dữ liệu thành công";
        }
    }

    function escape_string($str)
    {
        return $this->conn->real_escape_string($str);
    }

    function query($sql)
    {
        return $this->conn->query($sql);
    }

    /*
     * $data = array(
     *  'column1' => value1,
     *  'column2' => value2
     * )
     */
    public function insert($table, $data)
    {
        foreach ($data as $k => $v) {
            $list_field[] = "`{$k}`";
            $list_value[] = "'{$this->escape_string($v)}'";
        }

        $list_field = implode(',', $list_field);
        $list_value = implode(',', $list_value);

        $sql = "INSERT INTO {$table} ({$list_field}) VALUES ({$list_value})";

        if ($this->query($sql)) {
            echo $this->conn->insert_id;
        } else {
            echo "Lỗi: " . $this->conn->error;
        }
        echo $sql;
    }

    public function get($table, $field = array(), $where = "")
    {
        $field = !empty($field) ? implode(",", $field) : "*";
        $where = !empty($where) ? "WHERE {$where}" : "";

        $sql = "SELECT {$field} FROM {$table} {$where}";

        $result = $this->query($sql);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            if (count($data) > 1) {
                return $data;
            }
            return $data[0];
        } else {
            echo "Không tìm thấy bản ghi nào";
        }
    }

    public function update($table, $data, $where = "")
    {
        $data_insert = array();
        foreach ($data as $k => $v) {
            $data_insert[] = "`{$k}` = '{$this->escape_string($v)}'";
        }
        $data_insert = implode(",", $data_insert);
        $where = !empty($where) ? "WHERE {$where}" : "";

        $sql = "UPDATE {$table} SET {$data_insert} {$where}";
        if ($this->query($sql)) {
            echo "Cập nhật thành công";
        } else {
            echo "Lỗi: " . $this->conn->error;
        }
    }

    public function delete($table, $where = "")
    {
        $where = !empty($where) ? "WHERE {$where}" : "";

        $sql = "DELETE FROM {$table} {$where}";

        if ($this->query($sql)) {
            echo "Xóa thành công";
        } else {
            echo "Lỗi: " . $this->conn->error;
        }
    }
    
}

$db = new DB();
// $data = array(
//     'username' => 'ltb',
//     'password' => md5('ltb!@#'),
// );

// $db->insert('tbl_users', $data);

// $users = $db->get("tbl_users", array('username', 'password'), "id=1");
// echo "<pre>";
// print_r($users);
// echo "</pre>";

// $data = array(
//     'username' => 'Lê Thanh Bình',
// );
// $db->update("tbl_users", $data, "id=1");

$db->delete("tbl_users", "id=2");