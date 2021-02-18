#pragma once
#include <ostream>
#include <iostream>

class Box
{
private:
	
	int size;
	void Fill();
public:
	int* data;
	Box();
	Box(int size);
	friend std::ostream& operator<<(std::ostream& os, const Box& b);
	~Box();
};

