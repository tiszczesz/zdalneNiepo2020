#ifndef DOCUMENT_H
#define DOCUMENT_H


class Document
{
    public:
        Document();
        virtual ~Document();

        string Getname() { return name; }
        void Setname(string val) { name = val; }
        int Getsize() { return size; }
        void Setsize(int val) { size = val; }

    protected:

    private:
        string name;
        int size;
};

#endif // DOCUMENT_H
