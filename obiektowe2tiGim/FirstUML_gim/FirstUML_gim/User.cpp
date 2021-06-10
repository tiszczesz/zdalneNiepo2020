#include "User.h"

#include <iostream>
#include <ostream>

#include "Guest.h"

std::string User::Info()
{
	std::string state = isLogin ? "zalogowany" : "niezalologowany";
    return "User: " + login + " haslo: " + password +" "+state+  "\n";
}


User::~User() {
	std::cout << "Niszczenie obiektu user....." << std::endl;
}

User::User() {
	login = "";
	password = "";
	
}
User::User(std::string login, std::string password) {
	
	this->login = login;
	this->password = password;
}


