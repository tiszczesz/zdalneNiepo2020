#include <iostream>
#include <string>
using namespace std;
void Wizytowka(string i);//deklaracja funkcji
double Dodaj(double a, double b){
    return a+b;
}
double Odejmij(double a, double b){
    return a-b;
}
double Pomnoz(double a, double b){
    return a*b;
}
double Podziel(double a, double b){
    return a/b;
}
int main()
{
    Wizytowka("Antoni");
    cout << "Podaj a: ";
    double a;
    cin >> a;
    cout << "Podaj b: ";
    double b;
    cin >> b;
    cout  << a << " + " << b << " = " << Dodaj(a,b)<<endl;
    cout  << a << " - " << b << " = " << Odejmij(a,b)<<endl;
    cout  << a << " * " << b << " = " << Pomnoz(a,b)<<endl;
    if(b==0){
        cout  << a << " / " << b << " = " << "Dzielenie przez zero!!!"<<endl;
    }else{
        cout  << a << " / " << b << " = " << Podziel(a,b)<<endl;
    }
    //to
    return 0;
}
void Wizytowka(string imie){
    cout << "Witaj "<<imie<<endl;
}


/*  todo napisac funkcje Info ktora ma dwa arg typu string(imie i nazwisko) oraz
    arg wiek typu int   (zwraca string) bedacy informacja o imie nazwisko
    i informacji czy pelnoletni czy nie  wersja prosta wyswietla(void)
    1 cout << Info("fffff","nzaaaaa",34) <<endl;
    2 Info("fffff","nzaaaaa",34)
*/
/*cout << "Podaj swoje imie: ";
    string imie;
    cin >> imie;
    cout << "Podaj swoje nazwisko: ";
    string nazwisko;
    cin >> nazwisko;
    cout << "Podaj swoj wiek: ";
    int wiek;
    cin >> wiek;
    cout << " ====================================== \n";
    cout << " Witaj "<<imie << " " << nazwisko << endl;
    if(wiek<0) cout << "Jeszcze sie nie urodziles!!!!"<<endl;
    else if(wiek<=18) cout <<"Jestes niepoelnoletni" << endl;
    else if(wiek>120) cout << "Juz chyba w piachu!!!!"<<endl;
    else cout << "Jestes pelnoletni ...."<<endl;*/
