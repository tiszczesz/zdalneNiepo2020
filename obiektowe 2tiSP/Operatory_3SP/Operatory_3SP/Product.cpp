#include "Product.h"

#include <ostream>

Product::Product() {
	name = "noname";
	price = 0;
	description = "no description";
}

Product::Product(std::string name, double price, std::string description) {
	this->name = name;
	this->price = price;
	this->description = description;
}

std::ostream& operator<<(std::ostream& os, const Product& p) {
	os << "informace o produkcie:" << std::endl;
	os << "Nazwa produktu: " << p.name << std::endl;
	os << " Cena produktu: " << p.price << std::endl;
	os << " Opis produktu: " << p.description << std::endl;
	return os;
}


