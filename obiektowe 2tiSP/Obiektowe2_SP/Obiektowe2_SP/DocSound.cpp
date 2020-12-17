#include "DocSound.h"

#include <iostream>

DocSound::DocSound():Document() {
	length = 5000;
	type = TypeCoding::mp3;
}
DocSound::DocSound(string name, int size, int length, TypeCoding type)
	:Document(name,size)
{
	this->length = length;
	this->type = type;
}
void DocSound::Info() {
	Document::Info();
	cout << "Czas trwania utworu w sekundach: " << length<<"\t";
	cout << getType() << endl;
}


