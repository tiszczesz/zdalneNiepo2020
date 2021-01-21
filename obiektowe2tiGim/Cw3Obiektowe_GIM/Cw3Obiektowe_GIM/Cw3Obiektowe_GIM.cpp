

#include <iostream>
#include "Document.h"
#include "DocText.h"
#include "DocImage.h"
#include "Tools.h"
#include <cstdlib>

#include "DocSound.h"

void Ex1();
void Ex2();
void Ex3();
void Ex4();
void Ex5();
int main()
{
	//Ex1();
	//Ex2();
	cout << "----------------------------------------------------\n\n";
	//Ex3();
	//Ex4();
	Ex5();
	//system("PAUSE");
    return 0;
}
void Ex2() {
	vector<string> linie{ "Ala ma kota","Nowe zdanie w tekscie","trzecia lini tekstu z internetu","jeszcze cos ciekawego" };
	DocText dt1;
	DocText dt2("pierwszy dokument tekstowy", 1000, linie);
	dt1.Info();
	dt2.Info();
	vector<string> w = Tools::Explode2("Ala ma kota", ' ');
}
void Ex1() {
	Document d1;
	Document d2("ddddddd", 30000);
	Document* pd3 = new Document();
	d1.Info();
	d2.Info();
	(*pd3).Info();
	pd3->Info();
	delete pd3;
	pd3 = nullptr;
	if (pd3 != nullptr) {
		cout << "Obiekt istnieje" << endl;
		pd3->Info();
	}
	else {
		cout << "Obiekt nie istnieje" << endl;
	}
}
void Ex3() {
	DocImage di1;
	Pair rozmiar;
	rozmiar.height = 300;
	rozmiar.width = 400;
	DocImage* di2 = new DocImage("nowy obrazek", 2000, rozmiar, TypeOfImage::png);
	DocImage di3("Fajny obrazek", 3500, { 450,500 }, TypeOfImage::tiff);
	di1.Info();
	di2->Info();
	di3.Info();
	delete di2;
	di2 = nullptr;
}
void Ex4() {
	DocSound ds1;
	DocSound ds2("fajna muzyczka", 350000, 120, TypeOfCoding::flac);
	//ds1.Info();
	//ds2.Info();
	cout << " --------------------------------------  ---------------------------\n\n\n";
	vector<DocSound*> utwory{ new DocSound(),new DocSound("kolenda",444,5600,TypeOfCoding::m4a) };
	for (auto u : utwory) {
		u->Info();
	}
	cout << "Niszczymy zbior utworow" << endl;
	for (auto u : utwory) {
		delete u;
		u = nullptr;
	}
	
	utwory.clear();
}
void Ex5() {
	vector<string> linie{ "Ala ma kota w pliku!!!!!","Nowe zdanie w tekscie","trzecia lini tekstu z internetu","jeszcze cos ciekawego" };
	DocText dt("tekstowy", 345, linie);
	dt.Info();
	dt.ContentToFile("tekstowy1.txt");
	cout << "zapisano do pliku!!!!!" << endl;
	cout << "Tworzymy nowy obiekt docText" << endl;
	vector<string> cont2;
	DocText dt2("nowy", 400, cont2);
	dt2.Info();
	cout << "pobieramy dane z pliku....." << endl;
	dt2.LoadToContent("tekstowy1.txt");
	dt2.Info();
}
	
//todo napisanie klasy DocSound dziedziczy z Document  ma length(czas trwania) typ kodowania(mp3, ogg, flac, acc)