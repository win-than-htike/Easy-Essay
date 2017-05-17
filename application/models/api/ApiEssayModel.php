<?php  

/**
* 
*/
class ApiEssayModel extends CI_Model
{

	function getAllEssay($pagesize, $offset)
	{

		$allcount = 0;

		$this->db->join('category','category.c_id=essay.category_id');
		$result_size = $this->db->get('essay');

		$allcount = sizeof($result_size->result());

		
		$this->db->join('category','category.c_id=essay.category_id');
		$this->db->limit($pagesize, $offset);
		$result = $this->db->get('essay');
		if ($result->num_rows() > 0)
		{
			foreach ($result->result() as $row) 
			{
				$data[] = $row;
			}
		}

		return array('data' => $data, 'allcount' => $allcount);

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

}

?>