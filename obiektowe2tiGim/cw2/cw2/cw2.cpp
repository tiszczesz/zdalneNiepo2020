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
	cout << " ================================================= \n";
	string text = "ala ma Kota malego123";
	Reverse2(text,0);
}
void Ex3() {
	cout << "Podaj n: ";
	long long n;
	cin >> n;
	cout << "SilniaRek(" << n << ") = " << SilniaRek(n) << endl;
}
int main()
{
	Ex3();
	//Ex2();
	//Ex1();
   return 0;
}

