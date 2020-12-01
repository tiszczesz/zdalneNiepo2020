#include <iostream>

using namespace std;

int main()
{
    int liczba = 20;
    int b = 3;
    int * pliczba; //nie_zainicjowany
    cout << " liczba = "<<liczba<<endl;
    cout << " adres liczba = " << &liczba <<endl;
    cout << " pliczba = "<<pliczba << endl;
    pliczba = &liczba;  //wpisuje adres do pliczba
    cout << " liczba = "<<liczba<<endl;
    cout << " adres liczba = " << &liczba <<endl;
    cout << " pliczba = "<<pliczba << endl;
    *pliczba = 999;
    cout << " ------------------------------------------\n";
     cout << " liczba = "<<liczba<<endl;
    cout << " adres liczba = " << &liczba <<endl;
    cout << " pliczba = "<<pliczba << endl;
    cout << 20 + (*pliczba)<<endl;
    pliczba = &b;
    cout << " *pliczba = "<<*pliczba << endl;
    //todo zdefiniowac druga zmienna zmiennoprzecinkowa (double) i wskaznik do nie
    //dodac do siebie liczby 999 + ..... uzywajac wskaznikow
    double c = 34.78;
    double * pc = &c;
      cout << " c = "<<c<<endl;
    cout << " adres c = " << &c <<endl;
    cout << " pc = "<<pc << endl;
    cout << "999 + "<<*pc<<" = " << 999 + *pc <<endl;
    return 0;
}
