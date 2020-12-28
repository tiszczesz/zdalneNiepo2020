#include <iostream>
#include <string>
#include <fstream>
using namespace std;

int main()
{
    int i=34454555;
    ofstream om;
    om.open("tt.txt");

    string ee = "gggggggjj  ";
    string tt = "vvvvvv";
    if(om.is_open()){
        om << ee << "\n";
        om << tt << endl;
        om.close();
    }
    ifstream im;
    im.open("tt_out.txt",ifstream::in);
    string line;
    if(im.is_open()){
        while(getline(im,line)){
            cout << line << endl;
        }
        im.close();
    }

    cout << (ee+tt)<<endl;
    for(int i=0;i<10;i++){
        std::cout << "Hello world! ghggggg" << std::endl;
    }

    return 0;
}
