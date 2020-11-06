#include <iostream>

void Add1(int a) {
	a = a + 20;
	std::cout << " a = " << a << std::endl;
}
void Add2(int& a) {
	a = a + 20;
	std::cout << " a = " << a << std::endl;
}
void Add3(int* a) {
	*a = *a + 20;
	std::cout << " a = " << *a << std::endl;
}

void Powtorz(int ile) {
	std::cout << ile << std::endl;
	if(ile>0) Powtorz(ile - 1);
	std::cout << ile << std::endl;
}
void Reverse(std::string text,int ile) {
	std::cout << text[ile];
	if (ile > 0) Reverse(text,ile - 1);
	
}
void Reverse2(std::string text, int ile) {	
	if (ile < text.size()-1) Reverse2(text, ile + 1);
	std::cout << text[ile];
}
long long SilniaRek(long long n) {
	if (n <= 1) return 1;
	return SilniaRek(n - 1) * n;
}
long long SilniaIter(long long n) {
	if (n <= 1) return 1;
	long long wynik = 1;
	for(long long i=2;i<=n;i++) {
		wynik *= i;  // wynik = wynik*i;
	}
	return wynik;
}
int NWDIter(int a, int b) {
	int temp;
	while(b!=0) {
		temp = a;
		a = b;
		b = temp % b;
	}
	return a;
}
int NWDRek(int a,int b) {
	static int a = 12;
	if (b == 0) return a;
	return NWDRek(b, a % b);
}
