#pragma once
#include <vector>

#include "User.h"
class Admin : public User
{
private:
	std::vector<std::string> privilage;
public:
	std::vector<std::string>& GetPrivilages() {
		return privilage;
	}
	Admin();
	Admin(std::string login, std::string password,
		std::vector<std::string> privilage);
	std::string Info() override;
	void LogOn(std::string login, std::string password) override;
	void LogOut() override;
};

