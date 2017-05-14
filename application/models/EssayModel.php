<?php  

/**
* 
*/
class EssayModel extends CI_Model
{

	function getAllEssay()
	{
		$this->load->library('pagination');

		$config['base_url'] = base_url().'essay/index/';
		$config['total_rows'] = $this->db->get('essay')->num_rows();
		$config['pre_page'] = 10;
		$config['num_links'] = 20;
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>'; 

		$this->pagination->initialize($config);

		$this->db->join('category','category.c_id=essay.category_id');
		$result = $this->db->get('essay', $config['pre_page'], $this->uri->segment(3));

		if ($result->num_rows() > 0)
		{
			foreach ($result->result() as $row) 
			{
				$data[] = $row;
			}
			return $data;
		}

	}

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
		$this->db->where('e_id', $id);
		return $this->db->get('essay');
	}

	public function create($essay)
	{
		
		$data = [

			'title' => $essay['title'],
			'user_id' => 1,
			'category_id' => $essay['category_id'],
			'teacher_name' => $essay['teacher_name'],
			'introduction' => $essay['intro'],
			'body' => $essay['body'],
			'conclusion' => $essay['conclusion']

		];

		$this->db->insert('essay', $data);

	}

	public function edit($id, $essay)
	{

		$data = [

			'title' => $essay['title'],
			'user_id' => 1,
			'category_id' => $essay['category_id'],
			'teacher_name' => $essay['teacher_name'],
			'introduction' => $essay['intro'],
			'body' => $essay['body'],
			'conclusion' => $essay['conclusion']

		];

		$this->db->where('e_id', $id);
		$this->db->update('essay', $data);

	}

	public function delete($id)
	{
		$this->db->where('e_id', $id);
		$this->db->delete('essay');
	}

}

?>