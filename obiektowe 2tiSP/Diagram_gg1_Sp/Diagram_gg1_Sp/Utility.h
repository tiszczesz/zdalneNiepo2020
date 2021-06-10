#pragma once
#include "Item.h"
class Utility :    public Item
{
protected:
	int capacity = { 0 };
	int maxCapacity = { 10 };
public:
	Utility();
	Utility(string name, int id, double weight
		, int maxCapacity, int capacity);
	~Utility() override;
	void Show() override;
};

