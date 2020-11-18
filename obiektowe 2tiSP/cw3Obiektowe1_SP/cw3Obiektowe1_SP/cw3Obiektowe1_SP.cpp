#include <iostream>
#include <string>
using namespace std;
struct Point {
	//pola
	double x{0};
	double y{0};
	//metody
	void Show();//naglowek metody - deklaracja 
};
//TODO struktura uczen pola imie nazwisko wiek metoda Pokaz
//definicja metody Show
void Point::Show() {
	std::cout << "(" << x << "," << y << ")";
}
class Uczen {
private:
	string imie;
	string nazwisko;
	int wiek{18};
	double srOcen{4.2};
public:
	Uczen();
	Uczen(string imie, string nazwisko, int wiek = 20, double srOcen = 4.0);
	void Info();
};
Uczen::Uczen() {
	imie = "noname";
	nazwisko = "noname";
	//wiek = 20;	
}
Uczen::Uczen(string imie, string nazwisko, int wiek, double srOcen) {
	this->imie = imie;
	this->nazwisko = nazwisko;
	this->wiek = wiek;
	this->srOcen = srOcen;
}
void Uczen::Info() {
	cout << " ========== Informacje o uczniu ============\n";
	cout << "        imie: " << imie << endl;
	cout << "    nazwisko: " << nazwisko << endl;
	cout << "        wiek: " << wiek << endl;
	cout << "serdnia ocen:" << srOcen << endl;
}


int main()
{
	Point p1;//konstr domyslny wygenerowany przez kompilator
	p1.Show();
	p1.x = 12.0;
	p1.y = 34;
	p1.Show();
	cout << " --------------------------------------------------------------- \n";
	Uczen u1;
	Uczen u2("Adam", "Nowak");
	//u1.imie = "sssss";
	u1.Info();
	u2.Info();
    return 0;
}

