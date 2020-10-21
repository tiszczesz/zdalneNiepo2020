#include <iostream>
#include "MyHeader.h"

using namespace std;
int main()
{
	cout << HelloFromFile("ala ma kota") << endl;
	cout << HelloFromFile("dfs sf s fsf sf s fs") << endl;
	cout << "Podaj a: ";
	int a;
	cin >> a;
	cout << "Podaj b: ";
	int b;
	cin >> b;
	cout << a << " + " << b << " = " << Dodaj(a, b) << endl;
	cout << "Przez ile podzielne: ";
	int podz;
	cin >> podz;
	Wyswietl(podz);
    return 0;
}
