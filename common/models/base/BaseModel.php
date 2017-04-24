<?php
namespace common\models\base;
use yii\db\ActiveRecord;
/**
 *基础模型
 */
class BaseModel extends ActiveRecord
{
    public function getPages($query, $curPage, $pageSize = 10, $search = null)
    {
        if ($search)
            $query = $query->andFilterWhere($search);
        $data['count'] = $query->count();
        if (!$data['count']) {
            return ['count' => 0, 'curPage' => $curPage, 'pageSize' => $pageSize,
                'start' => 0, 'end' => 0, 'data' => []];
        }
        //当前页
        $curPage = (ceil($data['count'] / $pageSize) < $curPage) ? ceil($data['count'] / $pageSize) : $curPage;
        //起始页，尾页，每页数量
        $data['start'] = ($curPage - 1) * $pageSize + 1;
        $data['end'] = (ceil($data['count'] / $pageSize) == $curPage ? $data['count'] : $curPage * $pageSize);
        $data['pageSize'] = $pageSize;
        //数据
        $data['data'] = $query->offset(($curPage - 1) * $pageSize)
            ->limit($pageSize)
            ->asArray()
            ->all();
        return $data;
    }
}