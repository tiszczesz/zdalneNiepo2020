#include "Admin.h"

void Admin::LogOn(std::string login, std::string password) {
	if (this->login == login && this->password == password) isLogin = true;
	else isLogin = false;
}
void Admin::LogOut() {
	isLogin = false;
}
