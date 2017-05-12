<?php  

/**
* 
*/
class CategoryModel extends CI_Model
{

	public function getAllCategory()
	{
		$result = $this->db->get('category');
		if ($result->num_rows() > 0) 
		{
			foreach ($result->result() as $row) 
			{
				$data[] = $row;
			}	
			return $data;
		}
	}

	public function get_single($id)
	{
		$this->db->where('c_id', $id);
		return $this->db->get('category');
	}

	public function create($data)
	{
		
		$data = [

			'name' => $data['name'],
			'description' => $data['desc']

		];

		$this->db->insert('category', $data);

	}

	public function edit($id, $data)
	{

		$data = [

			'name' => $data['name'],
			'description' => $data['desc']

		];

		$this->db->where('c_id', $id);
		$this->db->update('category', $data);

	}

	public function delete($id)
	{
		$this->db->where('c_id', $id);
		$this->db->delete('category');
	}

}

?>