#pragma once
#include "Utility.h"
class Flask :    public Utility
{
private:
	std::string category;

public:
	void Fill() {
		std::cout << "Wypelnienie flaszki...." << std::endl;
	}
	Flask() :Utility() {};
	Flask(string name, int id, double weight
		, int maxCapacity, int capacity,std::string category)
	  :Utility(name,id,weight,maxCapacity,capacity) {
		this->category = category;
	}
	void Show() override {
		Utility::Show();
		std::cout << "\t\t Mikstura zdrowia...... pelna" << std::endl;
	}
};

