#pragma once
#include <string>

class ILogin
{
public:
	virtual void LogOn(std::string login, std::string password) = 0;
	virtual void LogOut() = 0;
};

