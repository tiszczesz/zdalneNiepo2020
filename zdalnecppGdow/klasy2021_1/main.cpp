#include <iostream>
#include <string>

using namespace std;
//definicja klasy (przepis na obiekty - plan)
class Product{
    //pola wlasciwosci
    //todo dodac wlasciwosc kategoria jako string i poprawic metode info aby to uwzglednic
private:
    string name = "noname";
    double price = 0;
    //todo
public:
    //metody funkcje skladowe
    void Info(); //deklaracja metody Info
    Product();//deklaracja konstruktora domyslnego
    Product(string name,double price);//deklaracja konstruktora z argumentami
    void SetPrice(double price){  //jesli tu definicja to metoda staje sie inline
        this->price = price < 0 ? -price : price;
    }
    void SetName(string name){
        this->name = name;
    }
};
//definicja (implementacja) metody Info
void Product::Info(){
    cout << " ------- Informacje o produkcie --------------\n";
    cout << "\t\t   nazwa: "<<name<<endl;
    cout << "\t\t    cena: "<<price<<endl;
    //todo
}
Product::Product(){
    cout << "Wywolanie konstruktora domyslnego"<<endl;
}
Product::Product(string name,double price){
    //this->name = name;
    //this->price = price;
    SetName(name);
    SetPrice(price);
    //todo
}
int main()
{
    Product p1("Bulki z pieca",0.99);
    Product p2;
    p2.SetPrice(-500);
    p2.SetName("Buraki male");
    p1.Info();
    p2.Info();
    return 0;
}
