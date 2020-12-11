#include <iostream>
#include <cstdlib>
#include <string>

#include "moja.h"
using namespace std;
int main(){
    system("PAUSE");// system("notepad.exe")
    return 0;
}

//typy //calkowite int| short| long | long long| unsigned int| char
// float double
//tablice
 
 int t[10] = {3,6,8,90,0};
 int*  tabDyn = new int[size];    
 //......
 delete[] tabDyn;
 tabDyn = nullptr;

 // wskazniki czyli zmienne przechowywujace adres innej zmiennej
 char znak = 'a';
 char * pZnak = &znak; //ustaw wskaznik na adres znak
 *pZnak = 'c';  // znak bedzie mial wartosc c
 typ Funkcja(typ1 arg1,typ2 arg2....){
     //........
 }
 void WypelniaTablice(int t[],int size){
     for(int i=0;i<size;i++){
         t[i] = i*i*i;
     }
 }

WypelniaTablice(tabDyn,size);    ===> tablice i^3
//wektory
#include <vector>

vector<string> wyrazy {"asaa","uuuuu","tttttt"};  // 3 elementy
wyrazy.push_back("nowa wartosc na koniec wektora");
//
cout << "ala ma kota" << endl; ---> na ekran lub do pliku
int r;
cin >> r;  // z klawiatury do zmiennej r lub z pliku do r
//
#include <fstream>

ifstream fstr;
fstr.open("dane.txt");
fstr >> zmienna

string wartosc = to_string(12);  // 12->"12"
