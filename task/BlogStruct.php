<?php
// на сайте гости могут просматривать материалы сайта и комментировать их
// просматривать свой профиль и профиль других пользователей.
// Администраторы могут редактировать, добавлять и удалять материалы сайта,
// добавлять или удалять пользователей и редактировать их учетные данные.

abstract class User           // stats revisor
{
	public login;
	public is_online;   // online/offline
	private password;
	public email;
	public status;      // active/banned/etc

	public function getProfile(login){

	}

	public function read(){
		if (this.status == "banned"){
			return ...
		}
		else{
			...
		}
	}

	public function comment(post){

	}

	public function editProfile(login){
		if (!this.isEditAllowed(login)){
			return ...
		}
	}

	abstract protected function isEditAllowed(login);

	public function login(login,password){

	}

	public function logout(){

	}

	public function register(data_array){

	}

}

class Guest extends User
{
	protected function isEditAllowed(login){
		if (this.login != login){
			return false;
		}
		else{
			return true;
		}
	}
}


class Admin extends User
{
	protected function isEditAllowed(login){
		return true;
	}

	public function AddUser(login,password...){

	}

	 public function DeleteUser(login){

	}

	public function addPost(Data){

	}

	public function EditPost(PostId, Data){

	}

	public function DeletePost(PostId){

	}

}
//Добавить в репозиторий(можно дописать).
?>