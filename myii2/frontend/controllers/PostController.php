<?php
namespace frontend\controllers;

use Yii;
use frontend\controllers\base\BaseController;
use frontend\models\PostForm;
use yii\helpers\Html;
use common\models\CatModel;
class PostController extends BaseController
{
	/**
	 * 文章列表
	 */
	public function actionIndex()
	{
		return $this->render('index');
	}
	/**
	 * 创建文章
	 * @return string
	 */
	public function actionCreate()
	{
		$model = new PostForm();
		//获取分类
		$cat =CatModel::getAllCats();
		return $this->render('create',['model'=>$model,'cat'=>$cat]);
	}
}