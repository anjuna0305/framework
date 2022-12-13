<?php

/**
 * 
 */
class Model extends Database
{
		function __construct()
	{
		// code...
		if(!property_exists($this, 'table')){
			$this->table = strtolower($this::class);//returns current instance' name
		}
	}

	public function where($column,$value)
	{
		// $column=addslashes($column);
		$query = "select * from $this->table where " .$column. "= '".$value."'";
		echo "$query";
		return $this->query($query);
	}

	public function find_all()
	{
		$query = "select * from $this->table";
		return $this->query($query);
	}

	public function insert($column,$value)
	{
		// $column=addslashes($column);
		$query = "select * from $this->table where " .$column. "= '".$value."'";
		echo "$query";
		return $this->query($query);
	}

	public function update($id,$data)
	{
		// $column=addslashes($column);
		$query = "select * from $this->table where " .$column. "= '".$value."'";
		echo "$query";
		return $this->query($query);
	}

	public function delete($column,$value)
	{
		// $column=addslashes($column);
		$query = "select * from $this->table where " .$column. "= '".$value."'";
		echo "$query";
		return $this->query($query);
	}
}