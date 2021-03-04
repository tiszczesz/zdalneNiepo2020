#include <iostream>
#include <cstdlib>
#include "Box.h"
#include "Contacts.h"
using namespace std;
void Ex1();
void Ex2();
void Ex3();
int main() {
	//Ex1();
	Ex2();
	return 0;
	//todo napisac notatnik z nazwisakmi zapisanymi w tablicy dynamicznej  string* nazwiska = new string[size]
}
void Ex1() {
	cout << "Podaj rozmiar pudelka: ";
	int size;
	cin >> size;
	Box b1(size);
	Box b2 = b1; // Box b2(b1);
	Box b3;
	b3 = b1;
	cout << b1;
	cout << b2;
	cout << b3;
	cout << " ============ zmieniamy zawartosc pudelka b2 ======\n";
	b2.data[0] = 5555;
	b1.data[b1.GetSize() - 1] = 7777;
	b3.data[2] = 11111;
	cout << b1;
	cout << b2;
	cout << b3;
}
void Ex2() {
	Contacts c1;
	c1.contacts = { "Jan","Adam","Monika" };

	Contacts c2 = c1;
	Contacts c3;
	c3 = c1;
	cout << c1;
	cout << c2;
	cout << c3;
	c1.contacts[0] = "Dominika";
	c3.contacts.push_back("Najnowszy kontakt");
	cout << "======= Po zmianie ================\n";
	cout << c1;
	cout << c2;
	cout << c3;
}
void Ex3() {
	
}