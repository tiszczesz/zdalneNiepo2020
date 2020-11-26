

#include <iostream>
#include "Document.h"
#include "DocText.h"
void Ex1();
void Ex2();
int main()
{
	//Ex1();
	Ex2();
	
	
    return 0;
}
void Ex2() {
	vector<string> linie{ "Ala ma kota","Nowe zdanie","trzecia lini tekstu","jeszcze cos ciekawego" };
	DocText dt1;
	DocText dt2("pierwszy dokument tekstowy", 1000, linie);
	dt1.Info();
	dt2.Info();
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
