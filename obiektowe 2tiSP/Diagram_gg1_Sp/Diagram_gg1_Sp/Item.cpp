#include "Item.h"

Item::Item() {
	id = -1;	
}
Item::Item(string name, int id, double weight) {
	this->id = id;
	this->name = name;
	this->weight = weight;
}
void Item::Show() {
	cout << "\t ============ Informacje o elemencie ========\n";
	cout << "\tNazwa: " << name << endl;
	cout << "\tmasa: " << weight << endl;
}



