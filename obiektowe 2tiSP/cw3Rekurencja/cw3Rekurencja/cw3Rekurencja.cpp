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
// Zamiana 10 na 2   5 -> 101
//         18 12       18 - 12 = 6     12-6 = 6   6 - 6 = 0 => 6
//         NWD(12,18)    12%18=12  18%12=6  12%6=0  6%0 ==> 6
//         15 3      15 - 3 = 12   12 - 3 = 9  9-3 = 6 6- 3=3   3-3=0
//           15%3=0  3%0 => 3
//       NWD(a,b) dla b=0 -> a    NWD(b,a%b)
int NWDRek(int a, int b) {
	if (b == 0) return a;
	return NWDRek(b, a % b);
}
int NWDIter(int a,int b) {
	int temp;
	while(b!=0) {
		temp = a;
		a = b;
		b = temp % b;
	}
	return a;
}
int main()
{
	//string tekst = "Ala ma kota";
	//Reverse(tekst,0);
	cout << "Podaj n: ";
	long long n;
	cin >> n;
	cout << n << "! = " << SilniaRek(n) << endl;
	cout << n << "! = " << SilniaIter(n) << endl;
	cout << " --------------------  NWD ------------------\n";
	cout << " a = ";
	int a, b;
	cin >> a;
	cout << " b = ";
	cin >> b;
	cout << "NWDRek(" << a << "," << b << ") = " << NWDRek(a, b) << endl;
	cout << "NWDIter(" << a << "," << b << ") = " << NWDIter(a, b) << endl;
	//Wyswietl(5);
    return 0;
}

