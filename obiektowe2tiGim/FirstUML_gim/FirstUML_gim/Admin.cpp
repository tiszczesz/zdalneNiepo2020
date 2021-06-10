#include "Admin.h"

Admin::Admin():User() {
	
}

Admin::Admin(std::string login, std::string password, std::vector<std::string> privilage)
	:User(login,password)
{
	this->privilage = privilage;
}

std::string Admin::Info() {
	return User::Info();
	//todo
}

void Admin::LogOn(std::string login, std::string password) {
	if (this->login == login && this->password == password) isLogin = true;
	else isLogin = false;
}
void Admin::LogOut() {
	isLogin = false;
}
