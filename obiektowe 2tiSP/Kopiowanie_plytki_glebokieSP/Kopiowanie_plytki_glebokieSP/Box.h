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
	Box(const Box& b);//konstruktor kopiujacy
	friend std::ostream& operator<<(std::ostream& os, const Box& b);
	Box& operator=(const Box& b);//operator przypisania
	~Box();
	int GetSize() {
		return size;
	}
};

