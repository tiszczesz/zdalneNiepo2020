#include <cstdlib>
#include <iostream>
#include "Character.h"

using namespace std;

int main() {
	vector<Item*> items1;
	items1.push_back(new Item("item1", 1, 23.9));
	items1.push_back(new Item("item2", 2, 89.9));
	items1.push_back(new Item("item3", 3, 34));
	Character c1("Postac 1", 100,items1);
	c1.ShowEquipment();
	Item* i4 = new Item("siekierka", 4, 20);
	c1.AddItem((*i4));
	c1.ShowEquipment();
	for (auto item : items1) {
		delete item;
		item = nullptr;
	}
	return 0;
}