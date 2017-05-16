<?php

class User{
	public static function hashPassword($pass){
		return sha1(SALT.md5($pass.SALT).sha1(SALT));
	}
}