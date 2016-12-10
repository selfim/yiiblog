<?php
namespace frontend\models;
use common\models\UserModel;
use yii\base\Model;
use Yii;
use yii\helpers\Html;
/**
 * 文章表单模型
 */
class PostForm extends Model
{
	public $id;
	public $title;
	public $content;
	public $label_img;
	public $cat_id;
	public $tags;

	public $_lastError = "";
	public function rules()
	{
		return [
			[['id','title','content','cat_id'],'required'],
			[['id','cat_id'],'integer'],
			['title','string','min'=>4,'max'=>50],
		];
	}

	public function attributeLabels()
	{
		return [
		'id' =>Yii::t('post','ID'),
		'title'=>Yii::t('post','title'),
		'content'=>Yii::t('post','content'),
		'label_img'=>Yii::t('post','label_img'),
		'tags'=>Yii::t('post','tags'),
		'cat_id'=>Yii::t('post','cat_id'),
		];
	}
}