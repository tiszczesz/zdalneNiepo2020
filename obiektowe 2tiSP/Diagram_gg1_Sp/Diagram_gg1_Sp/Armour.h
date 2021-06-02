#pragma once
#include "Item.h"
class Armour :    public Item
{
private:
	double durability;
	double maxDurability;
public:
	Armour();
	void Show() override;
	Armour(string name, int id, double weight, double durability, 
		double maxDurability);
	void Regeneration(int pSec) {
		std::cout << "Regeneracja zbroji ...." << pSec << endl;
		durability += pSec;
		durability = durability > maxDurability ? maxDurability : durability;
	}
};

