<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class products extends CI_Controller {
	public function index()
	{
		$this->load->model('product');
		$products = $this->product->get_all_products(); 
		$this->session->set_userdata('products', $products); 
		$this->load->view('index');
	}
	public function new_products()
	{
		$this->load->view('new');
	}
	public function edit($id)
	{ 
		$this->load->model('product');
		$product = $this->product->get_product_by_id($id);
		$this->load->view('edit', $product);
	}
	public function show($id)
	{
		$this->load->model('product');
		$product = $this->product->get_product_by_id($id);
		$this->load->view('show', $product);
	}
	// The methods below create, update, and destroy from the database
	public function create()
	{
		$this->load->library("form_validation"); 
		$this->form_validation->set_rules("name", "product name", "required|min_length[3]|trim|xss_clean"); 
		$this->form_validation->set_rules("description", "Description", "required|min_length[10]|trim|xss_clean");
		$this->form_validation->set_rules("price", "Price", "required|trim|max_length[7]|xss_clean"); 
		
		if($this->form_validation->run())
		{
			$product['name'] = $this->input->post('name');
			$product['description'] = $this->input->post('description');
			$product['price'] = $this->input->post('price'); 
			$this->load->model('product');
			if($this->product->add_product($product))
			{
				redirect('/');
			} else {
				$this->session->set_flashdata('database_error', 'Sorry. There was an error adding your product');
				redirect('/products/new_products');
			}
		}
		else 
		{
			$this->session->set_flashdata('name', form_error('name'));
			$this->session->set_flashdata('description', form_error('description'));
			$this->session->set_flashdata('price', form_error('price'));
			redirect('/products/new_products');
		}	
	}
	public function destroy($id)
	{
		$this->load->model('product'); 
		$this->product->delete_product($id);
		redirect('/');
	}
	public function update($id)
	{
		$this->load->library("form_validation"); 
		$this->form_validation->set_rules("name", "product name", "required|min_length[3]|trim|xss_clean"); 
		$this->form_validation->set_rules("description", "Description", "required|min_length[10]|trim|xss_clean");
		$this->form_validation->set_rules("price", "Price", "required|trim|max_length[7]|xss_clean"); 
		
		if($this->form_validation->run())
		{
			$product['id'] = $id; 
			$product['name'] = $this->input->post('name');
			$product['description'] = $this->input->post('description');
			$product['price'] = $this->input->post('price'); 
			
			$this->load->model('product');
			if($this->product->update_product($product))
			{
				redirect('/');
			} else {
				$this->session->set_flashdata('database_error', 'Sorry. There was an error updating your product');
				redirect("/products/edit/$id");
			}
		}
		else 
		{
			$this->session->set_flashdata('name', form_error('name'));
			$this->session->set_flashdata('description', form_error('description'));
			$this->session->set_flashdata('price', form_error('price'));
			redirect("/products/edit/$id");
		}
	}
}