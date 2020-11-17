#include <iostream>
#include <string>
using namespace std;
string Reverse(string wyraz){
    string wynik;
    for(int i=0;i<wyraz.size();i++){
        wynik = wynik + wyraz[wyraz.size()-1-i];
    }
    return wynik;
}
string AddSpace(string wyraz){
     string wynik;
    for(int i=0;i<wyraz.size();i++){
        wynik = wynik + wyraz[i]+' ';
    }
    return wynik;
}
int main()
{
    cout << "Podaj wyraz: ";
    string wyraz;
    cin >> wyraz;
    cout << "Rozmiar tekstu (ilosc znakow): "<<wyraz.size()<<endl;
    for(int i=0;i<wyraz.size();i++){
        cout << "wyraz["<<i<<"] = "<<wyraz[i]<<endl;
    }
    cout << Reverse("Ala ma kota")<<endl;
    cout << AddSpace("Ala ma kota")<<endl;
    return 0;
}
