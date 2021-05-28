#include "Character.h"

Character::Character() {
	
}
Character::Character(string name, double health, vector<Item*> items) {
	this->name = name;
	this->health = health;
	this->items = items;
}
void Character::AddItem(Item* newItem) {
	items.push_back(newItem);
}
void Character::useItem(Item& myItem) {
	//todo
}
void Character::ShowEquipment() {
	std::cout << "Wyposazenie osoby: " << name << endl;
	for (Item* item : items) {
		 item->Show() ;
	}
}





