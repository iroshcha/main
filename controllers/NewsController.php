
<?php 
include_once ROOT.'/models/news.php';
class NewsController
{
	
	public function actionIndex()
	{
		$newsList = array();
		$newsList = News::getNewsList();

		echo "<pre>";
		print_r($newsList);
		echo "</pre>";
		return true;
	}

	public function actionView($id)
	{
		if ($id){
			$newsList = News::getNewsItemById($id);
			echo "<br>actionView";
			echo "<br>" . $newsList[$id]['name'];
		}
	
	}
}
