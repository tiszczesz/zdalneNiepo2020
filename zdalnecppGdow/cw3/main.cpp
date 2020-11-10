#include <iostream>
#include <string>
#include <cstdlib>
#include <ctime>
using namespace std;

int main()
{
    srand(time(0));
    const int ROZMIAR = 20;
    int liczby[ROZMIAR];
    liczby[10] = 33;
    liczby[19] = 100;
    cout << "liczby[10] = " << liczby[10]<<endl;
    cout <<"liczby[19] = "<< liczby[19]<<endl;
    for( int i=0;i<ROZMIAR  ;i++ ){
        liczby[i] = rand()%100;// i=0 i=1 i=2 ......
    }
    cout << "liczby[12] = "<< liczby[12]<<endl;
     cout << "liczby[10] = " << liczby[10]<<endl;
     cout << "===============================================\n";
     for(int i=0;i<ROZMIAR;i++){
        cout << "liczby["<<i<<"] = " << liczby[i]<<endl;
     }
    return 0;
}
