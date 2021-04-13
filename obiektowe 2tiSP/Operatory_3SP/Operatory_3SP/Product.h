#pragma once
#include <string>

class Product
{
private:
	std::string name;
	double price;
	std::string description;

public:
	Product();
	Product(std::string name, double price, std::string description = "no description");
	friend std::ostream& operator<<(std::ostream& os, const Product& p);
	double GetPrice() const { //metoda sta�a nie zmienia stanu obiektu
		return price;
	}
	bool operator<(const Product& p1) {
		return price < p1.price;
	}
};
