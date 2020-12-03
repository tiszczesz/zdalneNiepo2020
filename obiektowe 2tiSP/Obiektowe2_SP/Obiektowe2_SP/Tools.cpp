#include "Tools.h"
#include <cctype>
#include <string>
#include <vector>
#include <sstream>
#include <utility>

bool Tools::isExist(const char t[],int size, const char znak) {
	for(int i=0;i<size;i++) {
		if (t[i] == tolower(znak)) return true;
	}
	return false;
}
std::vector<std::string> Tools::explode(std::string const& s, char delim)
{
    std::vector<std::string> result;
    std::istringstream iss(s);

    for (std::string token; std::getline(iss, token, delim); )
    {
        result.push_back(std::move(token));
    }

    return result;
}

