#include "Utility.h"

Utility::Utility() : Item()
{
	capacity = { 0 };
	maxCapacity = { 10 };
}

Utility::Utility(string name, int id, double weight, 
	int maxCapacity, int capacity)
		:Item(name,id,weight)
{
	this->capacity = capacity;
	this->maxCapacity = maxCapacity;
}

Utility::~Utility() {
	std::cout << "Usuwanie narzêdzia...." << std::endl;
}

void Utility::Show() {
	Item::Show();
	std::cout << "\n ======= Informacja o narzêdziu: =======\n";
}
