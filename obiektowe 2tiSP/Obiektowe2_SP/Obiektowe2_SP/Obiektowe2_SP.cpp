#include <iostream>
#include "Document.h"

int main()
{
	Document d1;
	Document d2("Moj fajny dokument", 12000);
	Document* pd1 = new Document();
	d1.Info();
	d2.SetSize(20000);
	d2.Info();
	//(*pd1).Info();
	pd1->Info();
	delete pd1;
	pd1 = nullptr;
    return 0;
}

