#pragma once
#include <cstdlib>
#include <ctime>
#include <iostream>
using namespace std;
class Box
{
private:
	int size;
	void Fill(); 
public:
	int* data;
	Box();
	Box(int size);
	Box(const Box& b);
	~Box();
	friend ostream& operator<<(ostream& os, const Box& b); //globalny operator zaprzyjazniony
	Box& operator=(const Box& b);//skladowa klasy
	int GetSize();
};

