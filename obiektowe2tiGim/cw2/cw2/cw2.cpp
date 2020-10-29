#include <iostream>
#include "Header.h"
using namespace std;
void Ex1() {
	int moja = { 34 };
	//Add1(moja);
	//Add2(moja);
	Add3(&moja);
	cout << "moja = " << moja << endl;
	
}
void Ex2() {
	Powtorz(4);
}
int main()
{
	Ex2();
	//Ex1();
   return 0;
}

