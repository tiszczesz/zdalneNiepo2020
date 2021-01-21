#include "DocText.h"
#include <iostream>
#include <cctype>
#include "Tools.h"
#include <fstream>

DocText::DocText(string name, int size, vector<string> content)
:Document(name,size)
{
	this->content = content;
	cout << "Konstruktor z argumentami klasy DocText" << endl;
}
DocText::DocText()
:Document()
{
	cout << "Konstruktor domyslny klasy DocText" << endl;
}
void DocText::Info() {
	cout << " ============ Info o dokumencie tekstowym ================\n";
	Document::Info();
	cout << "Zawartosc dokumentu tekstowego:" << endl;
	for (auto line : content) {
		cout << line << endl;
	}
	cout << " ====== koniec zawartosci pliku tekstowego ============\n";
	cout << " Statystyki dokumentu tekstowego:" << endl;
	cout << "Ilosc lini: " << getLines() << endl;
	cout << "Ilosc znakow: " << getAllChar() << endl;
	cout << "Ilosc liter: " << getOnlyAlpha() << endl;
	cout << "Ilosc samoglosek: " << getVowels() << endl;
	cout << "Ilosc wyrazow: " << getWords() << endl;
}
int DocText::getAllChar() {
	int result{ 0 };
	for (string line : content) {
		result += line.size();
	}
	return result;
}
int DocText::getOnlyAlpha() {
	int result{ 0 };
	for (string line : content) {
		for(int i=0;i<line.size();i++) {
			if (isalpha(line[i])) result++;
		}
	}
	return result;
}
int DocText::getVowels() {
	const char vowels[] = { 'a','e','i','o','u','y' };
	int result{ 0 };
	for (auto line : content) {
		for(int i=0;i<line.size();i++) {
			if(Tools::isExist(vowels,6,line[i])) {
				result++;
			}
		}
	}
	return result;
}
int DocText::getWords() {
	int result{ 0 };
	for (auto line : content) {
		vector<string> words = Tools::explode(line, ' ');
		result += words.size();
	}
	return result;
}
void DocText::SaveContent(string fileName) {
	ofstream outStream;
	outStream.open(fileName);
	if (!outStream.is_open()) return;
	for (auto elem : content) {
		outStream << elem << endl;
	}
	outStream.close();
}
void DocText::LoadContent(string fileName) {
	ifstream inStream;
	inStream.open(fileName);
	if(!inStream.is_open()) return;
	string line;
	//cin.ignore(2000, '\n');
	content.clear();
	while (getline(inStream,line)) {
		content.push_back(line);
	}
	inStream.close();
}






