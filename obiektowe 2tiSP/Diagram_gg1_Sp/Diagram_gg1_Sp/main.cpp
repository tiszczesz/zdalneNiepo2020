#include <cstdlib>
#include <iostream>
#include "Character.h"
#include "Weapon.h"

using namespace std;

int main() {
	vector<Item*> items1;
	items1.push_back(new Item("item1", 1, 23.9));
	items1.push_back(new Item("item2", 2, 89.9));
	items1.push_back(new Item("item3", 3, 34));
	Character c1("Postac 1", 100,items1);
	c1.ShowEquipment();
	Item* i4 = new Item("siekierka", 4, 20);
	Weapon* sword = new Weapon("super miecz +1", 4, 20, 100, "miecze");
	c1.AddItem(i4);
	c1.AddItem(sword);
	c1.ShowEquipment();
	for (auto item : c1.GetItems()) {
		delete item;
		item = nullptr;
	}
	return 0;
}