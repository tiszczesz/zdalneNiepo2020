#pragma once
#include <string>
using namespace std;
struct Book {
private:
    //pola
    string title;
    string author;
    int pages;

public:
    //metody
    void Show();//deklaracja metody Show
    Book();//konstruktor domyslny
    Book(string title, string author, int pages = 100);
    void SetTitle(string title) {//metoda inline -> kompilator kopiuje tresc metdy do miejsca jej wywolania
        this->title = title;
    }
    string GetTitle() {//metoda inline-> kompilator kopiuje tresc metdy do miejsca jej wywolania
        return title;
    }
};
