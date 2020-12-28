#pragma once
#include "Document.h"


enum class TypeCoding { mp3=1,flac=2,ogg=3,m4a=4 };
class DocSound :    public Document
{
private:
	int length;
	TypeCoding type;
	string getType() {
		switch (type) {
		case TypeCoding::mp3: return "Kodowanie mp3";
		case TypeCoding::flac: return "Kodowanie flac";
		case TypeCoding::ogg: return "Kodowanie ogg";
		case TypeCoding::m4a: return "Kodowanie m4a";
		default: return "Nieokreslone kodowanie!!!";
		}
	}
public:
	DocSound();
	DocSound(string name, int size, int length, TypeCoding type);
	void Info();
	
	
};

