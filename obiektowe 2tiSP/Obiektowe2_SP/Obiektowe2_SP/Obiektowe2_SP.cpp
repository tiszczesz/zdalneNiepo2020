#include <iostream>
#include "Document.h"
#include "DocText.h"
#include "Tools.h"

void Ex1();
void Ex2();
int main()
{
//	Ex1();
	Ex2();
    return 0;
}
void Ex1() {
	Document d1;
	Document d2("Moj fajny dokument", 12000);
	Document* pd1 = new Document();
	d1.Info();
	d2.SetSize(20000);
	d2.Info();
	(*pd1).Info();
	pd1->Info();
	delete pd1;
	pd1 = nullptr;
}
void Ex2() {
	vector<string> zdania{ "Ala ma kota","Rybka w akwarium","Inny ciekawy tekst123" };
	DocText dt;//wywoluje konstr klasy bazowej a potem klasy pochodnej
	DocText dt2("Dokument tekstowy1", 2000, zdania);
	dt.Info();//poniwaz brak Info w Doctext to wywolywane info z document
	dt2.Info();
	cout << "------------------------------------------------\n\n";
	vector<string> wyrazy = Tools::explode("Ala ma kota", ' ');
	
}

