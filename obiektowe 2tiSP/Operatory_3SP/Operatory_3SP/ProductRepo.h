#pragma once
#include <vector>

#include "Product.h"

class ProductRepo
{
private:
	std::vector<Product> products;

public:
	ProductRepo() {
		products = { Product("marchewka",5.66),Product("maslo",3.99,"pyszne na chlebek"),
			Product("maka",5.99),Product("kielbasa",9.99),Product("nowy",7.99) };
	}
	std::vector<Product> GetAll() { 
		return products;
	}
	Product GetMin() {
		if (products.size() == 1) return products[0];
		if (products.size() < 1) return Product("brak produktow",0);
		Product result = products[0];
		for(size_t i=1;i<products.size();i++) {
			if(products[i] < result  ) {
				result = products[i];
			}
		}
		return result;
	}
};

