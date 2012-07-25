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
            //Selecionando o usuário especificado pelo formulario
            //Cria um active record para manipulação 
            $users = Users::model()->findByAttributes(array('login'=>$this->username));
            
            if($users===null)
                    $this->errorCode=self::ERROR_USERNAME_INVALID;
            else if($users->senha!==$this->password)
                    $this->errorCode=self::ERROR_PASSWORD_INVALID;
            else
            {                                      
                $this->setState('logged', true);
                $this->setState('acesso', $users->acesso);
                $this->setState('nome', $users->nome);
                $this->setState('login', $users->login);
                $this->setState('permissao', $users->id_permissao);
                $this->setState('id', $users->id);
                $users->acesso = date('Y-m-d H:i:s');
                $users->save();
                $this->errorCode=self::ERROR_NONE;
            }

            return !$this->errorCode;
	}
}