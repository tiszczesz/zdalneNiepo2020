#include "DocText.h"
#include <iostream>
#include <iomanip>
#include <fstream>
#include "Tools.h"

DocText::DocText(string name, int size, vector<string> lines):Document(name,size) {
	cout << "Konstruktor z argumentami DocText" << endl;
	this->lines = lines;
}
DocText::DocText() {
	cout << "Konstruktor domyslny DocText" << endl;
}
void DocText::Info() {
	cout << " --------- Informacja o dokumencie tekstowym ---------------\n";
	Document::Info();
	cout << " ----- Zawartosc dokumentu tekstowego --------\n";
	for (auto line : lines) {
		cout <<"\t\t" <<line << endl;
	}

	cout << "  ----------- statystyki dokumentu tekstoego----\n";
	cout << setw(35) << "ilosc lini tekstu: " << setw(6) << getCountLines() << endl;
	cout << setw(35) << "ilosc znakow w tekscie: " << setw(6) << getCountChar() << endl;
	cout << setw(35) << "ilosc liter w tekscie: " << setw(6) << getAlpha() << endl;
	cout << setw(35) << "ilosc samoglosek w tekscie: " << setw(6) << getVowels() << endl;
	cout << setw(35) << "ilosc wyrazow w tekscie: " << setw(6) << getWords(1) << endl;
	cout << setw(35) << "ilosc spolglosek w tekscie: " << setw(6) << getConsonant() << endl;
	//ilosc wyrazow
}
int DocText::getAlpha() {
	int result{ 0 };
	for (string line : lines) {
		for(int i=0;i<line.size();i++) {
			if (isalpha(line[i])) result++;
		}
	}
	return result;
}
int DocText::getVowels() {
	char vowels[]{ 'a','e','i','o','u','y' };
	int result{ 0 };
	for(string line : lines) {
		for(char znak : line) {
			if (Tools::InArray(vowels, 6, znak)) result++;
		}
	}
	return result;
}
int DocText::getWords(int minLength) {
	int result{ 0 };
	for (string line : lines) {		
		vector<string> words = Tools::Explode(line, ' ');
		for(string w : words) {
			if(w.size()>minLength) result++;
		}		
	}
	return result;
}
int DocText::getConsonant() {
	return 0;//todo
}
void DocText::ContentToFile(string fileName) {
	ofstream of;
	of.open(fileName);
	if(!of.is_open()) return;
	for (auto line : lines) {
		of << line << endl;
	}
	of.close();
}





