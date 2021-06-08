#include "Armour.h"

Armour::Armour():Item() {
	durability = 0;
	maxDurability = 100;
}

void Armour::Show() {
	Item::Show();
	std::cout << "\tAktualna wytrzymalosc: " << durability << std::endl;
	std::cout << "\tMaksymalna wytrzymalosc: " << maxDurability << std::endl;
}

Armour::Armour(string name, int id, double weight, double durability, double maxDurability)
	:Item(name,id,weight)
{
	this->durability = durability;
	this->maxDurability = maxDurability;
	this->durability = this->durability > this->maxDurability
		? this->maxDurability
		: this->durability;
}

