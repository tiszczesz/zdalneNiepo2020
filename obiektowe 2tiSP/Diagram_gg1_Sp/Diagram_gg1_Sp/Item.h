#pragma once
#include <string>
#include <iostream>

using namespace std;
class Item
{
protected:
	int id;
	string name={"noname"};
	double weight={0};
public:
	virtual void Show();
	Item();
	Item(string name, int id, double weight);
};

