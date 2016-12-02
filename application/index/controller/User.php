<?php

namespace app\index\controller;
use think\Model;

class User extends Model
{
	public function userInfo()
	{
		return phpinfo();
	}
}