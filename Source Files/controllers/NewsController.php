<?php

include_once(ROOTSF . '/models/News.php');

/**
 *
 */
class Controller
{

	public function actionIndex ()
	{
        $array = News::getAllNews();
        $newsList = $array[0];
        $category_item = $array[1];
        include_once (ROOTSF.'/views/news/index.php');

		return true;
	}
}
