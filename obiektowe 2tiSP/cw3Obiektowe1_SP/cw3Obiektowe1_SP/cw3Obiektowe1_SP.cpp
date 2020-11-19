#include <iostream>
#include <string>
#include <vector>
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
	void SetSrOcen(double srOcen) {  //to jest metoda inline czyli kompilator kopuje w miejsce wywolania
		this->srOcen = srOcen<1 || srOcen>6 ? 3.5 : srOcen;
	}
	double GetSrOcen() {//to jest metoda inline czyli kompilator kopuje w miejsce wywolania
		return srOcen;
	}
};
Uczen::Uczen() {
	cout << "To jest konstruktor bez argumentow!!" << endl;
	imie = "noname";
	nazwisko = "noname";
	//wiek = 20;	
}
Uczen::Uczen(string imie, string nazwisko, int wiek, double srOcen) {
	cout << "To jest konstruktor z argumentami!!" << endl;
	this->imie = imie;
	this->nazwisko = nazwisko;
	this->wiek = wiek;
	SetSrOcen(srOcen);
}
void Uczen::Info() {
	cout << " ========== Informacje o uczniu ============\n";
	cout << "        imie: " << imie << endl;
	cout << "    nazwisko: " << nazwisko << endl;
	cout << "        wiek: " << wiek << endl;
	cout << "serdnia ocen: " << srOcen << endl;
}


int main()
{
	//Point p1;//konstr domyslny wygenerowany przez kompilator
	//p1.Show();
	//p1.x = 12.0;
	/*p1.y = 34;
	p1.Show();*/
	cout << " --------------------------------------------------------------- \n";
	Uczen u1;
	Uczen u2("Adam", "Nowak");
	vector<Uczen> uczniowie;
	uczniowie.push_back(u1);
	uczniowie.push_back(u2);
	//u1.imie = "sssss";
	for (auto u : uczniowie) {
		u.Info();
	}
	cout << " --------------------------------------------------------------- \n";
	uczniowie[1].SetSrOcen(8);
	for (auto u : uczniowie) {
		u.Info();
	}
    return 0;
}

