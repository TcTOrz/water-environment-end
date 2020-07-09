<?php
/*
 * @Author: Li Jian
 * @Date: 2020-07-09 11:15:49
 * @LastEditTime: 2020-07-09 11:15:49
 * @LastEditors: Li Jian
 * @Description:
 * @FilePath: /water-environment-end/app/Repositories/Contracts/UserRepositoryInterface.php
 * @Motto: MMMMMMMM
 */

namespace App\Repositories\Contracts;

interface UserRepositoryInterface extends BaseRepositoryInterface {
    /**
     * 通过邮箱或者正常状态的用户
     * @param $email
     * @return mixed
     */
    public function checkUserByEmail($email);

    /**
     * 根据userId 获取user
     * @param $userId
     * @return mixed
     */
    public function first($userId);

    /**
     * 通过ID获取用户
     * @param $id
     * @return mixed
     */
    public function getUserById($id);
}
