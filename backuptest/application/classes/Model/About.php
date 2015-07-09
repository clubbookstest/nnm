<?php defined('SYSPATH') or die('No direct script access.');

class Model_About extends Model
{
    protected $_table = 'about';
 
    /**
     * Get all articles
     * @return array
     */
    public function get_all()
    {
        $sql = "SELECT * FROM ". $this->_table ." LIMIT 1";
 
        return DB::query(Database::SELECT, $sql)
                   ->execute();
    }
	public function create($src)
	{
		$sql = "INSERT INTO ". $this->_table ." (`src`) VALUE(:src)";
		DB::query(Database::INSERT,$sql)
		 ->parameters(array(
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
	
	public function updat($id,$src)
	{
		$sql = "UPDATE ". $this->_table ." SET `src`=:src WHERE `id`=:id";
		DB::query(Database::UPDATE,$sql)
		 ->parameters(array(
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




















