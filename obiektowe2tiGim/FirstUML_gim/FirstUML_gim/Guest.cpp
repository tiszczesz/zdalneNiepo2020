#include "Guest.h"

#include <iostream>

Guest::Guest() {
	login = "";
	password = "";
	bool isLogin = true;
}

std::string Guest::Info() {
	return "Jestes gosciem - brak uprawnien";
}

bool Guest::SendMsg(User& user) {
	std::cout << "Przeslano info: " << message << " do: " << user.Info() << std::endl;
	return true;
}

