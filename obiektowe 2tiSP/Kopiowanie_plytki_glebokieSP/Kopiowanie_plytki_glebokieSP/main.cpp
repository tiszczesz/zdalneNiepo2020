#include <iostream>
#include <cstdlib>
#include "Box.h"
#include "Kontakty.h"
#include "KontaktyDynamiczne.h"
using namespace std;
void Ex1() {
	cout << "Podaj rozmiar Boxa: ";
	int size;
	cin >> size;
	Box b1(size);
	cout << b1;
	Box b2 = b1;
	Box b3;
	b3 = b1;
	cout << b2;
	cout << b3;
	b1.data[0] = 9999;
	b2.data[3] = 1111;
	b3.data[b3.GetSize() - 1] = 777777;
	cout << b1;
	cout << b2;
	cout << b3;
}
void Ex2() {
	vector<string> lista  { "Monika","Tomasz","Lucjan","Edmund" };
	
	Kontakty k1(lista);
	Kontakty k2=k1;
	Kontakty k3;
	k3 = k1;
	cout << k1;
	cout << k2;
	cout << k3;
	k1.contacts[0] = "Urszula";
	k2.contacts.push_back("Nowy");
	cout << "======= PO zmianach ======\n";
	cout << k1;
	cout << k2;
	cout << k3;
}
void Ex3() {
	KontaktyDynamiczne kd1;
	KontaktyDynamiczne kd2 = kd1; //todo naprawic konstruktor kopiujacy
	cout << kd1;
	cout << kd2;
	cout << "Zmieniamy kontakt w kd1 \n";
	kd1.contacts[0] = "Zmieniony kontakt";
	cout << kd1;
	cout << kd2;
	
}
int main() {
	//Ex1();
	//Ex2();
	Ex3();
	return 0;
	//todo napisac klase posiadajaca dynamiczna tablice stringów (imina)
	//todo zdefiniowac operator = oraz konstrutor kopiujacy aby
	//todo nastapilo gleboki kopiowanie tych imion
}