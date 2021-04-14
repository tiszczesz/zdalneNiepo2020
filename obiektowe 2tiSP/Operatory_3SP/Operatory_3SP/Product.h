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
	double GetPrice() const { //metoda sta³a nie zmienia stanu obiektu
		return price;
	}
	bool operator<(const Product& p1) {
		return price < p1.price;
	}
	bool operator>(const Product& p1) {
		return price > p1.price;
	}
	bool operator==(const Product& p1) {
		return name.size() == p1.name.size();  //Te same towary maja ta sama dlugosc nazwy
	}
	bool operator!=(const Product& p1) {
		return !((*this) == p1);
	}
};

