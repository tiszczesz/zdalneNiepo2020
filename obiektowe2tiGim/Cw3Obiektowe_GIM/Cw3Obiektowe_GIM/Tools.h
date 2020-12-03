#pragma once
#include <string>
#include <vector>
#include <sstream>
#include <utility>
class Tools
{
public:
	static bool InArray(const char z[], int size, const char search);
	static std::vector<std::string> Explode(std::string const& s, char delim);
	static std::vector<std::string> Explode2(std::string const& s, char delim);
};

