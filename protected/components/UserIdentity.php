<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
        $username=strtolower($this->username);
        $admin=Admin::model()->find('LOWER(username)=?',array($username));
        if($admin===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if(!($admin->password == $this->password))
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->username=$admin->username;
            $this->errorCode=self::ERROR_NONE;
        }
        return $this->errorCode==self::ERROR_NONE;
	}
}