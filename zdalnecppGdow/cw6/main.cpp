#include <iostream>
#include <cstdlib>
#include <ctime>

using namespace std;

int main()
{
    cout << "Tablice dynamiczne" << endl;
    cout << "Podaj rozmiar tablicy: ";
    int size;
    cin >> size;
    int * ptab = new int[size]; //rezerwacja pamieci na stercie dynamicznie
    cout << "Adres pocz¹tku dynamicznej tablicy ptab: "<<ptab<<endl;
    srand(time(0));
    for(int i=0;i<size;i++){
        *(ptab+i) = rand()%100;
       // ptab[i] = rand()%100;
    }
    for(int i=0;i<size;i++){
       cout << *(ptab+i)<<endl;
       // cout <<  ptab[i] << endl;
    }
    delete[] ptab;
    ptab = nullptr;
   if(ptab!=nullptr){
            cout << "Uzywamy tablicy!!"<<endl;
         ptab[3] = 34;
    }else{
         cout << "tablicy juz nie ma!!"<<endl;
   }

    return 0;
}
