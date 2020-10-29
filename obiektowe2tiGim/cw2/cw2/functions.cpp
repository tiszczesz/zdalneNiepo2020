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
