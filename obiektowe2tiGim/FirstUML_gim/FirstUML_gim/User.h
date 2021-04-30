#pragma once
#include <string>

class User
{
protected:
	std::string login;
	std::string password;
	bool isLogin {false};
public:
	User();
	User(std::string login, std::string password);
	std::string Info();
	void LogOn(std::string login, std::string password);
	void LogOut();
};

