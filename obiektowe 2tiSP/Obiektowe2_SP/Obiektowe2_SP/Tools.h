#pragma once
#include <string>
#include <vector>

class Tools
{
public:
	static bool isExist(const char t[],int size, const char znak);
	static std::vector<std::string> explode(std::string const& s, char delim);
};

