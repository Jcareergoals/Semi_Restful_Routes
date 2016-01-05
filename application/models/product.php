<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class product extends CI_Model {
	public function add_product($product)
	{
		$query = "INSERT INTO products (name, description, price, created_at, updated_at) VALUES (?,?,?,?,?)"; 
		$values = array($product['name'], $product['description'], $product['price'], "NOW()", "NOW()"); 
		return $this->db->query($query, $values);
	}
	public function get_all_products()
	{
		$query = "SELECT * FROM products"; 
		return $this->db->query($query)->result_array();
	}
	public function delete_product($id)
	{
		return $this->db->query("DELETE FROM products WHERE id = ?", array($id)); 
	}
	public function get_product_by_id($id)
	{
		return $this->db->query("SELECT * FROM products WHERE id = ?", array($id))->row_array();
	}
	public function update_product($product)
	{ 
		$query = "UPDATE products SET name = ?, description = ?, price = ?, updated_at = ? WHERE id = ?";
		$values = array($product['name'],$product['description'],$product['price'],"NOW()",$product['id']);
		return $this->db->query($query, $values);
	}
}