#pragma once
#include "Document.h"

enum class TypeOfCoding { mp3,ogg,flac,acc,m4a };
class DocSound :    public Document
{
private:
	int length;
	TypeOfCoding type;
	//.....................
public:
	DocSound();
	DocSound(string name, int size, int length, TypeOfCoding type);
	void Info();
};

