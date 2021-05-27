#include "Weapon.h"

Weapon::Weapon():Item() {
	dps = 0;
	category = "noname";
}
Weapon::Weapon(string name, int id, double weight, double dps, string category)
:Item(name,id,weight) {
	this->dps = dps;
	this->category = category;
}
Weapon::~Weapon() {
	cout << "Usuniecie obiektu weapen..." << endl;
}
bool Weapon::Attack() {
	cout << "Atak z obrazeniami " << dps << endl;
	return true;
}
void Weapon::Show() {
	Item::Show();
	cout << ">>>>>>>>>  Informacje o broni....  <<<<<<<<<\n";
	cout << "\tBron o obrazeniach na sekunde: " << dps << endl;
	cout << "\tKategoria broni: " << category << endl;
}





