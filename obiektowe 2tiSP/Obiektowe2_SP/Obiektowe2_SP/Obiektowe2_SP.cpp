#include <iostream>
#include "Document.h"
#include "DocText.h"
#include "Tools.h"
#include "DocImage.h"
#include "DocSound.h"

void Ex1();
void Ex2();
void Ex3();
void Ex4();
void Ex5();
int main()
{
//	Ex1();
//	Ex2();
//	Ex3();
//	Ex4();
	Ex5();
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
	vector<string> zdania{ "Ala ma kota malego","Rybka w akwarium","Inny ciekawy tekst123" };
	DocText dt;//wywoluje konstr klasy bazowej a potem klasy pochodnej
	DocText dt2("Dokument tekstowy1", 2000, zdania);
	dt.Info();//poniwaz brak Info w Doctext to wywolywane info z document
	dt2.Info();
	cout << "------------------------------------------------\n\n";
	vector<string> wyrazy = Tools::explode("Ala ma kota", ' ');
	
}
void Ex3() {
	DocImage di1;	
	DocImage di2("Fajny obrazek", 3000, {450,600}, ImageType::png);
	DocImage* di3 = new DocImage("Dynamiczny obrazek", 4500, { 300,400 }, ImageType::tiff);
	cout << "\n\n=========================== Uzywamy klasy DoImage ================\n";
	di1.Info();
	di2.Info();
	di3->Info(); // (*di3).Info();
	delete di3;
	di3 = nullptr;
}
void Ex4() {
	vector<DocSound*> utwory{ new DocSound(),new DocSound("ladny utwor 1",5000000,6000,TypeCoding::mp3),
			new	DocSound("brzydki utwor",400000,3600,TypeCoding::flac),
			new DocSound("hit",456,56700,TypeCoding::m4a) };
	for (DocSound* u : utwory) {
		u->Info();
		cout << " ---------------------------------------- kolejny ---------------------------\n";
	}
	//czyszczenie wskaznikow do obiektow docSound
	for(auto u : utwory) {
		delete u;
		u = nullptr;
	}
	utwory.clear();
}
void Ex5() {
	vector<string> zdania{ "Ala ma kota malego w pliku","Rybka w pliku","Inny ciekawy tekst123" };
	DocText dt("plik1.txt", 3400, zdania);
	dt.Info();
	dt.SaveContent("plik1.txt");
	DocText dt2;
	dt2.Info();
	dt2.LoadContent("plik1.txt");
	dt2.Info();
}
