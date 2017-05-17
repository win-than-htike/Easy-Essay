<?php  

/**
* 
*/
class UserModel extends CI_Model
{

	public function login($data)
	{
		$this->db->where('email', $data['email']);
		$this->db->where('password', $data['password']);
		$user = $this->db->get('user');
		if ($user->num_rows() > 0) {
			return $user->row();
		}else {
			return NULL;
		}
	}

	// public function get_single($id)
	// {
	// 	$this->db->where('c_id', $id);
	// 	return $this->db->get('category');
	// }

	// public function create($data)
	// {
		
	// 	$data = [

	// 		'name' => $data['name'],
	// 		'description' => $data['desc'],
	// 		'create_date' => date('Y-m-d HH:i:s'),
	// 		'update_date' => date('Y-m-d HH:i:s')

	// 	];

	// 	$this->db->insert('category', $data);

	// }

	// public function edit($id, $data)
	// {

	// 	$data = [

	// 		'name' => $data['name'],
	// 		'description' => $data['desc'],
	// 		'update_date' => date('Y-m-d HH:i:s')

	// 	];

	// 	$this->db->where('c_id', $id);
	// 	$this->db->update('category', $data);

	// }

	// public function delete($id)
	// {
	// 	$this->db->where('c_id', $id);
	// 	$this->db->delete('category');
	// }

}

?>