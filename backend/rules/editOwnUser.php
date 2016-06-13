<?php
namespace backend\rules;

use Yii;
use yii\rbac\Rule;

class editOwnUser extends Rule
{
    /**
     * @param string|integer $user 用户 ID.
     * @param Item $item 该规则相关的角色或者权限
     * @param array $params 传给 ManagerInterface::checkAccess() 的参数
     * @return boolean 代表该规则相关的角色或者权限是否被允许
     */
    public function execute($user, $item, $params)
    {
        //获取编辑的用户ID
        $editUserId = Yii::$app->request->get('id',0);
        //如果编辑的不是自己，则返回fasle
        if($user != $editUserId){
            return false;
        }
        
        return true;
    }
}