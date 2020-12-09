#pragma once
#include <iostream>

struct Pair
{
	int height;
	int width;
	int getArea() {
		return height * width;		
	}
	void Info() {
		std::cout << "\twysokosc: " << height << "\tszerokosc: " << width << std::endl;
		std::cout << "\tpole powierzchni: " << getArea() << std::endl;
	}
};

