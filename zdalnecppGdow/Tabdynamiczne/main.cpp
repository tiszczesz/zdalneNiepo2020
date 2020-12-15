#include <iostream>
#include <cstdlib>
#include <ctime>

using namespace std;
int GetSize(){
    int s;
    do{
        cout << "Podaj rozmiar tablicy (dodatni): ";
        cin >> s;
    }while(s<=0);
    return s;
}
void FillTable(int t[],int s){
    srand(time(0));
    for(int i=0; i<s; i++){
        t[i] = rand()%100;  // 0..99
    }
}
void ShowTable(int t[],int s){//s przekazywane przez wartosc kopiwanie
    for(int i=0; i<s; i++){
        cout << "t["<<i<<"] = " << t[i]<<endl;
    }
}
int GetMin(int t[],int s,int pocz=0){
    int index = pocz;// int index{0}
    int min = t[index];
    for(int i=pocz;i<s;i++){
        if(t[i]<min){
            index = i;
            min = t[i];
        }
    }
    return index;
}
void Swap(int& a, int& b){//przez referencje
    int temp = a;
    a = b;
    b = temp;
   //
   // cout << " wewnatrz funkcji a = "<< a<< " b = "<<b<<endl;
}
void SortWyb(int t[],int s){
    for(int i=0;i<s-1;i++){
        Swap(t[i],t[GetMin(t,s,i)]);
    }
}

void Swap2(int* a , int* b){//przez wskaznik
    int temp  = *a;
    *a = *b;
    *b = temp;
}
int main()
{
    int size = GetSize();
    int * t = new int[size];
    FillTable(t,size);
    ShowTable(t,size);
   // int minIndex = GetMin(t,size);
   // cout <<"Najmniejsza wartosc w tablicy: "<< t[minIndex]<<endl;
   // Swap(t[0],t[minIndex]);
    SortWyb(t,size);
    cout << "==============================================================\n";
    ShowTable(t,size);

  //  int a = 12;
  //  int b = 45;
  //  cout << "a = "<< a<< " b = "<<b<<endl;
  //  Swap(a,b);
  //  cout << "a = "<< a<< " b = "<<b<<endl;
  //  cout << "==============================================================\n";
   //  cout << "a = "<< a<< " b = "<<b<<endl;
  //  Swap2(&a,&b);
  //  cout << "a = "<< a<< " b = "<<b<<endl;
    delete[] t;
    t = nullptr;
    return 0;
}
