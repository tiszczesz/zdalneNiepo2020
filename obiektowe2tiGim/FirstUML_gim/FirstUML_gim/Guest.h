#pragma once
#include "User.h"
class Guest : public User
{
private:
	std::string message{"no message"};
public:
	Guest();
	std::string Info(); 
	bool SendMsg(User& user);
	void SetMsq(std::string msg) {
		message = msg;
	}
	std::string GetMsg() {
		return message;
	}
};

