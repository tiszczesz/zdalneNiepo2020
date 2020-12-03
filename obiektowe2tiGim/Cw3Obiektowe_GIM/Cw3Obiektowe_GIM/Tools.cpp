#include "Tools.h"
#include <cctype>
bool Tools::InArray(const char z[], int size, const char search) {
	for(int i=0;i<size;i++) {
		if (z[i] == tolower(search)) return true;
	}
	return false;
}
std::vector<std::string> Tools::Explode(std::string const& s, char delim)
{
    std::vector<std::string> result;
    std::istringstream iss(s);

    for (std::string token; std::getline(iss, token, delim); )
    {
        result.push_back(std::move(token));
    }

    return result;
}
std::vector<std::string> Tools::Explode2(std::string const& s, char delim)
{
    std::vector<std::string> result;
    std::string word = "";
    for(auto znak : s) {
	    if(znak==delim) {
            result.push_back(word);
            word = "";
	    }else {
            word = word + znak;
	    }
    }
    result.push_back(word);
    return result;
}

