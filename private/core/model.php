<?php

/**
 * 
 */
class Model extends Database
{
	public $errors = array();

	public function __construct()
	{
		// code...
		if (!property_exists($this, 'table')) {
			$this->table = strtolower($this::class); //returns current instance' name
		}
	}

	public function where($column, $value)
	{
		$column = addsLashes($column);
		$query = "select * from $this->table where $column = :value";
		return $this->query($query, [':value' => $value]);
	}

	public function find_all()
	{
		$query = "select * from $this->table";
		return $this->query($query);
	}

	public function insert($data)
	{
		$keys = array_keys($data);
		$columns = implode(',', $keys);
		$values = implode(',:', $keys);

		$query = "insert into $this->table ($columns) values (:$values)";

		return $this->query($query, $data);
	}

	public function update($id, $data)
	{
		$str = "";
		foreach ($data as $key => $value) {
			$str .= $key . '=:' . $key . ',';
		}

		$str = trim($str, ",");
		echo $str;

		$data['id'] = $id;

		$query = "update $this->table set $str where id = :id";
		return $this->query($query, $data);
	}

	public function delete($id)
	{
		$query = "delete from $this->table where id = :id";
		$data['id'] = $id;
		return $this->query($query, $data);
	}
}
