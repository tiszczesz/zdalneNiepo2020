#include <cstdlib>
#include <iostream>
#include "Character.h"
#include "Weapon.h"
#include "Armour.h"
#include "Flask.h"
#include "Utility.h"

using namespace std;

int main() {
	vector<Item*> items1;
	items1.push_back(new Item("item1", 1, 23.9));
	items1.push_back(new Item("item2", 2, 89.9));
	items1.push_back(new Item("item3", 3, 34));
	Character c1("Postac 1", 100, items1);
	c1.ShowEquipment();
	auto i4 = new Item("siekierka", 4, 20);
	auto sword = new Weapon("super miecz +1", 4, 20, 100, "miecze");
	c1.AddItem(i4);
	c1.AddItem(sword);
	c1.ShowEquipment();
	cout << "Dodajemy zbroje....." << endl;
	c1.AddItem(new Armour("wielka zbroja", 5, 100,
	                      20, 100));
	c1.AddItem(new Utility("item narzedziowy", 6, 10, 0, 100));
	c1.ShowEquipment();
	Item* lastItem = c1.GetItems()[c1.GetItems().size() - 1];

	for(auto item : c1.GetItems()) {
		auto armour = dynamic_cast<Armour*>(item);
		if (armour != nullptr) {
			armour->Regeneration(120);
		}
	}
	
	c1.AddItem(new Flask("mikstura zdrowia", 8, 10,
		         100, 100,"zdrowie"));
	c1.ShowEquipment();
	//c1.GetItems()[c1.GetItems().size()-1]->Re
	for (auto item : c1.GetItems()) {
		delete item;
		item = nullptr;
	}
	return 0;
}
