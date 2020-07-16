<?php
/**
 * Created Using PhpStorm.
 * User: Lind_L.Tailor
 * Date: 13.07.2020
 */

class AdminModel extends Model
{
    public function login()
    {
        $result = false;
        if(trim($_POST['login']) == ADMIN_LOGIN && $_POST['pass'] == ADMIN_PASS)
        {
            $result = true;
        }
        return $result;
    }

    public function getTasks()
    {
        $sql = "SELECT * FROM BeeJeeTasks";
        $data = $this->db->query($sql);
        return $data->rows;
    }

    public function getTask($id = 0)
    {
        $sql = "SELECT * FROM BeeJeeTasks WHERE id = ".(int)$id;

        $data = $this->db->query($sql);
        return $data->row;
    }

    public function save()
    {
        $result = false;
        $text = $this->db->escape($_POST['text']);
        $status = 'new';
        if(isset($_POST['done']))
        {
            $status = 'success';
        }
        $sql = "UPDATE BeeJeeTasks SET text = '$text',status = '$status' WHERE id = ".(int)$_POST['id'];
        if($this->db->query($sql))
        {
            $result = true;
        }
        return $result;
    }
}