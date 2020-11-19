#include "Book.h"
#include <iostream>
using namespace std;
void Book::Show() {
    cout << " ---- Informacje o ksiazce ----------\n";
    cout << "\ttytul: " << title << endl;
    cout << "\tautor: " << author << endl;
    cout << "\tilosc stron: " << pages << endl;
}
Book::Book() {
    cout << "Teraz konstrutor domyslny!!!" << endl;
    title = "noname";
    author = "noname";
    pages = 100;
}
Book::Book(string title, string author, int pages) {
    cout << "Teraz konstrutor z argumentami!!!" << endl;
    this->author = author;
    this->title = title;
    this->pages = pages;
}