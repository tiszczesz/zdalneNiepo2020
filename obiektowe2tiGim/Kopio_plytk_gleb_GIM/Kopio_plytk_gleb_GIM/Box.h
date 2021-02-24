#pragma once
#include <cstdlib>
#include <ctime>
#include <iostream>
using namespace std;
class Box
{
private:
	int size;
void Fill() {
	srand(time(0));
	for (int i = 0; i < size; i++) {
		data[i] = rand() % 100;
	}
}
public:
	int* data;
	Box() {
		size = 10;
		data = new int[size];
		Fill();
	}
	~Box() {
		cout << "niszczenie pudelka...." << endl;
		delete[] data;
		data = nullptr;
	}
};

