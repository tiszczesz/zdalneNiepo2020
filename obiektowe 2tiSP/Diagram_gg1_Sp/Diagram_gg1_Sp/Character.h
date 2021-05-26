#pragma once
#include <string>
#include <vector>
#include "Item.h"
using namespace std;
class Character
{
private:
	string name={"noname"};
	double health={100};
	vector<Item*> items;
public:
	Character();
	Character(string name, double health,vector<Item*> items);
	void useItem(Item& myItem);
	void AddItem(Item& newItem);
	void ShowEquipment();
};


