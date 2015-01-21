<?php
abstract class Housing
{
	public Id; // Номер жилья
	public square; //площадь
	public quality; //Состояние жилья(слабо пригодное, идеальное и т.д.)
	public number_of_floors; //количество этажей
	public number_of_rooms; //количество комнат(для комнаты это поле = 1)
	public price_per_sqr_meter; //цена за квадратный метр
	public isAnimalsAllowed; //дозволены ли животные
	public rent_term; //срок сдачи

	abstract public function CountPrice(){ //подсчет цены дневной оплаты за жилье
    
	}

	public function setRentTerm(term, Tenant_name){  //установка срока сдачи жилья 
		this.rent_term = term;
		Tenant_name.Housing_Id_Rented = this.Id;  // установка статуса арендованного жилья пользователю
  		return ...
	}

	public function isBusy(rent_term){ //жилье считается занятым, если срок сдачи больше 0
		if(this.rent_term > 0){
		 return true;
		}
		else{
			return false;
		}
	}

}

class House extends Housing
{
	public yard_square; //плозадь двора
	public price_per_yard_sqr_meter; //цена за квадратный метр двора
	public yard_quality; //состояние двора

	public function CountPrice(){ //подсчет цены дома(с учетом цены двора и жилого помещения)
		return this.price_per_yard_sqr_meter*this.yard_square+this.square*this.price_per_sqr_meter;
	}
}

class Apartment extends Housing
{
	public floor; //этаж квартиры
	public function CountPrice(){ //подсчет цены квартиры
		return this.square*this.price_per_sqr_meter;
	}
}

class Room extends Housing
{
	public floor; //этаж квартиры в которой комната
	public function CountPrice(){ //подсчет цены комнаты
		return this.square*this.price_per_sqr_meter;
	}
}

abstract class User  // Абстрактный класс пользователь, от которого будут наследоваться классы Аредатор и Риелтор
{
	public login; // Логин пользователя
	protected password; // Пароль пользователя
	public email; // эл. почта пользователя
	public tel_number; // номер телефона пользователя
	public is_online;

	public function getProfile(login){  // Чтение данных профайла

	}

	public function read(){ // Просмотр жилья
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

class Realtor extends User // Риелтор (Имеет полномочия администратора)
{
   protected function isEditAllowed(login){
		return true;
	}

	public function AddUser(login,password...){

	}

	 public function DeleteUser(login){

	}

	public function setHousingRentTerm(Housing_name,term){ // Установка срока аренды жилья и статуса аренды для арендатора
		Housing_name.setRentTerm(term, Tenant_name);
	}

}

class Tenant extends User //Арендатор
{
	public Housing_Id_Rented;

	protected function isEditAllowed(login){
		if (this.login != login){
			return false;
		}
		else{
			return true;
		}
	}

}

class Guest // Незарегистрированный гость только с возможностью просмотра жилья
{
	public login;

	public function read(){
		if (this.status == "banned"){
			return ...
		}
		else{
			...
		}
	}

	public function register(data_array){

	}
}