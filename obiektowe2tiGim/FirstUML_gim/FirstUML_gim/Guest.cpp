#include "Guest.h"

Guest::Guest() {
	login = "";
	password = "";
	bool isLogin = true;
}

std::string Guest::Info() {
	return "Jestes gosciem - brak uprawnien";
}

