<?php 
class News
{
	public static function getNewsItemById($id)
	{
		$id = intval($id);
		if ($id) {
			$db = Db::getConnection();
			$result = $db->query('SELECT id, name FROM product');
			$i = 0;
		while($row = $result->fetch()) {
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['name'] = $row['name'];
			$i++;
		}

		return $newsList;
	
		}
	}
}