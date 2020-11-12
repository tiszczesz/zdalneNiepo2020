#include <iostream>
#include <string>
using namespace std;
struct Point {
	//pola
	double x;
	double y;
	//metody
	void Show();//naglowek metody - deklaracja 
};
//TODO struktura uczen pola imie nazwisko wiek metoda Pokaz
//definicja metody Show
void Point::Show() {
	std::cout << "(" << x << "," << y << ")";
}
int main()
{
	Point p1;
	p1.x = 12.0;
	p1.y = 34;
	p1.Show();
    return 0;
}

