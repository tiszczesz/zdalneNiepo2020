#include "Box.h"
#include <cstdlib>
#include <ctime>

Box::Box() {
	size = 10;
	data = new int[size];
	Fill();
}
Box::Box(int size) {
	this->size = size;
	data = new int[size];
	Fill();
}
void Box::Fill() {
	srand(time(0));
	for(int i=0;i<size;i++) {
		data[i] = rand() % 100;
	}
}
std::ostream& operator<<(std::ostream& os, const Box& b) {
	os << "Zawartosc Boxa:" << std::endl;
	for(int i=0;i<b.size;i++) {
		os << b.data[i] << " ";
	}
	os << std::endl;
	return os;
}
Box::~Box() {
	std::cout << "Niszczenie obiektu Box...." << std::endl;
	delete[] data;
	data = nullptr;
}
Box::Box(const Box& b) {
	size = b.size;
	//data = b.data; tak by bylo bez naszej ingerencji
	data = new int[size];
	for(int i=0;i<size;i++) {
		data[i] = b.data[i];
	}
}
Box& Box::operator=(const Box& b) {
	size = b.size;
	data = new int[size];
	for (int i = 0; i < size; i++) {
		data[i] = b.data[i];
	}
	return *this;
}






