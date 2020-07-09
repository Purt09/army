<?php


namespace core\services\api;


class UserApiService extends MainApiService
{
    /**
     * @param $username string
     * @param $email string
     * @param $password string
     * @param $firstname string
     * @param $lastname string
     * @return array
     */
    public function createUser($username, $email, $password, $firstname, $lastname)
    {
        $param = [
            'users' => [
                '0' => [
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                    'firstname' => $firstname,
                    'lastname' => $lastname
                ]
            ]
        ];
        $request = $this->request('core_user_create_users', $param);
        return json_decode($request, 1);
}

    public function deleteUser($user_id)
    {
        $param = [
            'userids' => [
                '0' => $user_id
            ]
        ];
        return $this->request('core_user_delete_users', $param);
    }
}