#include <string>
#include <iostream>
//struct  class
using namespace std;
struct Book {
private:
	//pola
    string title;
    string author;
    int page;
	
public:
	//metody
    void Show();//deklaracja metody Show
    Book();//konstruktor domyslny
    Book(string title, string author, int pages=100);
	void SetTitle(string title) {
        this->title = title;
	}
	string GetTitle() {
        return title;
	}
};
void Book::Show() {
    cout << " ---- Informacje o ksiazce ----------\n";
    cout << "\ttytul: " << title << endl;
    cout << "\tautor: " << author << endl;
    cout << "\tilosc stron: " << page << endl;
}
Book::Book() {
    cout << "Teraz konstrutor domyslny!!!" << endl;
    title = "noname";
    author = "noname";
    page = 100;
}
Book::Book(string title, string author, int pages) {
    cout << "Teraz konstrutor z argumentami!!!" << endl;
    this->author = author;
    this->title = title;
    this->page = pages;
}
//todo zdefiniowac strukture Samochod pola: model typ maks predkosc przebieg
// oraz dwa konstruktory i metode Show
int main()
{
    Book b1;
    Book b2("ABC programowania obiektowego", "Jan Nowak");
   // b2.title = "ddddd"; // title jest private
    b2.SetTitle("inny tytul");
    b1.Show();
    b2.Show();
    return 0;
}

