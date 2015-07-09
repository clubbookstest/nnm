<?php defined('SYSPATH') or die('No direct script access.');

class Model_Services4nav extends Model
{
    protected $_table = 'image4';
 
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
	public function create($name,$desc,$imag,$link)
	{
		$sql = "INSERT INTO ". $this->_table ." (`name`,`desc`,`imag`,`link`,`datemodify`) VALUE(:name,:desc,:imag,:link,:now)";
		DB::query(Database::INSERT,$sql)
		 ->parameters(array(
					':name' => $name,
					':desc'    => $desc,
					':imag' => $imag,
					':link' => $link,
					':now' => date("Y-m-d H:i"),
					
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
	
	public function updat($id,$name,$desc,$imag,$link)
	{
		$sql = "UPDATE ". $this->_table ." SET `name`=:name,`desc`=:desc,`imag`=:imag,`link`=:link,`datemodify`=:now WHERE `id`=:id";
		DB::query(Database::UPDATE,$sql)
		 ->parameters(array(
					':name' => $name,
					':desc'    => $desc,
					':imag' => $imag,
					':link' => $link,
					':id' => (int) $id,
					':now' => date("Y-m-d H:i"),
					))
		->execute();			
	}
	
	
	
	public function getTableName()
	{
		return $this->_table;
	}
}




















