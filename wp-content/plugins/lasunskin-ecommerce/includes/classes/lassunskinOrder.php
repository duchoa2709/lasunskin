<?php 
class lasunskinOrder{
    private $_orders = "";
    public function __construct(){
        global $wpdb;
        $this->_orders = $wpdb->prefix.'orders';//wp_orders
    }

    public function all() {
        global $wpdb;
        $sql = "SELECT * FROM $this->_orders";
        $items = $wpdb->get_results($sql);
        return $items;
    }

    public function paginate($limit = 10, $page = 1) {
        global $wpdb;

        //lay tong so record
        $sql = "SELECT count(id) FROM $this->_orders";
        $total = $wpdb->get_var($sql);

        //tinh so trang
        $totalPage  = ceil($total/$limit);
        $offset     = ($page * $limit1) - $limit;

        //lay du lieu
        $sql = "SELECT * FROM $this->_orders ORDER BY id DESC LIMIT $limit OFFSET $offset";

        $items = $wpdb->get_results($sql);
        return $items;

    }

    public function find($id) {
        global $wpdb;
        $sql = "SELECT * FROM $this->_orders WHERE id = $id";
        return $wpdb->get_row($sql);
    }

    public function save($data){
        global $wpdb;
        $wpdb->insert($this->_orders,$data);
        $lastId = $wpdb->insert_id;
        $item = $this->find($lastId);
        return $item;
    }

    public function update($id,$data) {
        global $wpdb;
        $wpdb->update($this->_orders,$data,array('id' => $id));
        return true;
    }

    public function destroy($id) {
        global $wpdb;
        $wpdb->delete($this->_orders,['id' => $id]);
        return true;
    }
}