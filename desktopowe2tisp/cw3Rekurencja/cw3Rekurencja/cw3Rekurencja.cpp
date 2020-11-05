#include <cstdlib>
#include <iostream>
#include <string>

using namespace std;
void Wyswietl(int ile) {
	cout << "Wyswietlamy dla ile = " << ile << endl;
	if(ile>0) Wyswietl(ile - 1);
	cout << "Wyswietlamy dla ile = " << ile << endl;
}
void Reverse(string tekst,int ile) {	
	if (ile < tekst.size()-1) Reverse(tekst, ile + 1);
	cout << tekst[ile] << " ";
}
long long SilniaRek(long long n) {
	if (n <= 1) return 1;
	return SilniaRek(n - 1) * n;
}
long long SilniaIter(long long n) {
	long long temp = 1;
	for(long long i=2;i<=n;i++) {
		temp *= i; // temp = temp * i;
	}
	return temp;
}
// NWD rekurencyjnie i iteracyjnie    NWD(24,18) = 6
int main()
{
	//string tekst = "Ala ma kota";
	//Reverse(tekst,0);
	cout << "Podaj n: ";
	long long n;
	cin >> n;
	cout << n << "! = " << SilniaRek(n) << endl;
	cout << n << "! = " << SilniaIter(n) << endl;
	//Wyswietl(5);
    return 0;
}

