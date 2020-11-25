

#include <iostream>
#include "Document.h"
#include "DocText.h"

int main()
{
	Document d1;
	Document d2("ddddddd", 30000);
	Document* pd3 = new Document();
	d1.Info();
	d2.Info();
	(*pd3).Info();
	pd3->Info();
	delete pd3;
	pd3 = nullptr;
	DocText dt;
	if(pd3!=nullptr) {
		cout << "Obiekt istnieje" << endl;
		pd3->Info();
	}else {
		cout << "Obiekt nie istnieje" << endl;
	}
    return 0;
}
