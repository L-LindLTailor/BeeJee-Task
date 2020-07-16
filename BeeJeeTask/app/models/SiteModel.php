<?php
/**
 * Created Using PhpStorm.
 * User: Lind_L.Tailor
 * Date: 13.07.2020
 */

class SiteModel extends Model
{
    public function getCount($status = 'new')
    {
        return $this->db->query("SELECT count(*) as n FROM BeeJeeTasks")->row['n'];
    }

    public function getTasks($offset, $limit,$sort = 'name')
    {
        $sql = "SELECT * FROM BeeJeeTasks order by $sort";
        if($limit != 0)
        {
            $sql .= $this->db->escape(" LIMIT $offset, $limit");
        }
        $data = $this->db->query($sql);
        return $data->rows;
    }

    public function getTask($id = 0)
    {
        $sql = "SELECT * FROM  WHERE id = ".(int)$id;

        $data = $this->db->query($sql);
        return $data->row;
    }

    public function save()
    {
        $result = false; //Это для return
        $name = $this->db->escape($_POST['name']);
        $email = $this->db->escape($_POST['email']);
        $text = $this->db->escape($_POST['text']);
        $sql = "INSERT INTO `BeeJeeTasks` (`id`, `name`, `email`, `text`, `status`) VALUES (NULL, '$name', '$email', '$text', 'new')";
        if($this->db->query($sql))
        {
            $result = true;
        }

        return $result;
    }

    public function set_status($id = 0, $status = 'new')
    {
        $sql = "UPDATE BeeJeeTasks SET status = '$status' WHERE id = ".(int)$id;
        $this->db->query($sql);

    }
}