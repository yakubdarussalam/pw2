<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->table = 'client_info';

    }
    public function add($data)
    {

        $this->db->insert($this->table, $data);
        return $this->db->insert_id();

    }
    public function update($where, $data)
    {

        return $this->db->update($this->table, $data, $where);

    }

    public function delete($where)
    {

        return $this->db->delete($this->table, $where);

    }
    public function get($where = 0)
    {

        if ($where)

            $this->db->where($where);
        $query = $this->db->get($this->table);
        return $query->row();

    }
    public function get_all($where = 0, $order_by_column = 0, $order_by = 0)
    {

        if ($where)

            $this->db->where($where);
        if ($order_by_column and $order_by)

            $this->db->order_by($order_by_column, $order_by);

        $query = $this->db->get($this->table);
        return $query->result();

    }
    public function get_num_rows($where = 0)
    {

        if ($where)

            $this->db->where($where);

        $query = $this->db->get($this->table);
        return $query->num_rows();

    }

    public function add_batch($data)
    {

        return $this->db->insert_batch($this->table, $data);

    }

}//end model