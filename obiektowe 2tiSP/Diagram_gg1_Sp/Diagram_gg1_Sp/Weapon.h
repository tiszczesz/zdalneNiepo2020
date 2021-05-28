#pragma once
#include "Item.h"
class Weapon :    public Item
{
private:
	double dps;
	std::string category;

public:
	bool Attack();
	Weapon();
	Weapon(string name, int id, double weight, double dps = 0, string category = "noname");
	~Weapon() override;
	void Show() override;
};

