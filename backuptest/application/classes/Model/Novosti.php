<?php defined('SYSPATH') or die('No direct script access.');

class Model_Novosti extends Model
{
    protected $_table = 'news';
 
    /**
     * Get all articles
     * @return array
     */
    public function get_all()
    {
        $sql = "SELECT * FROM ". $this->_table;
 
        return DB::query(Database::SELECT, $sql)
                   ->execute();
    }
	public function create($name,$desc,$src)
	{
		$sql = "INSERT INTO ". $this->_table ." (`name`,`desc`,`src`) VALUE(:name,:desc,:src)";
		DB::query(Database::INSERT,$sql)
		 ->parameters(array(
					':name' => $name,
					':desc'    => $desc,
					':src'    => $src
					))
		->execute();			
	}
	public function del($id)
	{
		
			$sql="DELETE FROM ". $this->_table ." where `id`=:id";
			DB::query(Database::DELETE,$sql)
			->parameters(array(
						':id'=>(int) $id,
						))
			->execute();
		
	}
	public function selectbyid($id)
	{
		$sql = "SELECT * FROM ". $this->_table ." WHERE `id` = :id";
		 
		return DB::query(Database::SELECT,$sql,FALSE)
					->parameters(array(
						':id'=>(int) $id,
						))
					->execute();
		
		 
	}
	
	public function updat($id,$name,$desc,$src)
	{
		$sql = "UPDATE ". $this->_table ." SET `name`=:name,`desc`=:desc,`src`=:src WHERE `id`=:id";
		DB::query(Database::UPDATE,$sql)
		 ->parameters(array(
					':name' => $name,
					':desc'    => $desc,
					':src'    => $src,
					':id' => (int) $id,
					))
		->execute();			
	}
	
	
	
	public function getTableName()
	{
		return $this->_table;
	}
}




















