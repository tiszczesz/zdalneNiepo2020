#include "Box.h"

void Box::Fill() {
	srand(time(0));
	for (int i = 0; i < size; i++) {
		data[i] = rand() % 100;
	}
}
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
Box::~Box() {
	cout << "niszczenie pudelka...." << endl;
	delete[] data;
	data = nullptr;
}
Box::Box(const Box& b) {
	size = b.size;
	//data = b.data; tylko kopiwanie adresu
	data = new int[size];
	for(int i=0; i<size; i++) {
		data[i] = b.data[i];
	}
}

ostream& operator<<(ostream& os, const Box& b) {
	os << "Zawartosc pojemnika:" << endl;
	for(int i=0;i<b.size;i++) {
		os << b.data[i] << " ";
	}
	os << endl;
	return os;
}
Box& Box::operator=(const Box& b) {
	if(this != &b) {
		size = b.size;
		//data = b.data; tylko kopiwanie adresu
		delete[] data;
		data = nullptr;
		data = new int[size];
		for (int i = 0; i < size; i++) {
			data[i] = b.data[i];
		}
	}
	
	return *this;
}

int Box::GetSize() {
	return size;
}


