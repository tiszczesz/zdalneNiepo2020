#include <iostream>

using namespace std;
void Hello(int i) {
    cout << "Hello world!: " << i << endl;
    if (i < 9) Hello(i + 1);
    cout << "Hello world!: " << i << endl;
}


int SilniaRek(int n) {
    if (n <= 1) return 1;
    return SilniaRek(n - 1) * n;
}
int SilniaIter(int n) {
    if (n <= 1) return 1;
    int wynik = 1;
	for(int i=1;i<=n;i++) {
        wynik = wynik * i;
	}
    return wynik;
}

int main()
{
    //wykonanie iteracyjne
   /* for (int i = 0; i < 10; i++) {
        cout << "Hello world!: " << i << endl;
    }
    cout << "----------------------------------------------\n\n\n";
    Hello(0);*/
    cout << "Podaj n: ";
    int n;
    cin >> n;
    cout << "Rekurencyjnie: " << n << "! = " << SilniaRek(n) << endl;
    cout << "Iteracyjnie: " << n << "! = " << SilniaIter(n) << endl;
    return 0;
}
