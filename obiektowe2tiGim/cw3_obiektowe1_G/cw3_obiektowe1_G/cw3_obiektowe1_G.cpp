#include <string>
#include <iostream>
#include <vector>
#include "Book.h"
//struct  class
using namespace std;



//todo zdefiniowac strukture Samochod pola: model typ maks predkosc przebieg
// oraz dwa konstruktory i metode Show
int main()
{
    Book b1;
    Book b2("ABC programowania obiektowego", "Jan Nowak");
    Book b3;
   // b2.title = "ddddd"; // title jest private
    vector<Book> books;
    books.push_back(b1);
    books.push_back(b2);
    books.push_back(b3);
    books[1].SetTitle("Brrrrrrrrrrrrrrrrryyyyyyyyyyy");
    for (auto b : books) {
        b.Show();
    }
    return 0;
}

