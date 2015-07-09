<?php defined('SYSPATH') or die('No direct script access.');

class Model_Review extends Model
{
    protected $_table = 'reviews';
 
    /**
     * Get all articles
     * @return array
     */
    public function get_all()
    {
        $sql = "SELECT * FROM ". $this->_table ." WHERE `si`=1 ORDER BY `id` DESC";
 
        return DB::query(Database::SELECT, $sql)
                   ->execute();
    }
	public function get_all_status()
    {
        $sql = "SELECT * FROM ". $this->_table ." ORDER BY `id` DESC";
 
        return DB::query(Database::SELECT, $sql)
                   ->execute();
    }
	public function get_all_main()
    {
        $sql = "SELECT * FROM ". $this->_table ." WHERE `simain`=1";
 
        return DB::query(Database::SELECT, $sql)
                   ->execute();
    }
	public function create($name,$desc,$mark)
	{
		$sql = "INSERT INTO ". $this->_table ." (`name`,`desc`,`mark`) VALUE(:name,:desc,:mark)";
		DB::query(Database::INSERT,$sql)
		 ->parameters(array(
					':name' => $name,
					':desc'    => $desc,
					':mark'    => $mark
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
	
	public function updat($id,$simain,$si)
	{
		$sql = "UPDATE ". $this->_table ." SET `simain`=:simain,`si`=:si WHERE `id`=:id";
		DB::query(Database::UPDATE,$sql)
		 ->parameters(array(
					':simain'    => $simain,
					':si'    => $si,
					':id' => (int) $id,
					))
		->execute();			
	}
	
	
	
	public function getTableName()
	{
		return $this->_table;
	}
}




















