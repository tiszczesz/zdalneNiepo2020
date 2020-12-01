#ifndef BOOK_H
#define BOOK_H


class Book
{
    public:
        Book();
        virtual ~Book();

        string Gettitle() { return title; }
        void Settitle(string val) { title = val; }
        int Getpages() { return pages; }
        void Setpages(int val) { pages = val; }

    protected:

    private:
        string title;
        int pages;
};

#endif // BOOK_H
